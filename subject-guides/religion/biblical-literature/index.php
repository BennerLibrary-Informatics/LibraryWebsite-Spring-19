<?php
   $page_title = "Biblical Literature - Benner Library";
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
<h1>Biblical Literature</h1>

	<div class="split l60-r40 cf">
		<div class="left">
			<h3 class="no-margin-top bold">Selected Databases</h3>
				<ul class="link-list irs">
					<?php echo print_subject('37', array('5', '11'), 'bas', 'tutorial', 'gon', 'flo'); ?>  
				</ul>

			<h3 class="bold">Selected eBooks</h3>
				<ul class="link-list irs">
					<?php echo print_subject('37', array('2'), 'bas', 'tutorial', 'gon', 'flo'); ?>
				</ul>
				
			<h3 class="bold">Selected eJournals</h3>
			  <ul class="link-list irs">
				 <?php echo print_subject('37', array('3'), 'bas', 'tutorial', 'gon', 'flo'); ?>
			  </ul>
		</div>

		<div class="right">
			<img class="padding15-left" src="/img/subject-guides/biblical_literature.png" alt="Biblical" title="Biblical" />
			<h5 class="bold">Course Guides</h5>
				<ul class="link-list padding10-left">
					<li><a href="/subject-guides/religion/exegesis/index.php">Exegesis</a></li>
				</ul>
			<h5 class="bold">Websites</h5>
				<ul class="link-list padding10-left">
					<li><a href="/subject-guides/religion/biblical-literature/selected-sites.php">Selected Sites</a></li>
				</ul>
		</div>
	</div>

<!-- ===== content above here ========================================================== -->                
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>