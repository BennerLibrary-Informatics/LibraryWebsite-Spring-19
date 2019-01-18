<?php
   $page_title = "Book Awards - Benner Library";
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

<h1>Children's Book Awards</h1> 
	<p>One of Benner Library's goals is to stay as current as possible with the most significant children's book awards.  Books named as winners or honor books for the following awards are added to our collection on an annual basis:
		<ul class="padding45-left">
			<li><a href="http://www.islma.org/lincoln.htm" target=_"blank">Abe Lincoln</a></li>
			<li><a href="http://www.ala.org/alsc/awardsgrants/bookmedia/batchelderaward"  target=_"blank">Batchelder</a></li>
			<li><a href="http://www.ala.org/alsc/awardsgrants/bookmedia/belpremedal" target=_"blank">Belpre</a></li>
			<li><a href="http://www.islma.org/Bluestem.htm" target=_"blank">Blue Stem</a></li>
			<li><a href="http://www.ala.org/alsc/awardsgrants/bookmedia/caldecottmedal/caldecottmedal" target=_"blank">Caldecott</a></li>
			<li><a href="http://www.rebeccacaudill.org/" target=_"blank">Caudill</a></li>
			<li><a href="http://www.ala.org/emiert/cskbookawards" target=_"blank">Coretta Scott King</a></li>
			<li><a href="http://www.ala.org/alsc/awardsgrants/bookmedia/geiselaward" target=_"blank">Geisel</a></li>
			<li><a href="https://www.islma.org/monarch.htm" target=_"blank">Monarch</a></li>
			<li><a href="http://www.ala.org/alsc/awardsgrants/bookmedia/newberymedal/newberymedal" target=_"blank">Newbery</a></li>
			<li><a href="http://www.ala.org/yalsa/printz" target=_"blank">Printz</a></li>
			<li><a href="http://www.ala.org/alsc/awardsgrants/bookmedia/sibertmedal" target=_"blank">Sibert</a></li>
		</ul>
	</p>
	
	<h3>Award Websites</h3>
		<p><?php echo print_bookmark('56', 'under_description', 'tab', 'email'); ?></p>
 

<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>