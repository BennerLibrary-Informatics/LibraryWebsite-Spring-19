<?php
   $page_title = "News - Benner Library";
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
<h1>News</h1>

	<div class="split l60-r40 cf">
	   <div class="left">
		  <h3 class="no-margin-top bold">Selected Databases</h3>
		  <ul class="link-list irs">
			 <?php echo print_subject('12', array('5', '11'), 'bas', 'tutorial', 'gon', 'flo'); ?>
		  </ul>

		  <h3 class="bold">Selected eJournals</h3>
		  <ul class="link-list irs">
			 <?php echo print_subject('12', array('3'), 'bas', 'tutorial', 'gon', 'flo'); ?>
		  </ul>

		</div>
		<div class="right">

			<img class="padding15-left" src="/img/subject-guides/news.png" alt="News" title="News" />
			<h5 class="no-margin-top bold">Websites</h5>
			<ul class="link-list padding10-left">     
				<li><a href="http://www.newspapers.com/" target="_blank">Newspapers.com</a></li>
				<li><a href="http://www.nytimes.com/" target="_blank">The New York Times Website</a></li>
				<li><a href="/subject-guides/news/selected-sites.php" target="_blank">Selected sites</a></li>
				<li class="no-graphic"><a href="/subject-guides/statistics/historical_statistics.php">Historical statistics</a></li>
				
			</ul>

			<h5 class="bold">Tips &amp; Tutorials</h5>
			<ul class="link-list padding10-left">
				<a href="/subject-guides/news/finding-news.php">Finding Newspapers in the Library</a>
			</ul> 
		</div>
	</div>



<!-- ===== content above here ========================================================== -->                
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>