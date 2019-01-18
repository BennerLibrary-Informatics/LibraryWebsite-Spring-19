<?php
   $page_title = "3D Printing Services - Benner Library";
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

<h1>3D Printing Services</h1>
	<p>
		The 3D printer is for patrons to create three-dimensional, plastic objects. Informatics staff will print the object after an electronic design has been submitted in the correct format.
	</p>

	<div class="split l40-r60 cf">
		<div class="left">
			<div class="padding15-left">
				Request a 3D print job:<br />
					<div class="margin30-left">
						<a id="pdf" href="/services/other_services/3d_printing/docs/3d_request_online_form.docx" target="_blank">Email 3-D request form</a> <img src="/img/css/info.png" alt="Information" title="Fill out using your computer and then email file." align='absmiddle' /><br />
						<a id="pdf" href="/services/other_services/3d_printing/docs/3d_request_print_form.docx" target="_blank">Printable request form</a> <img src="/img/css/info.png" alt="Information" title="Fill out with pen/pencil and email or bring to Second Floor Service Desk." align='absmiddle' /></a><br />
						<a href="/services/other_services/3d_printing/pla_colors.php">3D printing color choices</a><br /><br />
					</div>

				For ideas and files:<br />
					<div class="margin30-left">
						<a href="https://www.thingiverse.com/" target="_blank">Thingiverse website</a> <br />
						<a href="/services/other_services/3d_printing/selected_websites.php">Selected websites</a><br />
						<a href="/services/other_services/3d_printing/samples.php">3D printing samples</a><br /><br />
					</div>

				Help and policies:<br />
					<div class="margin30-left">
						<a id="pdf" href="https://docs.google.com/document/d/12aiPG_J8VVP-PFSP70LQ3muGGzYsFYy7F-6TauVot9A/edit?usp=sharing" target="_blank">3D printing patron policies</a><br />
						<a id="pdf" href="/help/technology/printing/3d_printing/index.php">3D printing help</a><br />
					</div>
			</div>
		</div>

		<div class="right">
			<div class="full-width-right cf" >
				<!--<img src="/img/bulletins/220x260/3d_printing.png" alt="image" title="image" />-->
				<iframe width="320" height="259" src="https://www.youtube.com/embed/P47wVi4gNsQ" frameborder="0" allowfullscreen></iframe>
			</div>

		</div>
	</div>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
