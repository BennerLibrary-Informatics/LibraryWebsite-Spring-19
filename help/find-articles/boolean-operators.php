<?php
   $page_title = "Boolean Operators - Benner Library";
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
	$createdDate ="4/01/2014";	//The date entered here shows up ie 3/2/2015
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
<h3>Boolean Operators</h3>
	<p class="title-font bold">Problem: I'm not getting the results I want.</p>
	<p>Strategy: Take control!  Tell the database exactly what you want.  But, you have to speak its language.<br /><br />
	How-to: Combine search terms with Boolean Operators/Expressions: and, or, not, "". <a href="http://rockwellschrock.com/rbs3k/boolean/index.htm" target="_blank">See demo</a>.
	</p>
		<table class="border-tr">
			<thead align="center">
				<tr>
					<td>Operator</td>
					<td>When to use it</td>
					<td>Example</td>
					<td></td>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td>""</td>
					<td>To search for an exact phrase.<br />
					This is especially useful for people’s names and new terms</td>
					<td>"climate change"</td>
					<td></td>
				</tr>
				<tr>
					<td>AND</td>
					<td>To combine two different concepts to get a small set of relevant results</td>
					<td>"climate change" AND weather</td>
					<td><a href="http://rockwellschrock.com/rbs3k/boolean/index.htm" target="_blank">See demo</a></td>
				</tr>
				<tr>
					<td>OR</td>
					<td>To expand your search to include synonyms/related terms</td>
					<td>"climate change" OR “global warming”</td>
					<td><a href="http://rockwellschrock.com/rbs3k/boolean/index.htm" target="_blank">See demo</a></td>
				</tr>
				<tr>
					<td>NOT</td>
					<td>To expand your search to include synonyms/related terms</td>
					<td>"climate change" NOT petrochemicals</td>
					<td><a href="http://rockwellschrock.com/rbs3k/boolean/index.htm" target="_blank">See demo</a></td>
				</tr>
			</tbody>
		</table>

	<h6>Dig Deeper</h6>
		<p>Try it yourself using: <?php echo print_resource('564', 'basic', 'float_description', 'tutorial', 'no-li'); ?><br /><br />




<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
