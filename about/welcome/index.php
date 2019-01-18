<?php
   $page_title = "Welcome - Benner Library";
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


<h1>Welcome to Benner Library</h1>
<!--Exception Decision: The h1 title will not match other titles and breadcrumbs on this page and referring pages.-->


	<h4 class="bold">Mission Statement</h4>
	<p>Benner Library invests in scholarly resources, current technology, and knowledgeable staff in a Christian environment to promote student success, academic excellence, and life-long learning.</p>

	<p>The library's mission and purpose is aligned with <a href="https://www.olivet.edu/about" target="_blank">Olivet's mission statement</a>.</p>


    <h4 class="bold">Library Courtesy</h4>
    <p>In Benner Library, a studious environment is appropriate. Respect the needs of those around you. Silence your cell phone ringer, and keep all conversations, including cell phone conversations, at a level that does not disturb others.</p>

    <h4 class="bold">Food and Drink</h4>
    <p class="bold no-margin-bottom">Food and drinks are allowed in most areas of the library.</p>

    <ul class="padding10-left no-margin-top">
        <li>Library staff may restrict distracting or messy food.</li>
        <li>Food and drinks are prohibited from the Archives.</li>
        <li>Be careful near computers or other equipment.</li>
    </ul>

    <p class="bold no-margin-bottom">Work areas must be kept clean if food and drinks are allowed. To do this, patrons and staff must do the following:</p>
    <ul class="padding10-left no-margin-top">
        <li>Deposit trash and recyclables in appropriate containers.</li>
        <li>Clean the workstation if it is needed. Cleaning products are available at the recycling stations.</li>
        <li>Report large spills to a service desk.</li>
        <li>Be responsible by leaving the area clean.</li>
    </ul>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
