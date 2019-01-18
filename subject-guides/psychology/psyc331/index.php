<?php
   $page_title = "PSYC(SOCY/SOWK) 331: Basic Research & Statistics - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
$reviewedDate = "";
$creatorID ="5"; //This ID is from the help_email ie 10
	$updaterID =""; //This ID is from the help_email ie 10
	$createdDate =""; //The date entered here shows up ie 3/2/2015
	$updatedDate ="07/16/2018"; //The date entered here shows up ie 3/2/2015
	$dateAdded =""; //The date entered here shows up ie 3/2/2015
	$dateRemoved =""; //The date entered here shows up ie 3/2/2015
?>

<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/top.php";
   include_once($path);
?>
<!-- ===== content below here ========================================================== -->


<h2 class="header-line">PSYC(SOCY/SOWK) 331:<br />
Basic Research &amp; Statistics</h2>


<h3 class="Theme1">Databases</h3>
	<div class="table-wrapper">
        <table width="100%" border="1">
            <tr>
				<th>Discipline</th>
				<th>Recommended Database</th>
				<th>Library Subject Guide</th>
            </tr>

            <tr valign="top">
                <td><strong>Athletic Training</strong></td>
                <td><?php echo print_resource('756', 'basic', 'no_description', 'no-li'); ?></td>
                <td><a href="/subject-guides/exercise_sports-science/index.php">Exercise &amp; Sports Science</a></td>
             </tr>

             <tr valign="top">
                <td><strong>Criminal Justice</strong></td>
                <td><?php echo print_resource('673', 'basic', 'no_description', 'no-li'); ?></td>
                <td><a href="/subject-guides/criminal-justice/index.php">Criminal Justice</a></td>
              </tr>

             <tr valign="top">
                <td><strong>Dietetics</strong></td>
                <td><?php echo print_resource('564', 'basic', 'no_description', 'no-li'); ?><br />
				              <?php echo print_resource('699', 'basic', 'no_description', 'no-li'); ?></td>

				<td><a href="/subject-guides/family_consumer-sciences/index.php">FACS</a><br />
                <a href="/subject-guides/nursing/index.php">Nursing</a></td>
              </tr>

              <tr valign="top">
                <td><strong>Psychology</strong></td>
                <td><?php echo print_resource('743', 'basic', 'no_description', 'no-li'); ?></td>
                <td><a href="/subject-guides/psychology/index.php">Psychology</a></td>
              </tr>

              <tr valign="top">
                <td><strong>Sociology </strong></td>
                <td><?php echo print_resource('676', 'basic', 'no_description', 'no-li'); ?></td>
                <td><a href="/subject-guides/sociology/index.php">Sociology</a></td>
              </tr>
        </table>

	</div>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
