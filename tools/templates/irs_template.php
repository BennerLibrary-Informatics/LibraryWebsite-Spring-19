<?php
   $page_title = "IRS Coding Examples - Benner Library";
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
<h1>IRS Coding Examples</h1>
	<h5>I. Resources with text and other links in same list following and no description</h5>
	<ul class="padding60-left">
		<a href="http://media.pearsoncmg.com/ph/hss/hss_janson_arthistory_1/Demo_2006/PHDAL_2006/janson_01.html" target="_blank">Images from Chapters 1-13 </a>of Janson's History of Art text book <br />
		<li><?php echo print_resource('583', 'basic', 'no_description', 'no-li'); ?></li> (needs a break line to start new line)<br />
		<?php echo print_resource('582', 'basic', 'no_description', 'no-li'); ?> (limit to "image")
	</ul>

	<h5>II. Resources with text following and dropdown description</h5>
	<ul class="link-list irs padding70-left">
		<?php echo print_resource('582', 'basic', 'float_description'); ?> (eReference database; search by biography and/or subject)<br />
		<?php echo print_resource('579', 'basic', 'float_description'); ?> (limit to “Architecture &amp; Design.”  This database contains books and book chapters plus eReference books)
	</ul>

	<h5>III. Resources with text following and dropdown description and less of indentation</h5>
	<ul class="link-list irs padding25-left">
		<?php echo print_resource('582', 'basic', 'float_description', "no-li"); ?>(contains original documents, scholarly articles, and more)<br />
		<?php echo print_resource('608', 'basic', 'float_description'); ?> (eReference database.  Choose “art” or “all subjects”)<br />
	</ul>

	<h5>IV. Inside a table or with no li tag</h5>
	<table>
		<tr>
			<td><?php echo print_resource('582', 'basic', 'no_description', 'no-li'); ?> (this is test text)</td>
			<td><?php echo print_resource('672', 'basic', 'no_description', 'no-li'); ?></td>
		</tr>
	</table>

	V. Gray tape:
		<ul style="list-style-type:none;">
		<?php echo print_resource('594', 'basic', 'no_description', 'no'); ?>
		</ul>

  VI. test II
    <ul>
      <li><?php echo print_resource('582', 'basic', 'no_description', 'no-li');?> (after text)</li>
			<li><?php echo print_resource('672', 'basic', 'float_description', 'no-li'); ?></li>
    </ul>
<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
