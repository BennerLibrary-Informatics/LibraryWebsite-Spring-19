<?php
   $page_title = "Special Events - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
$reviewedDate = "";
$creatorID ="";		//This ID is from the help_email ie 10
	$updaterID ="";		//This ID is from the help_email ie 10
	$createdDate ="";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="";	//The date entered here shows up ie 3/2/2015
	$dateAdded ="";		//The date entered here shows up ie 3/2/2015
	$dateRemoved ="";	//The date entered here shows up ie 3/2/2015
$videoProducer = ""; //This can either be ID or typed name(for 1 time shot)
$videoDirector = "";//This can either be ID or typed name(for 1 time shot)
$videoEditor = "";//This can either be ID or typed name(for 1 time shot)
$voiceOver = "";//This can either be ID or typed name(for 1 time shot)
$videoDate = "";
?>

<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/top.php";
   include_once($path);
?>
<!-- ===== content below here ========================================================== -->

<!--Decision: Save one event from year previous and then archive the rest.  Archived on T Drive: T:\Informatics\Website - Archival pages\Library Events\authors  -->
<h1>Special Events</h1>
<div class="split l60-r40 cf">
   <div class="left">
      <h3>Current and Upcoming Events</h3>
      
      <p style="border-bottom: 1px solid gray"></p>

      <?php
         $dirname = 'img/filler/';
         $images = glob($dirname."[0-9]*.{png,PNG,jpg,JPG,jpeg,JPEG,gif,GIF}",GLOB_BRACE); //Creates list by filetype then by number with in filetype

         if (count($images) > 0) {
            echo "<div style='text-align: center;'>";

            foreach($images as $image) {
               $info = pathinfo($image);
               
               if ($info['extension'] != "db") {
                  $thing_display = basename($image,'.'.$info['extension']);
                  
                  echo "<img style='height: 100px; padding: 0 3px;' src='$image'/>";
               }
            }

            echo "</div>";
            echo "<p style='border-bottom: 1px solid gray'></p>";
         }
      ?>

      <h3>Past Library Events</h3>
      <p>
         <ul>
            <li>
                  <strong>Students in ESS 130: Astronomy host a short talk about Saturn</strong><br />
                  Friday, December 9, 2018, Benner Library Fishbowl <br />
                  <p>
                     View the
                     <a href="/services/special-events/saturn.php">virtual book display</a>
                     to learn more about the 2nd largest planet in our solar system.
                  </p>
            </li>
            <li>
               <strong>Author Meet &amp; Greet</strong><br />
               Friday, November 30, 2018, Benner Library Fishbowl<br />
               <ul>
                  <li>Dr. Steve Case: <a href="https://stephenrcase.com/fiction/" target="_blank">fiction</a> | <a href="http://a.co/d/iRaUpyd" target="_blank">Making Stars Physical</a></li>

                  <li>Sean Rooney: <a href="http://a.co/d/hhAeNnQ" target="_blank">Paddy’s Recess Adventures</a> | <a href="http://a.co/d/hng7Ze2" target="_blank">First Day at Hilltop School</a></li>

                  <li>Jessica Bishop: <a href="http://a.co/d/3jYAZdw" target="_blank">Collision (devotional)</a></li>

                  <li>Tyler Goscha: <a href="http://www.blurb.com/b/8654585-journey-of-the-zelk-stone" target="_blank">Journey of the Zelk Stone</a></li>
               </ul>
            </li>
            <li><strong>University Archives Open House 2018: “Welcome Home: Views from our past”</strong><br /></li>
            <li><strong>Dedication of the Center of Academic Excellence 2018</strong><br /></li>
            <li><strong><a href ="/services/special-events/img/trivia_sign.pdf">Dodge City Trivia Contest 2018</a></strong><br /></li>
            <li><strong><a href ="/services/special-events/img/dodgecity.png">Western Party 2018</a></strong><br /></li>
            <li><strong><a href ="/services/special-events/escape_room/index.php">Benner Library Escape Room 2018</a></strong><br /></li>
            <li><strong><a href ="https://digitalcommons.olivet.edu/scholar_week_events/2018/">ONU Scholar Week 2018</a></strong><br /></li>
            <li><strong><a href ="/services/special-events/chapel_speakers/index.php">Chapel Speakers 2017</a></strong><br /></li>
            <li><strong><a href="/services/special-events/oboc/2017/index.php">One Book One Community 2017</a></strong></li>
         </ul>
      </p>
   </div>

   <div class="right">
      <p><!--Width of pictures is 250 x 166 pixels
         <img src="/services/special-events/img/1.jpg" /><br />-->
         <img src="/services/special-events/img/5.jpg" />
         <img src="/services/special-events/img/4.jpg" />
      </p>
   </div>
</div>
<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
