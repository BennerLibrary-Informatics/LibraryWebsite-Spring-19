<?php
   $page_title = "Email Form - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
    $js = "<script type=\"text/javascript\" src=\"/js/libraries/livevalidation.js\"></script>";
?>

<?php include_once($_SERVER['DOCUMENT_ROOT']."/scripts/top.php"); ?>

<?php
    if(isset($_GET['id'])){
        $idArray = explode(',', $_GET['id']);

        $getEmail = sprintf("SELECT *
                             FROM help_email");
        $emailResults = $db->query($getEmail) or die($db->error);
        $counter = 0;
        while ($results = $emailResults->fetch_array()) {
            if (isset($idArray[$counter]) && $results['ID'] == $idArray[$counter]) {
                $nameArray[$counter] = $results['name'];
                $emailArray[$counter] = $results['email'];
                $phoneArray[$counter] = $results['phone'];
                $titleArray[$counter++] = $results['title'];
            }
        }
        $counter2 = 0;
    }
    if(isset($_GET['emp_ids'])){
        $_SESSION['cat_owner']=$_GET['emp_ids'];
        $sql=sprintf('SELECT e.first_name,e.last_name,e.olivet_email,esg.emp_id,e.emp_id FROM employee e,emp_staff_group esg WHERE esg.id ="%s"AND esg.emp_id=e.emp_id',
        		$db->real_escape_string($_GET['emp_ids']));
        $query=$db->query($sql)or die($db->error);
        $emailName=$query->fetch_array();
        $_SESSION['email_string']=$emailName['first_name'].' '.$emailName['last_name'].' | Selected Sites Manager';
        $sql7=sprintf('SELECT ID FROM help_email WHERE name="%s"',
        		$db->real_escape_string($emailName['first_name'].' '.$emailName['last_name']));
        $query7=$db->query($sql7);
        $results=$query7->fetch_array();
        $id=$results['ID'];
        echo 'ID IS'.$id;
    }

    // If an sid (subject ID) is set in url, interpret the subject
    if (isset($_GET['sid'])) {
        switch ($_GET['sid']) {
            case 1:
                $subject = "Edit Job Application";
                break;
            case 2:
                $subject = "EzProxy Bandwidth Limit Error";
                break;
            case 3:
                $subject = "Request additional archives patron stats department";
                break;
            case 4:
                $subject = "Report an issue on Checklist";
                break;
            case 5:
                $subject = "Report an issue on Group Control";
                break;
            case 6:
                $subject = "Report an issue on Password";
                break;
            case 7:
                $subject = "Report an issue on Staff Access";
                break;
            case 8:
                $subject = "Report an issue on Status";
                break;
            case 9:
                $subject = "Report an issue on Substitutions";
                break;
            case 10:
                $subject = "Report an issue on Tally";
                break;
            case 11:
                $subject = "Report an issue on Bulletins";
                break;
            case 12:
                $subject = "Report an issue on Watch Dog";
                break;
            case 13:
                $subject = "Report an issue on Counter Stats";
                break;
            case 14:
                $subject = "Report an issue on Database Checks";
                break;
            case 15:
                $subject = "Report an issue on Job App";
                break;
            case 16:
                $subject = "Report an issue on Periodicals";
                break;
            case 17:
                $subject = "Report an issue on eResource Checks";
                break;
            case 18:
                $subject = "Report an issue on EmployeeDB";
                break;
            case 19:
                $subject = "Report an issue on Knowledge Base";
                break;
            case 20:
                $subject = "Report an issue on Service Stats";
                break;
            case 21:
                $subject = "Report an issue on Point of Sale";
                break;
            case 22:
                $subject = "Report an issue on Checkout Management";
                break;
            case 23:
                $subject = "Open Room assistance"
            case 24:
                $subject = "Report an issue on Open Room"
        }
    } else
        $subject = "";
?>


<!-- ===== content below here ========================================================== -->

    <form action="email-do.php?id=<?php if(isset($_GET['id']))echo $_GET['id'];else if(isset($id))echo $id; ?>" method="post" name="email" id="email">
        <h3 class="no-margin-top">Send Email to:</h3>
        <h4 class="no-margin-top padding10-left">
            <?php
                if (isset($_GET['emp_ids']))
                    echo $_SESSION['email_string'];
                else
                    if (isset($counter)&&$counter > 1) {
                        $counter2 = 0;
                        while ($counter2 < $counter) {
                            echo $nameArray[$counter2];
                            if ($titleArray[$counter2] != "")
                                echo ': '.$titleArray[$counter2];
                            if ($phoneArray[$counter2] != "")
                            echo '<h6 class="no-margin-top padding15-left" style="padding-top:0px">Phone Number: '.$phoneArray[$counter2].'</h6><h4 class="no-margin-top padding10-left" style="padding-top:0px">';
                            if ($counter2++ != ($counter - 1))
                                echo '';
                        }
                    } else {
                        if(!isset($nameArray[0]))
                            $name='Benner Library';
                        else $name=$nameArray[0];
                            echo $name;
                        if ((isset($titleArray[0]))&&$titleArray[0] != "")
                            echo ': '.$titleArray[0];
                        if ((isset($phoneArray[0]))&&$phoneArray[0] != "")
                            echo '<br /><h6 class="padding15-left">Phone Number: '.$phoneArray[0].'</h6><h4>';
                    }
            ?>
        </h4>
        <label for="from"><span>From: (email address) *</span>

            <div class="field-wrapper" style="padding:0px; display:inline-block; width: 70%;">
            <input id="from"  type="text" name="from" id="from" style="width:60%; min-width: 180px" />
            <script type="text/javascript">
                var from = new LiveValidation('from', {wait: 500})
                from.add( Validate.Presence );
                from.add( Validate.Email );
            </script>
            </div>

        </label>

        <label for="subjet"><span>Subject: *</span>

            <div class="field-wrapper" style="padding:0px; display:inline-block; width: 70%;">
            <input id="subject" type="text" name="subject" style="width:60%; min-width: 180px;" value="<?php echo $subject; ?>" />
            <script type="text/javascript">
                var subject = new LiveValidation('subject', {wait: 500})
                subject.add( Validate.Presence );
            </script>
            </div>

        </label>

        <label for="message"><span>Message:</span>
            <textarea id="message" name="message" rows="10" cols="80" style="width:80%;"></textarea>
        </label>

        <label>
            <input type="submit" name="send" value="Send" />
            <input type="reset" name="Clear Fields" value="Clear All Fields" />
        </label>

        <input type="hidden" name="home" value="<?php echo (isset($_GET['home']) && $_GET['home']) ? "1" : "0"; ?>" />
        <input name='refer' id='refer' style='display:none' />
    </form>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
