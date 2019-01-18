<?php
   $page_title = "Help - Benner Library";
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
<h1>Tutorial Development</h1>
	<div class="split cf">
		<div class="left">
			<h6>Tutorial Needs Revision</h6>
			<div class="padding15">
				<?php echo print_bookmark('147', 'float_description', 'tab', 'no'); ?>
			</div>
		</div>

		<div class="right">
			<h6>Tutorial Completed Add to Website</h6>
			<div class="padding15">
				<?php echo print_bookmark('148', 'float_description', 'tab', 'no'); ?>
			</div>
		</div>
	</div>

	<p><a id="pdf" href="/help/tutorial-development/doc/adding-completed-tutorials-to-dcod.docx">Directions</a> on adding tutorials to DCOD.<br /><br />
	Tutorial Description with this code:<br />
	img align="absmiddle"src="http://library.olivet.edu/img/help/tutorial_pdf.png" <img align="absmiddle"src="http://library.olivet.edu/img/help/tutorial_pdf.png" /><br />
	img align="absmiddle"src="http://library.olivet.edu/img/help/tutorial_movie.png" <img align="absmiddle"src="http://library.olivet.edu/img/help/tutorial_movie.png" /><br />
	img align="absmiddle"src="http://library.olivet.edu/img/help/tutorial_word.png" <img align="absmiddle"src="http://library.olivet.edu/img/help/tutorial_word.png" /><br />
	img align="absmiddle"src="http://library.olivet.edu/img/help/tutorial_html.png" <img align="absmiddle"src="http://library.olivet.edu/img/help/tutorial_html.png" /><br />
	</p>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
