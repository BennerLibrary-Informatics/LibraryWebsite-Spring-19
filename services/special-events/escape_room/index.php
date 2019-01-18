<?php
   $page_title = "Escape Room - Benner Library";
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

<h1>Library Escape Room</h1>
<h3>The Escape Room is currently CLOSED. Check back late fall for more information.</h3>
<div class="split l70-r30 cf">
    <div class="left">
		<h3>Rules</h3>
			<ul>
				<li>Located on the Second Floor of Benner Library</li>
        <li>Available only to ONU students, faculty, and staff. Show your Tiger Card at time of payment.</li>
				<li>Payment of $2.50 per person should be paid immediately before participation (Tiger Dollars or cash)</li>
				<li>Register for your time slot at the Second Floor Service Desk (in person). <a id="pdf" href="https://docs.google.com/spreadsheets/d/1wpvWTuAf7YaWZKWgH4tXWNDVx6-Ih_lWATX7aNIIM9A/edit?usp=sharing" target="_blank">View open times</a> (First come, first serve.)</li>
				<li>Groups of 4 or 5 only</li>
				<li>Total allotted time to escape: 20 minutes</li>
				<li>We request that you respect the normal library rules.</li>
				<li>Please keep your discoveries of the escape room to yourself. Don’t ruin it for other participants!</li>
				<li>NO pictures inside the escape room!</li>
				<li>Late groups will forfeit their time slots.</li>
				<li>Visit this page to see the latest escape room stats.</li>
        <li>Click Successful ESCAPES! or Total Participants to see some images.</li>
			</ul>

			<h3>Prizes</h3>
			<ul>
				<li>Bragging rights</li>
				<li>Special "Escaped" button</li>
			</ul>
	</div>
	<div class="right">
    <img src="/services/special-events/escape_room/img/button.png" alt="Escaped Button" />
    </br >
    <?php echo print_bookmark('257', 'under_description', 'tab', 'no', 'no'); ?>

    </div>
</div>



<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
