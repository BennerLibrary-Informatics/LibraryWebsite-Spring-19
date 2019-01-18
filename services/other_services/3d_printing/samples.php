<?php
   $page_title = "3D Printing Samples - Benner Library";
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

<h1>3D Printing Samples</h1>
	<p>
		Below are some examples of objects we have printed on our 3D printer. Visit the link to see where the file originated in thingiverse.com and read more about the item itself. The cost in the picture is an estimated cost at the time that the object was printed.
	</p>

	<div class="split cf">

		<div class="left" align="center">
			<?php
				// sequence number first needs to be space before item name. Item name needs hyphens
				// no spaces in item name. Underscore (_) proceeds thingiverse item number
				$dirname = 'img/';
				$images = glob($dirname."*.*", GLOB_NOSORT);
				$count = 0;
				foreach($images as $image) {
					$count = $count + 1;
					if ($count % 2 != 0) {
						$info = pathinfo($image);
						if ($info['extension'] != "db") {
							$thing_file = basename($image,'.'.$info['extension']);
							$pos = strpos($thing_file, "_"); //Start position of thingiverse item #
							$spacepos = strpos($thing_file, " "); //Start position of file name
							$thing_display = str_replace("-", " ",substr($thing_file, $spacepos+1, $pos-4));  //$pos-3 equals any position of the underscore minus the three beginning characters of file
							$thing_link = substr($thing_file, $pos+1); //gets thingivers item number
							echo '<a href="https://www.thingiverse.com/thing:'.$thing_link.'" target="_blank" class = "margin15">';
							echo '<img class="margin15 no-margin-bottom" src="'.$image.'" width=300 />';
							echo 	'<h5 class="no-margin-top" align=center>'.$thing_display.'</h5>';
							echo '</a>';

							/*$docsDir = "docs/";
							$pdfFile = $docsDir.$thing_display.".pdf";
							//echo $pdfFile;
							if (file_exists( $pdfFile )) {
								echo '<a id="pdf" href="'.$pdfFile.'" target="_blank" title="filled out request form">Print it';
								echo '</a>';
							}
							else {
								echo "<br />";
							}*/


						}
					}
				}


			?>

		</div>
		<div class="right" align="center">
			<?php
				$dirname = 'img/';
				$images = glob($dirname."*.*", GLOB_NOSORT);
				$count = 0;
				foreach($images as $image) {
					$count = $count + 1;
					if ($count % 2 == 0) {
						$info = pathinfo($image);
						if ($info['extension'] != "db") {
							$thing_file = basename($image,'.'.$info['extension']);
							$pos = strpos($thing_file, "_");
							$spacepos = strpos($thing_file, " ");
							$thing_display = str_replace("-", " ",substr($thing_file, $spacepos+1, $pos-4));  //$pos-3 equals any position of the underscore minus the three beginning characters of file
							$thing_link = substr($thing_file, $pos+1);
							echo '<a href="https://www.thingiverse.com/thing:'.$thing_link.'" target="_blank" class = "padding15">';
							echo '<img class="margin15 no-margin-bottom" src="'.$image.'" width=300 />';
							echo 	'<h5 class="no-margin-top" align=center>'.$thing_display.'</h5>';
							echo '</a>';

							/*$docsDir = "docs/";
							$pdfFile = $docsDir.$thing_display.".pdf";
							//echo $pdfFile;
							if (file_exists( $pdfFile )) {
								echo '<a id="pdf" href="'.$pdfFile.'" target="_blank" title="filled out request form">Print it';
								echo '</a>';
							}
							else {
								echo "<br />";
							}*/


						}
					}
				}


			?>

		</div>
	</div>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
