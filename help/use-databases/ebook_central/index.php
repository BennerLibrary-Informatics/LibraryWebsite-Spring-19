<?php
   $page_title = "Ebook Central Help - Benner Library";
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

<h2 class="header-line">Ebook Central Help</h2>

			<p>
				<?php echo print_bookmark('238', 'under_description', 'tab', 'no'); ?>
				<small>
					Powered By <img align="absmiddle" src="/img/dcod.png" />
				</small>
			</p>
	</div>
	

		

<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>