<?php
   $page_title = "Regular Hours - Benner Library";
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

<h1>Regular Hours</h1>

    <div class="split l40-r60 cf">
        <div class="left">
            <div class="margin15-left border-box" style="text-align:center; width:80%; border-style:double">
                <h5 class="bold">Monday - Thursday<br />7:30am - Midnight</h5>
                <h5 class="bold">Friday<br />7:30am - 5:00pm</h5>
                <h5 class="bold">Saturday<br />11:00am - 7:00pm</h5>
                <h5 class="bold">Sunday<br />6:30pm - Midnight</h5>
            </div>
              <h5 class="bold margin30-top">Other Schedule Links:</h5>
              <div class="margin15">
                <a href="/about/calendar/index.php">Calendar</a><br />
                <a href="/about/hours/exceptions.php">Exception Hours</a><br />
                <a href="/about/summer_hours/docs/summer_hours.pdf">Summer Hours</a>
              </div>
        </div>

        <div class="right">
            <h6 class="bold no-margin-top no-margin-bottom padding5-left">Curriculum Desk and Third Floor</h6>
            <p class="no-margin-top">These areas will open when the library opens and close 15 minutes before the library closes.</p>

            <h6 class="bold no-margin-top no-margin-bottom padding5-left">The Lower Level (including the General Purpose Lab and the Periodical Collection)</h6>
            <p class="no-margin-top">This floor will open when the library opens and close 30 minutes before the library closes.</p>

            <h6 class="bold no-margin-top no-margin-bottom padding5-left">Instruction Lab (First Floor)</h6>
            <p class="no-margin-top">The First Floor Instructional Lab will open when the library opens and close one hour before the library closes, but If there is a class scheduled in the lab, it will not be available.  This lab is closed Saturdays and for holidays/university breaks.</p>

            <h6 class="bold no-margin-top no-margin-bottom padding5-left">Fishbowl Hours</h6>
            <p class="no-margin-top">During the school year the Fishbowl is open until 1:00 am Sunday – Thursday, and 2:00 am Friday &amp; Saturday. During the summer the Fishbowl closes at midnight Monday – Thursday, and at library closing time on Friday &amp; Saturday.</p>
        </div>
    </div>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
