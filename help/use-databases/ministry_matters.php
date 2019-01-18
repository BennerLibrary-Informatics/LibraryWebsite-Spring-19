<?php
   $page_title = "Ministry Matters - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
$reviewedDate = "";
$creatorID ="";		//This ID is from the help_email ie 10
	$updaterID ="111";		//This ID is from the help_email ie 10
	$createdDate ="";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="3/11/2018";	//The date entered here shows up ie 3/2/2015
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
<h1 class="no-margin-bottom">Ministry Matters</h1>

<div class="split l60-r40 cf">
    <div class="left">

		<p>Choose one of the two links below. The first link goes to the Classic version which is preferred by the librarians. The second BETA version is the new version.</p>

			<div class=margin30-left>
				<a href="https://login.proxy.olivet.edu/login?url=http://www.ministrymatters.com/library/" target="_blank">Ministry Matters</a><br />
				<a href="https://login.proxy.olivet.edu/login?url=http://www.ministrymatters.com/library_beta" target="_blank">Ministry Matters BETA</a><br /><br />
			</div>
	
		<h5>Direct Links:</h5>
			<ul class = "link-list irs">
				<?php echo print_subject('MMIN', array('DATAB', 'EBOOK'), 'adv', 'tutorial', 'gon', 'flo'); ?>
			</ul>
	</div>

	<div class="right">
		<img class="padding15-left" src="/img/subject-guides/religion.png" alt="Theology" title="Theology" />
		
		<h5>Search our catalog for Ministry Matters ebooks:</h5>
			<div class="margin15-left">
				<input type='text' id='catalogSearch' onkeypress="return searchBoxEnter(event)" />
				<button type='button' onclick='searchingCatalog(document.getElementById("catalogSearch").value);'>Find</button>
					<script type='text/javascript'>
						function searchingCatalog(input) {
							var pre = "https://vufind.carli.illinois.edu/vf-onu/Search/Home?lookfor=";
							var search = input;
							var post = "+ Online+Access%3A++%09Ministry+Matters&type=all&start_over=1&submit=Find&filter[]=format:%22Electronic%22";
							window.open("" + pre + search + post, "_blank");
						}

						function searchBoxEnter(e) {
							if (e.keyCode == 13) {
								var tb = document.getElementById("catalogSearch").value;
								searchingCatalog(tb);
								return false;
							}
						}
					</script>
			</div>
	</div>
</div>	

<h3>Help Citing Ministry Matters</h3>
	<div class=margin30-left>
		<h5>APA Reference List</h5>
			<div class="padding15-left">
				<div class="hanging-indent">            
					Black, C.C. (1994). The first, second, and third letters of John. In H.J. Olson (Ed.), <em>The new interpreter’s Bible</em> (Vol. XII).[ministrymatters version]. Retrieved from http://www.ministrymatters.com/library/
				</div>
			</div>
			
		<h5>APA In text citation example:</h5>
		<p>(Black, 1994, Authorship of 1, 2, and 3 John section, para. 2).</p>
	</div>
		



<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>