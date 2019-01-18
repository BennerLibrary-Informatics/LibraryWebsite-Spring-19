<?php
   $page_title = "Laptop Checkout Agreement - Benner Library";
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

<h1 class="no-margin-top">Laptop Checkout Agreement</h1>

    <p> <span class="bold">Agreement:</span> <span class="italic">By checking out a laptop from Benner Library’s Computer Lab, I understand and agree to the following:</span></p>
    <ul class="padding10-left">
        <li>I am responsible for the security of the laptop and all its components, and will protect it from theft and damage.</li>
        <li>I will not let anyone else use it while it is checked out to me. <span class="bold">I will not leave this laptop unattended.</span> I understand I will be billed to replace any missing internal or external components. I will pay costs to replace a missing or severely damaged laptop and realize those costs start at <span style="color:red" class="title-font bold">$1500.00</span> and may be more.</li>
        <li>I understand there is no access to network drives and will save data files to a thumbdrive or a CD (available for purchase in lab office).</li>
        <li>I will use the laptop only in the library (excluding the fishbowl)</li>
        <li>If I have a problem with the laptop, I will report it to the Lab Assistant immediately.</li>
        <li>I will return this laptop directly to the Lab Assistant with it still logged on, at or before the time it is due, <span class="bold">according to the Lab computer clock</span> <span class="italic">(synchronize your watch)</span>.</li>
        <li>I agree and understand that ONU and the Library assume no responsibility for loss or damage to my personal property through use of the laptop.</li>
    </ul>


    <p class="padding15">I will pay non-refundable overdue charges beginning at <span style="color:red" class="title-font bold">$10</span> per item until the computer is returned or reported lost. I understand that overdue charges will not be waived.</p>

	<p><a id="pdf" href="/departments/informatics/computer/gpl/laptop/doc/laptop_contract.pdf" target="_blank">Laptop Contract</a></p>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
