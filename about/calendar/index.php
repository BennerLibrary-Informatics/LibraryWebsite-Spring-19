<?php
   $page_title = "Calendar - Benner Library";
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

<h1 class="no-margin-bottom">Calendar</h1>

    <div class="padding15">
       <iframe src="https://www.google.com/calendar/embed?mode=WEEK&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=72ts5jjncg48q761l4bsl9589g%40group.calendar.google.com&amp;color=%23060D5E&amp;src=v2oaqd5uuo03ljjh24o1r1iaic%40group.calendar.google.com&amp;color=%236B3304&amp;ctz=America%2FChicago" style=" border-width:0 " width="100%" height="500" frameborder="0" scrolling="no"></iframe>
    </div>

<h3>Other Schedule Links:</h3>
  <div class="margin15">
  <a href="/about/hours/index.php">Regular Hours</a><br />
  <a href="/about/hours/exceptions.php">Exception Hours</a><br />
  <a href="/about/summer_hours/docs/summer_hours.pdf">Summer Hours</a>
</div>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
