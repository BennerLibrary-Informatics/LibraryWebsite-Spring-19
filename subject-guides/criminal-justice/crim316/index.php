<?php
    $page_title = "CRIM316 - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
$reviewedDate = "";
$creatorID ="";		//This ID is from the help_email ie 10
	$updaterID ="5";		//This ID is from the help_email ie 10
	$createdDate ="";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="05/27/2015";	//The date entered here shows up ie 3/2/2015
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


<h2 class="header-line">CRIM316: Correctional Process</h2>

<h3>Databases:</h3>
	<ul class="link-list irs">
		<?php echo print_resource('608', 'advanced', 'float_description'); ?>
		<?php echo print_resource('673', 'advanced', 'float_description'); ?>
		<?php echo print_resource('676', 'advanced', 'float_description', 'tutorial', 'break'); ?>
		<?php echo print_resource('649', 'advanced', 'float_description', 'tutorial', 'break'); ?>
		<br />
	</ul>

<h3>Journal Search</h3>
	<p>
		<a href="https://gg9fg7cr5h.search.serialssolutions.com/?V=1.0&L=GG9FG7CR5H&N=100&SS_searchTypeAll=yes&S=SC&C=SO0478" target="_blank">
		Social Sciences > Social Welfare & Social Work > Criminology, Penology & Juvenile Delinquency</a>
	</p>

<h3>Subject Search for Books:</h3>
	<p>Do a subject search in Benner Library's online catalog. Use the suggested terms listed below.</p>

	<div class="split l60-r40 cf">
		<div class="left">
			<div class="padding15">
				<form method="get" action="http://vufind.carli.illinois.edu/vf-onu/Search/Home" name="searchForm" class="search" target="vufind">
				<fieldset>
					<label for="lookFor"><strong>Search Benner Library: </strong></label>
					<input type="hidden" name="start_over" value="1" />
					&nbsp;<input type="text" name="lookfor" id="lookFor" size="40" value="" />
					<input type="hidden" name="type" value="subject" />
					<input type="hidden" name="advHathi" value="include"/>
					<input type="hidden" name="search" value="new" />
					&nbsp;<input type="submit" name="submit" value="Find" />
				</fieldset>
				</form>
			</div>

		<h6>Library of Congress Subject headings (“topics”)</h6>
			<div class="margin15">
				<ul>
					<li>Correctional institutions</li>
					<li>Correctional law</li>
					<li>Correctional personnel</li>
					<li>Corrections</li>
					<li>Criminal justice, administration of</li>
					<li>Criminals</li>
					<li>Police administration</li>
					<li>Prisoners</li>
					<li>Prisons</li>
					<li>Punishment</li>
					<li>Sentences (criminal procedure)</li>
				</ul>
			</div>
		</div>

		<div class="right">
		</div>
	</div>

	<h3>Selected Book Titles at Benner Library</h3>

		<p>
			<em>Corrections in the 21st century</em><br />
			by Frank Schmalleger Published c2009<br />
			Call Number: 364.6 Sch43c, 2009<br />
			Location: Stacks - 2nd Floor
		</p>
		<p>
			<em>Restorative justice: ideals and realities</em><br />
			by Margarita Zernova Published c2007<br />
			eBook: <a href="https://login.proxy.olivet.edu/login?url=http://site.ebrary.com/lib/olivet/Doc?id=10209207" target="_blank">https://login.proxy.olivet.edu/login?url=http://site.ebrary.com/lib/olivet/Doc?id=10209207</a>
		</p>
		<p>
			<em>Doing time: an introduction to the sociology of imprisonment</em><br />
			Roger Matthews c1999<br />
			eBook: <a href="https://login.proxy.olivet.edu/login?url=http://site.ebrary.com/lib/olivet/Doc?id=2002995" target="_blank">https://login.proxy.olivet.edu/login?url=http://site.ebrary.com/lib/olivet/Doc?id=2002995</a>
		</p>

<h3>Sample Websites:</h3>
<p><?php echo print_bookmark('198', 'under_description', 'tab', 'no'); ?></p>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
