<?php
   $page_title = "Dewey Decimal System - Benner Library";
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
	$updatedDate ="08/02/2018";	//The date entered here shows up ie 3/2/2015
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
<h3>Dewey Decimal System</h3>
	<p>
		Benner Library’s books are physically organized using the Dewey Decimal system.  Learn more:
		<ul>
			<li><a href="https://www.oclc.org/dewey/features/summaries.en.html#ten" target="_blank">Dewey Decimal call numbers and subjects</a></li>
			<li><a href="/books-media/dewey-decimal-classification">Reference books for each Dewey class</a></li>
			<li><a href="/subject-guides/english/college-writing-ii/research_concepts/dewey-decimal-system.php">On which floors at Benner can you find each call number?</a></li>
		</ul>
	</p>

		<table border = "1">
			<thead align="center">
				<tr>
					<td>Call number begins with</td>
					<td>Collection name</td>
					<td>Location in Benner Library</td>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td>R</td>
					<td>Reference</td>
					<td>1st floor</td>
				</tr>
				<tr>
					<td>COLLIFE</td>
					<td>College Life</td>
					<td>1st floor - offices </td>
				</tr>
				<tr>
					<td>COLL.CARC</td>
					<td>College &amp; Career</td>
					<td>1st floor - end of Reference Collection</td>
				</tr>
				<tr>
					<td>jE, jFic,  J 000-J 999</td>
					<td>Juvenile</td>
					<td>2nd floor</td>
				</tr>
				<tr>
					<td>000-199</td>
					<td>Circulating collection</td>
					<td>3rd floor</td>
				</tr>
				<tr>
					<td>200-299</td>
					<td>Circulating collection</td>
					<td>3rd floor, Religion Room </td>
				</tr>
				<tr>
					<td>300-999</td>
					<td>Circulating collection</td>
					<td>3rd floor</td>
				</tr>				
			</tbody>
		</table>
		<br />
	<div class="margin10-left margin10-right border-double color-light-grey fcolor-grey">
		<h6>Now you know:</h6>
		<p>“The book classification system known as the Dewey Decimal System is named after the American librarian Melvil Dewey (1851-1931). Dewey devised his book-classification system in 1876, while working as acting librarian at Amherst College, Massachusetts. In Dewey's system, books are classified according to their subject matter by a three-digit number showing the main class, followed by numbers after a decimal point, to show subdivisions. The Dewey system is widely used by libraries throughout the world, the classification being constantly revised.”<br /><br />
		Dewey decimal system. (2004). In Chambers dictionary of eponyms. Retrieved from http://search.credoreference.com/content/entry/cde/dewey_decimal_system/0 [APA]<br /><br />
		"Dewey Decimal System." Chambers Dictionary of Eponyms. London: Chambers Harrap, 2004. Credo Reference. Web. 17 April 2014. [MLA]<br /><br />
		"Dewey Decimal System." In Chambers Dictionary of Eponyms. London: Chambers Harrap, 2004. http://search.credoreference.com/content/entry/cde/dewey_decimal_system/0 (accessed April 17, 2014.) [Chicago]
		</p>
	</div>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
