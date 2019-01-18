<?php
   $page_title = "404 Error - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
?>

<?php
   $home_only_crumb = "home-only";
   include_once($_SERVER['DOCUMENT_ROOT']."/scripts/top.php");
?>

<?php
    require($_SERVER['DOCUMENT_ROOT']."/class/phpmailer/class.phpmailer.php");
    $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null;
    $mail = new PHPMailer();
    $mail->IsSMTP(); // send via SMTP
    $backupMail=new PHPMailer();
    $backupMail->IsSMTP();
    $in=array('20');
    $count = 0;
    while($count<sizeof($in)){
        $getEmail = sprintf("SELECT name,email
                      FROM help_email WHERE id='%s'",
                $db->real_escape_string($in[$count]));
        $emailResults = $db->query($getEmail) or die($db->error);
        $to_String = "";
        while($results = $emailResults->fetch_array()){
            $mail->AddAddress($results['email'],$results['name']);
        }
        $count++;
    }

    ////////////////////////////////////////////////////////

    // get current timestamp
    $date = date('Y/m/d h:i:s');

    // if this ip address is not blacklisted
    $blacklisted = sprintf("SELECT *
                            FROM `error_blacklist`
                            WHERE ip_address = '%s'",
                        $db->real_escape_string($_SERVER['REMOTE_ADDR']));
    $blacklistedQuery = $db->query($blacklisted) or die($db->error);
    $blacklistedRow = $blacklistedQuery->fetch_array();

    if($blacklistedRow[0] == ''){
        // selecting link if requesting link is on the perm table
        $tableInfo =  sprintf("SELECT *
                                FROM `error_perm`
                                WHERE requestingLinkName = '%s'
                                AND referringLinkName = '%s'",
                            $db->real_escape_string($_SERVER['REQUEST_URI']),
                            $db->real_escape_string($referer));
        $runInfo = $db->query($tableInfo) or die($db->error);

        // Did the query work
        $row = $runInfo->fetch_array();

        // If not on perm, check temp table
        if($row == ''){
            // check if requesting link is on the temp table
            $tableInfo =  sprintf("SELECT *
                                   FROM `error_temp`
                                   WHERE requestingLinkName = '%s'
                                   AND referringLinkName = '%s'",
                               $db->real_escape_string($_SERVER['REQUEST_URI']),
                               $db->real_escape_string($referer));
            $runInfo = $db->query($tableInfo) or die($db->error);

            // Did the query work
            $row = $runInfo->fetch_array();

            // if on temp, then move to perm and delete from temp
            if($row){
                // insert into perm
                $sql = sprintf("INSERT INTO error_perm (requestingLinkName, referringLinkName, requestingIP, date, tally)
                        VALUES ('%s', '%s', '%s', '%s', 2)",
                        $db->real_escape_string($_SERVER['REQUEST_URI']),
                        $db->real_escape_string($referer),
                        $db->real_escape_string($_SERVER['REMOTE_ADDR']),
                        $db->real_escape_string($date));
                $result = $db->query($sql) or die($db->error);

                // delete from temp
                $sql = sprintf("DELETE
                                FROM error_temp
                                WHERE requestingLinkName = '%s'
                                AND referringLinkName = '%s'",
                            $db->real_escape_string($_SERVER['REQUEST_URI']),
                            $db->real_escape_string($referer));
                $result = $db->query($sql) or die($db->error);

                //check if error_addresses exist for this address and accumlate or add new a error_addresses
                $checkAddress = sprintf("SELECT * FROM error_addresses WHERE ip_address = '%s'",
                						$db->real_escape_string($_SERVER['REMOTE_ADDR']));

                $runErrAddress = $db->query($checkAddress) or die($db->error);
                $addressRow = $runErrAddress->fetch_array();

                if ($addressRow) {
                    $sql = sprintf("UPDATE error_addresses SET hits = hits+1 WHERE ip_address = '%s'",
                    		$db->real_escape_string($_SERVER['REMOTE_ADDR']));
                    $result = $db->query($sql) or die($db->error);
                } else {
                    $sql = sprintf("INSERT INTO error_addresses (ip_address, hits)
                                VALUES ('%s', 1)",
                    		$db->real_escape_string($_SERVER['REMOTE_ADDR']));
                    $result = $db->query($sql) or die($db->error);
                }

            } else { // it is not on temp
                // insert into temp
                $sql = sprintf("INSERT INTO error_temp (requestingLinkName, referringLinkName, requestingIP, date)
                    VALUES ('%s', '%s', '%s', '%s')",
                    $db->real_escape_string($_SERVER['REQUEST_URI']),
                    $db->real_escape_string($referer),
                    $db->real_escape_string($_SERVER['REMOTE_ADDR']),
                    $db->real_escape_string($date));
                $result = $db->query($sql) or die($db->error);

                //check if error_addresses exist for this address and accumlate or add new a error_addresses
                $checkAddress = sprintf("SELECT * FROM error_addresses WHERE ip_address = '%s'",
                						$db->real_escape_string($_SERVER['REMOTE_ADDR']));
                $runErrAddress = $db->query($checkAddress) or die($db->error);
                $addressRow = $runErrAddress->fetch_array();

                if ($addressRow) {
                    $sql = sprintf("UPDATE error_addresses SET hits = hits+1 WHERE ip_address = '%s'",
                    		$db->real_escape_string($_SERVER['REMOTE_ADDR']));
                    $result = $db->query($sql) or die($db->error);
                } else {
                    $sql = sprintf("INSERT INTO error_addresses (ip_address, hits)
                                VALUES ('%s', 1)",
                    		$db->real_escape_string($_SERVER['REMOTE_ADDR']));
                    $result = $db->query($sql) or die($db->error);
                }
            }

        } else {
        // if on perm table, then increase tally and set ip to newest ip
            $sql = sprintf("UPDATE error_perm SET tally = tally+1, requestingIP = '%s'
                            WHERE requestingLinkName = '%s'
                            AND referringLinkName = '%s'",
                            $db->real_escape_string($_SERVER['REMOTE_ADDR']),
                            $db->real_escape_string($_SERVER['REQUEST_URI']),
                            $db->real_escape_string($referer));
            $result = $db->query($sql) or die($db->error);

            //check if error_addresses exist for this address and accumlate or add new a error_addresses
            $checkAddress = sprintf("SELECT * FROM error_addresses WHERE ip_address = '%s'",
            						$db->real_escape_string($_SERVER['REMOTE_ADDR']));
            $runErrAddress = $db->query($checkAddress) or die($db->error);
            $addressRow = $runErrAddress->fetch_array();

            if ($addressRow) {
                $sql = sprintf("UPDATE error_addresses SET hits = hits+1 WHERE ip_address = '%s'",
                		$db->real_escape_string($_SERVER['REMOTE_ADDR']));
                $result = $db->query($sql) or die($db->error);
            } else {
                $sql = sprintf("INSERT INTO error_addresses (ip_address, hits)
                            VALUES ('%s', 1)",
                		$db->real_escape_string($_SERVER['REMOTE_ADDR']));
                $result = $db->query($sql) or die($db->error);
            }
        }
    }
?>

<!-- ===== content below here ========================================================== -->
<h1>404 Error - Page Not Found</h1>

 <img src="/img/404.png" alt="Something's Missing"/>




<div class="double_space">

   <p>The page you've requested has moved or no longer exists. Note: If you are trying to use library.olivet.edu/pubserv... that directory no longer exists. Contact the <a href='/forms/email/index.php?id=105'>Webmaster</a> for assistance. </p>

   <p>The site you were looking for has already been reported to the Webmaster. Thank you for your support in making our site better.</p>
</div>


<!-- ===== content above here ========================================================== -->
<?php include_once($_SERVER['DOCUMENT_ROOT']."/scripts/bottom.php"); ?>
