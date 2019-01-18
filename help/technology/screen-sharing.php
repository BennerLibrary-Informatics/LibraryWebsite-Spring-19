<?php
   $page_title = "Screen Sharing - Benner Library";
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

<h2 class="header-line">Screen Sharing</h2>
    
	<p>    
    <h5>Share your computer screen ...</h5>
         
    <ol>
        <li>Go to <a href="https://join.me/" target="_blank">https://join.me/</a></li>
        <li>Click on the word "start meeting" in the middle of the screen.</li>
        <li>A dialog box will open.  Click "Save File."<br />
        <img src="/help/technology/docs/join_exe.png" /></li>
        <li>After it has downloaded, run the file (join.me.exe). Double-click and choose "Run."</li>
        <li>Read the number that appears after "join.me/###-###-###" to the library staff member.</li>
        <li>The library staff member will enter the numbers on to the green "join" box and click on the green play circle.</li>
        <li>You will probably get a popup message indicating that "viewer 1" can now view your screen.  The library staff member should now be able to view your screen.</li>
            <ul>
            <li>You can now show them the issue that you are having.</li>
            <li>You may want to give the library staff member permissions to demonstrate something on your screen, click on the orange mouse on the join.me status box and then choose "Viewer 1."<br />
            The library staff member can also request control by clicking on the green mouse and then selecting "Request control."  The sharer will need to click "yes" in the box that appears.</li>
            </ul>
        <li>When you no longer wish to share your screen click on the orange "x" on the top join.me status box.</li>
    </ol>
    
    
     <h5>Join someone's computer screen ...</h5>
         
    <ol>
        <li>Go to <a href="https://join.me/" target="_blank">https://join.me/</a></li>
        <li>Type in the 9 digit number given to you in the box next to the green "join meeting" button in the middle of the screen.</li>
        <li>A dialog box may appear.  Click "Save File" or choose "join.me" when prompted.</li>
        <li>After it has downloaded, run the file (join.me.exe). Double-click and choose "Run."</li>   
        <li>You will now be able to view their screen. 
        <li>When you no longer wish to share to view their screen click on the green "x" on the top join.me status box.</li>
    </ol>
	</p>
		

<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>