<?php
   $page_title = "EDUC 210 - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
$reviewedDate = "";
$creatorID ="5";		//This ID is from the help_email ie 10
	$updaterID ="";		//This ID is from the help_email ie 10
	$createdDate ="";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="";	//The date entered here shows up ie 3/2/2015
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
<h2 class="header-line">EDUC 210: Instructional Methods of Early Childhood Education </h2>

    <p align="center"><a href="#catalogs">online catalogs</a> |
	<a href="#ref">reference books</a> |
	<a href="#advisory">databases for reader's advisory</a> |
	<a href="#kids">databases for kids</a><br />
    <a href="/departments/interlibrary-loan/index.php">ILL</a> |
	<a href="#articles">article databases</a> |
	<a href="#web">recommended websites</a></p>

		<h2>Preschool-Kindergarten Thematic Units</h2>
		<h3><a name="catalogs" id="catalogs"></a>Online catalogs</h3>
		<ul class="link-list irs">
			<?php echo print_resource('967', 'basic', 'float_description'); ?>:
			<?php echo print_resource('919', 'basic', 'float_description'); ?>:
			<?php echo print_resource('763', 'basic', 'float_description'); ?>:
		</ul>

		<p>
		Public libraries: <a href="http://search.prairiecat.info/iii/encore/?lang=eng " target="_blank">Bourbonnais Public Library's online catalog</a></li>
		</p>

		<h3 align="left"><a name="ref" id="ref"></a>Guides to childrens' literature</h3>

		<ul>
		  <li><em>100 best books for children</em> (2004) / Anita Silvey.<br />
			Call Number: 011.62 Si39o</li>

			<li> <em>A to zoo : subject access to children's picture books</em> / Carolyn W. Lima, John A. Lima. 2001 Book <br />
			Call Number: 011.62 L628a, 2001 </li>

			<li> <em>Adventuring with books : a booklist for pre-K-grade 6 </em>/ Amy A. McClure and Janice V. Kristo, editors, and the Committee to Revise the Elementary School Booklist ; with a foreword by Rudine Sims Bishop. 2002 Book <br />
			Call Number: R 028.52 N2132a, 2002 </li>

			<li> <em>Best books for children : preschool through grade 6</em>. Supplement to the seventh edition / John T. Gillespie, Catherine Barr. 2003 Book <br />
			Call Number: R 028.52 G412b, 2003, SuppL. </li>

			<li><em>Best books for middle school and junior high readers : grades 6-9</em> / by John T. Gillespie, Catherine Barr.<br />
			Call Number: R 028.52 B464g, 2004</li>

			<li><em>Books kids will sit still for 3 : a read-aloud guide</em> / Judy Freeman. 2006 Book <br />
			Call Number: R 011.6254 F877b, 2006 </li>

			<li><em>Books to grow with : a guide to using the best children's fiction for everyday issues and tough challenges</em> (2004) / by Cheryl F. Coon.<br />
			Call Number: 011.62 C783b</li>

			<li><em>Celebrating children's choices : 25 years of children'sfavorite books</em> (2000) / by Arden Ruth Post. Arden DeVries Post with Marilyn Scott, Michelle Theberge.<br />
			Call Number: 028.162 P845c</li>

			<li><em>Children's core collection</em><br />
			Call Number: R 028.5 W693c, 2010</li>

			<li><em>Core collection for children and young adults</em> (2008) / Schwedt, Rachel E., 1944- <br />
			Call Number: 011.62 Sch97c</li>

			<li><em>Fantasy literature for children and young adults : a comprehensive guide</em> / Ruth Nadelman Lynn.<br />
			Call Number: R 028.52 L993f, 2005</li>

			<li><em>Great books about things kids love : more than 750 recommended books for children 3 to 14 </em>/ Kathleen Odean. 2001 Book <br />
			Call Number: R 011.62 Od2g</li>

			<li><em>Understanding diversity through novels and picture books</em> (2007) / Knowles, Elizabeth, 1946-<br />
			Call Number: 011.62 K761u</li>
		</ul>

		<h3 align="left"><a name="kids" id="kids"></a>Database for kids</h3>
		<ul class="link-list irs">
			<?php echo print_resource('1164', 'basic', 'float_description'); ?>
			<?php echo print_resource('1190', 'basic', 'float_description'); ?>
			<?php echo print_resource('1206', 'basic', 'float_description'); ?>
		</ul>


		<h2 align="left">Research paper:</h2>
		<h3 align="left"><a name="articles" id="articles"></a>Library article databases</h3>
		<ul class="link-list irs">
			<?php echo print_resource('697', 'basic', 'float_description'); ?>
			<?php echo print_resource('1192', 'basic', 'float_description'); ?>
			<?php echo print_resource('696', 'basic', 'float_description'); ?>
			<?php echo print_resource('44', 'basic', 'float_description'); ?>
		</ul>

		<hr />
		<h3 align="left"><a name="web" id="web"></a>Recommended websites</h3>

			<ul>
			  <li><a href="http://www.census.gov/compendia/statab/" target="_blank">Statistical Abstract of the U.S</a>.</li>
			  <li><a href="http://www.cwla.org/" target="_blank">Child Welfare League of America</a> (Child Abuse)</li>
			  <li><a href="http://www.acf.hhs.gov/" target="_blank">Administration for Children and Families</a></li>
			</ul>



<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
