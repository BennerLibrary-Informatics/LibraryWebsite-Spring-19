<?php
   $page_title = "Book Sale - Benner Library";
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


<h1>Book Sale</h1>

	<div class="split l60-r40 cf">
		<div class="left">
		   <p>Benner Library has book sales throughout the year.  These sales will be announced close to the time of each sale.  Check back periodically to stay informed.</p>
		</div>
		<div class="right">
			<img class="padding15-left" src="/img/bulletins/220x130/book_sale.png" alt="Book" title="Book">
		</div>
	</div>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
