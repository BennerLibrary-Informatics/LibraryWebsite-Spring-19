<?php
   $page_title = "Peer-Review Process - Benner Library";
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
	$createdDate ="8/01/2014";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="1/8/2019";	//The date entered here shows up ie 3/2/2015
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
<h3 class="header-line">Peer-Review Process</h3>
	<p class="title-font bold">Problem: How can I tell if this article is from a peer-reviewed source?</p>
	<p>Strategy: If you need to be certain that a journal is peer-reviewed, or “refereed,” use our database tools.</p>
	<div class="split l70-r30 cf">
		<div class="left">
			<p class="title-font">How-to:</p>
			<ul>
				<li>You may need to do a web search for the journal title to see what the publisher says about the journal.  OR</li>
				<li>Our library also subscribes to a database about journals.  Search for the journal title in Ulrichsweb to learn about it.  OR</li>
				<li>The easiest way is to utilize the feature in some library databases where each journal title is a link, taking you to more details about the publication.</li>
      <h5>Ebsco Example:</h5>
      <img src="/subject-guides/english/college-writing-ii/img/ebsco.jpg" "EBSCO screenshot" title="EBSCO screenshot" />
      <h5>ProQuest Example:</h5>
      <img src="/subject-guides/english/college-writing-ii/img/proquest.png" "EBSCO screenshot" title="Proquest screenshot" />
      </ul>
		</div>

		<div class="right">
			<div class="margin10-left margin10-right border-double color-light-grey fcolor-grey center">
			<h6>Now you know:</h6>
			<p>"A process by which a scholarly work (sucah as a paper or a research proposal) is checked by a group of experts in the same field to make sure it meetst he necessary standards before it is published or accepted." <a href="http://www.merriam-webster.com/dictionary/peer%20review" target="_blank">Merriam Webster Online Dictionary</a>
			</p>
			</div>
		</div>
	</div>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
