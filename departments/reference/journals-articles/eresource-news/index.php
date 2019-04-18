<?php
   $page_title = "eResources News - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = ""; 
?>

<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/top.php";
   include_once($path);
?>
<!-- ===== content below here ========================================================== -->


<h1>eResource News</h1>
    <table class="margin15-left margin10-top" style="width:70%">
        <col width="20%">
        <col width="35%">
        <col width="30%">
        <col width="15%">
        <?php  
            $sql = 'SELECT r.resource_name, s.supplier_name,
                        DATE_FORMAT(t1.date, "%m/%d/%Y") startdate,
                        DATE_FORMAT(t1.date_end, "%m/%d/%Y") enddate,
                        t1.time,
                        t1.issue,
                        t1.announcements_type
                    FROM troubleshooting_log t1 LEFT JOIN resource r
                        ON t1.resource_id = r.resource_id,
                        troubleshooting_log t2 LEFT JOIN supplier s
                        ON t2.supplier_id = s.supplier_id
                    WHERE t1.troubleshooting_id = t2.troubleshooting_id AND
                        t1.announcements 
                    ORDER BY t1.announcements_type, t1.date DESC';
            $query = $db->query($sql);
            $num_rows = $query->num_rows;
            if (!$num_rows)
                echo '<tr align="left"><th>None Currently</th></tr>';
            else
                echo '<tr align="left" class="padding10"><th>Name</th><th>Date/Time of Maintenance</th><th>Issue</th><th>Type</th></tr>';

                while ($results = $query->fetch_array()) {
                switch ($results) {
                    case (($results['enddate'] == NULL || $results['enddate'] == '00/00/0000') &&
                        ($results['time']    == NULL || $results['time']    == '')):
                        $datestring = 'On '.$results['startdate'];
                        break;
                    case (($results['enddate'] != NULL && $results['enddate'] != '00/00/0000') &&
                        ($results['time']    == NULL || $results['time']    == '')):
                        $datestring = 'From '.$results['startdate'].' to '.$results['enddate'];
                        break;
                    case (($results['enddate'] == NULL || $results['enddate'] == '00/00/0000') &&
                        ($results['time']    != NULL && $results['time']    != '')):
                        $datestring = 'On '.$results['startdate'].' at '.$results['time'];
                        break;
                    default:
                        $datestring = 'From '.$results['startdate'].' to '.$results['enddate'].' at '.$results['time'];
                        break;
                }

                $name  = (is_null($results['resource_name'])) ? $results['supplier_name'] : $results['resource_name'];
                $notes = (is_null($results['issue'])) ? '' : $results['issue'];
                $announce_type = $results['announcements_type'];
                echo '<tr><td class="padding20-right">',$name,'</td><td class="padding20-right">',$datestring,'</td><td class="padding20-right">',$notes,'</td><td class="padding20-right">',$announce_type,'</td></tr>';
            }
        ?>
    </table>

<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>