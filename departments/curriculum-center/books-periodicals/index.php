<?php
   $page_title = "Curriculum Center Books and Periodicals - Benner Library";
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

<h1>Books and Periodicals</h1>
<!--NeedsSomething.  Phase 2 - cutesy graphic for Books and Periodicals see http://library.olivet.edu/ccl/books_periodicals.php-->

	<h3>Books</h3>
		<p>The Curriculum Center has a wide selection of books available for a variety of purposes.  The best way to locate the book you need is to use the library's online catalog, <?php echo print_resource('967', 'basic', 'no-li'); ?>.<br />
		</p>
		<!--NeedsSomething.  Phase 2 - Tutorial: How to search in catalog for Curriculum Center materials<br /><br />-->
			<ul class="like-link-list">
				<li><a href="/departments/curriculum-center/books-periodicals/book-awards.php">Book Awards</a></li>
				<li><a href="/departments/curriculum-center/books-periodicals/textbooks.php">Textbooks</a></li>
				<li><a href="/departments/curriculum-center/books-periodicals/juvenile-books.php">Juvenile Books</a></li>
				<li><a href="/departments/curriculum-center/books-periodicals/teacher-activity-books.php">Teacher Activity Books</a></li>
			</ul>

        	<h3>Periodicals</h3>
			<p>
				Below is a list of periodicals that can be checked out from the Curriculum Center for a two week period with one renewal. The * indicates that individual topic issues are searchable in  <?php echo print_resource('967', 'basic', 'no-li'); ?>.
				Type a journal title in the box below to see a list of all issues available online.
            </p>
				<div class="margin20">
					<div align="left" class="SS_TitleSearchForm">
						<form method="get" action="https://gg9fg7cr5h.search.serialssolutions.com/" name="SS_EJPSearchForm">
							<input value="1.0" name="V" type="hidden" />
							<input value="100" name="N" type="hidden" />
							<input type="hidden" name="L" value="gg9fg7cr5h" />
							<select name="S">
								<option value="A_T_B" selected="selected">Title begins with</option>
								<option value="A_T_M">Title equals</option>
								<option value="T_W_A">Title contains all words</option>
								<option value="I_M">ISSN equals</option>
							</select>
							<input id="SS_CFocusTag" name="C" />
							<input value="Search" type="Submit" />
							<input onclick="javascript document.getElementById('SS_CFocusTag').value=''" value="Clear" type="button" />
						</form>
					</div>
				</div>

	<div class="split l50-r50 cf">
		<div class="left"> 
		
			<h5 style="margin-bottom:0">*Appleseed</h5>
				<ul class="link-list margin20-left">
					<li><a href="https://cobblestonepub.com/teachers-guides/" target="_blank">Teacher Guides</a></li>
					<li><a href="http://viewer.zmags.com/publication/b9bdba39#/b9bdba39/1" target="_blank">Interactive Sampler</a></li>
				</ul>
			<h5 style="margin-bottom:0">*Cobblestone</h5>
				<ul class="link-list margin20-left">
					<li><a href="https://cobblestonepub.com/teachers-guides/" target="_blank">Teacher Guides</a></li>
					<li><a href="http://viewer.zmags.com/publication/cda68f6f#/cda68f6f/1" target="_blank">Interactive Sampler</a></li>
				</ul>
			<h5 style="margin-bottom:0">Cricket</h5>
				<ul class="link-list margin20-left">
					<li><a href="http://www.cricketmag.com//home.asp" target="_blank">Website</a></li>
					<li><a href="http://caruspub.richfx.com.edgesuite.net/catalog_caruspub/CKTSampler2/index.aspx" target="_blank">Interactive Sampler</a></li>
				</ul>
			<h5 style="margin-bottom:0">*Kids Discover</h5>
				 <ul class="link-list margin20-left">
					  <li><a href="http://www.kidsdiscover.com/" target="_blank">Website</a></li>
				 </ul>
			<h5 style="margin-bottom:0">Ladybug</h5>
				 <ul class="link-list margin20-left">
					<li><a href="https://cobblestonepub.com/teachers-guides/" target="_blank">Teacher Guides</a></li>
					<li><a href="http://caruspub.richfx.com.edgesuite.net/catalog_caruspub/LYBSampler2/index.aspx" target="_blank">Interactive Sampler</a></li>
					<li><a href="http://www.ladybugmagkids.com/" target="_blank">Content Site for Subscribers</a></li>
				 </ul>
			<h5 style="margin-bottom:0">Library Sparks</h5>
				 <ul class="link-list margin20-left">
					  <li><a href="http://librarysparks.com/" target="_blank">Website</a></li>
				 </ul>
			<h5 style="margin-bottom:0">Mailbox</h5>
				<p>(Includes Mailbox Bookbag, Grade 1, Intermediate, Kindergarten, Preschool, and Primary)</p>
				 <ul class="link-list margin20-left">
					  <li><a href="http://www.theeducationcenter.com/" target="_blank">Website</a></li>
					  <li><a href="http://tec.theeducationcenter.com/learning/freebies/go.do" target="_blank">Free Resources</a></li>
				 </ul>
		</div>
		
		<div class="right">
			<h5 style="margin-bottom:0">National Geographic Kids</h5>
				 <ul class="link-list margin20-left">
					  <li><a href="http://kids.nationalgeographic.com/kids/" target="_blank">Website</a></li>
					  <li><a href="http://www.nationalgeographic.com/" target="_blank">National Geographic Website</a></li>
				 </ul>              
				<h5 style="margin-bottom:0">Ranger Rick - National Wildlife Federation</h5>
				 <ul class="link-list margin20-left">
					  <li><a href="http://www.nwf.org/Kids/Ranger-Rick.aspx" target="_blank">Website</a></li>
					  <li><a href="http://www.nwf.org/common/flash/rrpreview/nwfmagazine.html" target="_blank">Sample Issue</a></li>
					  <li><a href="http://www.nwf.org/" target="_blank">National Wildlife Foundation</a></li>
				 </ul>  
			<h5 style="margin-bottom:0">Science and Children</h5>
				 <ul class="link-list margin20-left">
					  <li><a href="http://www.nsta.org/elementaryschool/" target="_blank">Website</a></li>
				 </ul> 
			<h5 style="margin-bottom:0">Spider: The Magazine for Children</h5>
				 <ul class="link-list margin20-left">
					<li><a href="https://cobblestonepub.com/product/spider/" target="_blank">Teacher Guides</a></li>
					<li><a href="http://viewer.zmags.com/publication/e8e4da38#/e8e4da38/1" target="_blank">Interactive Sampler</a></li>
					<li><a href="http://www.spidermagkids.com/" target="_blank">Content Site for Subscribers</a></li>
				 </ul>           
			<h5 style="margin-bottom:0">ZooBooks</h5>
				 <ul class="link-list margin20-left">
					<li><a href="http://www.zoobooks.com/" target="_blank">Website</a></li>
					<li><a href="http://www.zoobooks.com/?page_id=698" target="_blank">Teacher Guides</a>
				 </ul>                       
		</div>
	</div>			




<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>