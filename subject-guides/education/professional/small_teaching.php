
<?php
   $page_title = "Education - Benner Library";
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
<h1>Small Teaching</h1>

		<div class="padding15-left">
			<div class="hanging-indent">
				<a href="https://login.proxy.olivet.edu/login?url=https://ebookcentral.proquest.com/lib/olivet/detail.action?docID=4455000" target="_blank">
				Lang, J. M. (2016). <em>Small teaching : everyday lessons from the science of learning</em>. Retrieved from https://ebookcentral.proquest.com</a>
				</a>
			</div>
		</div>
		
		<h5>
		Bibliography of some of the books and articles mentioned in the book, Small Teaching. 
		</h5>
		
		<p>
		
			<?php echo print_bookmark('247', 'under_description', 'tab', 'no'); ?>
			<small>
				Powered By <img align="absmiddle" src="/img/dcod.png" />
			</small>
		
		</p>


<!-- ===== content above here ========================================================== -->                
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>