<?php
    $page_title = "MLA - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
$reviewedDate = "";
$creatorID ="5";		//This ID is from the help_email ie 10
	$updaterID ="";		//This ID is from the help_email ie 10
	$createdDate ="";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="6/30/2016";	//The date entered here shows up ie 3/2/2015
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
<h2 class="header-line">MLA 8th edition</h2>
	<p align=center>
		“The eighth edition of the MLA Handbook, published in 2016, rethinks documentation for an era of digital publication. The MLA now recommends a universal set of guidelines that writers can apply to any source and gives writers in all fields—from the sciences to the humanities—the tools to intuitively document sources. Learn more below about the changes to MLA guidelines.” <br />
	</p>

		<div class="padding15-left" align=center>
			<div class="hanging-indent">
				<em>What’s New in the Eighth Edition</em>. Modern Language Association, 2016<br />
				<a href="https://www.mla.org/MLA-Style/What-s-New-in-the-Eighth-Edition" target="_blank">https://www.mla.org/MLA-Style/What-s-New-in-the-Eighth-Edition</a><br />
			</div>
		</div>


	<p>
		<!--Purdue OWL explains <a href="https://owl.english.purdue.edu/owl/resource/747/22/" target="_blank">changes in MLA 8th edition</a><br /><br />
-->
		<a href="https://style.mla.org/" target="_blank">“The MLA Style Center”</a> - the free online companion to the MLA Handbook.  The handbook is in the first floor Reference collection, call number <strong>R 808.02 M72h, 2016</strong><br /><br />
        <div class="padding45-left">
            <a id="pdf" href="https://style.mla.org/files/2016/04/practice-template.pdf" target="_blank">MLA practice template <img src="/img/get-pdf.png" /></a> <br /><br />
			<a href="https://style.mla.org/works-cited-a-quick-guide/" target="_blank">Works Cited: A Quick Guide</a>
				<ul>
					<li>
						A source in a single container

							<ul>
								<li>
									e.g. <a href="https://style.mla.org/works-cited-a-quick-guide-book/" target="_blank">an essay in a book</a>
								</li>
								<li>
									e.g. <a href="https://style.mla.org/works-cited-a-quick-guide-video/" target="_blank">a video on a web site</a>
								</li>
							</ul>
					</li>

					<li>A sources in two containers, e.g. <a href="https://style.mla.org/works-cited-a-quick-guide-journal/" target="_blank">a journal article from a database,</a></li>
				</ul>
			<a href="https://style.mla.org/category/behind-the-style/" target="_blank">Behind the Style (MLA Blog): style Q&A and policies </a>
        </div>
    </p>






<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
