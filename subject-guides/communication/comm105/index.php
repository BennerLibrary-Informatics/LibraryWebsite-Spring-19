<?php
   $page_title = "COMM 105 - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
$reviewedDate = "";
$creatorID ="5";		//This ID is from the help_email ie 10
	$updaterID ="";		//This ID is from the help_email ie 10
	$createdDate ="";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="7/17/2018";	//The date entered here shows up ie 3/2/2015
	$dateAdded ="";		//The date entered here shows up ie 3/2/2015
	$dateRemoved ="";	//The date entered here shows up ie 3/2/2015
$videoProducer = ""; //This can either be ID or typed name(for 1 time shot)
$videoDirector = "";//This can either be ID or typed name(for 1 time shot)
$videoEditor = "";//This can either be ID or typed name(for 1 time shot)
$voiceOver = "";//This can either be ID or typed name(for 1 time shot)
$videoDate = "";
?>

<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/top.php";
   include_once($path);
?>
<!-- ===== content below here ========================================================== -->
<h2 class="header-line">COMM 105: Fundamentals of Communication</h2>
	<h4>Recommended Sources:</h4>
        <table border = "1" class="readable" >
			<tr>
				<td class="title-font">
					To find...
				</td>
				<td class="title-font">
					Use...
				</td>
			</tr>

			<tr>
				<td valign="top">
					<strong>Popular Articles </strong>
				</td>
				<td>
					<ul class="link-list irs">
					<?php echo print_resource('591', 'basic', 'float_description', 'tutorial'); ?>
					</ul>

					<a id="pdf" href="/subject-guides/communication/comm105/doc/popular_magazines.pdf">List of recommended popular magazines<img src="/img/get-pdf.png" /></a></li>

				</td>
			</tr>

			<tr>
				<td valign="top">
					<strong>eBooks</strong><br />
          for background info and facts
				</td>
				<td>
					<ul class="link-list irs">
						<?php echo print_resource('608', 'basic', 'float_description', 'tutorial'); ?>
            <?php echo print_resource('713', 'basic', 'float_description', 'tutorial'); ?>
						<?php echo print_resource('693', 'basic','float_description', 'tutorial'); ?>
					</ul>
				</td>
			</tr>

			<tr>
				<td valign="top">
					<strong>Photographs and graphics</strong>
				</td>
				<td>
					<ul class="link-list irs">
						<li><a href="/subject-guides/images_multimedia/index.php">Images & Multimedia Subject Guide</a>
					</ul>
				</td>
			</tr>

			<tr>
				<td valign="top">
					<strong>Tutorials & databases</strong>
				</td>
				<td>
					<ul class="link-list irs">
						<li><a href="/subject-guides/communication/comm105/informative.php">Informative Speech</a></li>
						<li><a href="/subject-guides/communication/comm105/persuasive.php">Persuasive Speech</a></li>
					</ul>
				</td>
			</tr>


        </table>
      <br />
       <h4>Help with the Research Process:</h4>
       <table border = "1" class="readable">
		   <tbody>
			   	<tr>
				   	<td valign="top">
						<strong>Understanding the assignment</strong>
				   	</td>
				   	<td>
					   	<ul>
					   		<li> <a id="pdf" href="/subject-guides/communication/comm105/doc/informative-assignment-description.pdf" target="_blank">Informative Speech <img src="/img/get-pdf.png" /></a></li>
					   		<li><a id="pdf" href="/subject-guides/communication/comm105/doc/persuasive-assignment-description.pdf" target="_blank">Persuasive Speech <img src="/img/get-pdf.png" /></a></li>
					   	</ul>
					   	Tip: <a id="pdf" href="/subject-guides/communication/comm105/doc/library-audience-analysis.pdf" target="_blank">Audience Assessment summary</a>
				   	</td>
			   	</tr>

			   	<tr>
				   	<td valign="top">
						<strong>Topic Exploration</strong>
				   	</td>
				   	<td>
							Use the optional <a id="pdf" href="/subject-guides/communication/comm105/doc/flower-diagram.pdf" target="_blank">"Flower Diagram"</a> to brainstorm narrower aspects of your topic.<br />
							Complete <a id="pdf" href="/subject-guides/communication/comm105/doc/process-check2.pdf" target="_blank">Process Check#2</a> to confirm that there are enough resources to make your topic do-able.<br /><br />
						<strong>Need help?</strong>
						<a href="/subject-guides/communication/comm105/informative.php">Watch the videos</a> or
						<a href="/contact/ask-a-librarian.php">Ask a Librarian</a><br /><br />
			   		</td>
			   	</tr>

			   	<tr>
					<td valign="top">
						<strong>Evaluate Information</strong>
					</td>
					<td>
						Criteria: <a href="http://guides.library.cornell.edu/c.php?g=32334&p=203773&preview=ad0bac0490cf7ab0653096fe3b4a0fee" target="_blank">for webpages</a>
						| <a href="http://www.tarleton.edu/departments/library/library_module/unit8/8articles_lm.htm" target="_blank">for articles</a>
					</td>
			   	</tr>

			   	<tr>
					<td valign="top">
						<strong>Writing & Ethical Communication</strong>
					</td>
					<td>
						<a id="pdf" href="/subject-guides/communication/comm105/doc/annotated-bibliography.pdf" target="_blank">Annotated Bibliography</a>— These instructions are used by some ONU speech instructors<br /><br />
						<a href="/help/citation/apa/index.php">APA Citations</a>
					</td>
			   	</tr>
		   </tbody>
       </table>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
