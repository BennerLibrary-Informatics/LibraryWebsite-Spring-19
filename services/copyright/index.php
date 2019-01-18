<?php
   $page_title = "Copyright - Benner Library";
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

<h1>Copyright</h1>

	<h4>University Policies & Documents</h4>
		<blockquote>
			 <a id="pdf" href="/services/copyright/doc/copyright_usage.pdf">Copyright Usage Policy</a><br />
			 <a id="pdf" href="/services/copyright/doc/copyright_ownership.pdf">Copyright Ownership Policy</a><br />
			 <a id="pdf" href="/services/copyright/doc/HEOA_Compliance.pdf">HEOA Compliance</a><br />
			 <a id="pdf" href="/services/copyright/doc/transfer_agreement.pdf">Ownership Rights Transfer Agreement</a>
		</blockquote>

	<h4>Faculty Tools</h4>
		<blockquote>
			 <a id="pdf" href="/help/use-databases/doc/guide-to-linking.pdf">Guide to Linking to Articles and ebooks</a><br />
			 <a href="/services/copyright/sample-letter.php">Sample Copyright Permission Letter</a>
		 </blockquote>

	<h4>Frequently Asked Questions</h4>

		<p><?php echo print_bookmark('101', 'under_description', 'tab', 'no'); ?></p>

	<h4>External Resources</h4>
	<p><?php echo print_bookmark('102', 'under_description', 'tab', 'email'); ?>
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
