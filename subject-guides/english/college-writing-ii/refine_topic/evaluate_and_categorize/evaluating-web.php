<?php
   $page_title = "Evaluating Web Sources - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = ""; 
	$reviewerID = "";
$reviewedDate = "";
$creatorID ="5";		//This ID is from the help_email ie 10
	$updaterID ="";		//This ID is from the help_email ie 10
	$creatorNotes =""; // this note will print before created date 
	$updaterNotes = ""; // this note will print before updated date 
	$createdDate ="5/01/2014";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="5/25/2015";	//The date entered here shows up ie 3/2/2015
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
<h3 class="header-line">Evaluating Web Sources</h3>
	
	<p class="title-font">Problem: I always hear that Internet sources can’t be trusted, but this source seems perfect.<br /><br />
	Strategy: You’re wise to question this oversimplification.  Evaluate each situation and site individually; sometimes a commercial or advocacy web site is appropriate to cite in an academic project.
	</p>
		
		<p class="title-font">How-to:</p>
			<ul>
				<li>Cornell University librarians list important considerations about the context of your information need/project and the purpose of an individual site. <a href="http://olinuris.library.cornell.edu/ref/research/webeval.html" target="_blank">Evaluating Web Sites: Criteria and Tools</a></li>
			</ul>
	
	<div class="margin10-left margin10-right border-double color-light-grey fcolor-grey">
		<h6>Dig Deeper:</h6>
		<p>Looking for reliable web sources?  Here are two well-known and highly-regarded web portals, with links curated by real people, to get you started:
		</p>
		<ul>
			<li><a href="http://www.ipl.org/" target="_blank">ipl2</a> Browse by subject or Special Collection<br />
			ipl2 is "’information you can trust’…launched [by] merging the collections of resources from the Internet Public Library (IPL) and the Librarians' Internet Index (LII) websites.”</li>

			<li><a href="http://vlib.org/" target="_blank">The WWW Virtual Library</a><br />
			The WWW Virtual Library “….is run by a loose confederation of volunteers, who compile pages of key links for particular areas in which they are expert; even though it isn't the biggest index of the Web, the VL pages are widely recognised as being amongst the highest-quality guides to particular sections of the Web.”</li>
		</ul>
		
	</div>
	



<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>