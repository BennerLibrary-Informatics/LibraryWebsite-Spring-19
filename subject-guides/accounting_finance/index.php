<?php
   $page_title = "Accounting & Finance - Benner Library";
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

<h1>Accounting &amp; Finance</h1>

	<div class="split l60-r40 cf">
		<div class="left">
			<h3 class="no-margin-top bold">Selected Databases</h3>
				<ul class="link-list irs">
					<?php echo print_subject('1', array('5', '11'), 'bas', 'tutorial', 'gon', 'flo'); ?>
				</ul>

			<h3 class="bold">Selected eBooks</h3>
				<ul class="link-list irs">
				   <?php echo print_subject('1', array('2'), 'bas', 'tutorial', 'gon', 'flo'); ?>
				</ul>

			<h3 class="bold">Selected eJournals</h3>
				<ul class="link-list irs">
					<?php echo print_subject('1', array('3'), 'bas', 'tutorial', 'gon', 'flo'); ?>
				</ul>
		</div>


		<div class="right">
			<img class="padding10-left" src="/img/subject-guides/finance.png" alt="Wall Street Image" title="Decorative Wall Street Image" />


			<h5 class="no-margin-top bold">Websites</h5>
				<ul class="link-list padding10-left">
					<li><a href="http://hbr.org/search/" target="_blank" title="$6.95 charge per user required for Copyright compliance">Harvard Business School Case Studies</a></li>
				</ul>
		</div>
	</div>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
