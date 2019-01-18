<?php
   $page_title = "SOWK 310: Social Work Practice I - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
  $reviewedDate = "";
  $creatorID ="5";		//This ID is from the help_email ie 10
	$updaterID ="";		//This ID is from the help_email ie 10
	$createdDate ="";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="08/02/2018";	//The date entered here shows up ie 3/2/2015
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
<h2 class="header-line">SOWK 310: Social Work Practice I</h2>
		<h3 style="margin-top:0">PBL 2</h3>
		<p>
			<a id="pdf" href="/subject-guides/social-work/sowk310/docs/best_practices.pdf">Infographic: understanding the assignment <img src="/img/get-pdf.png" /></a>
		</p>

        <h3 style="margin-top:0">Vulnerable Client Group—annotated bibliography</h3>

        <div class="padding25-left">
        <a id="pdf" href="/subject-guides/social-work/doc/social-work-journals.pdf">Recommended journals <img src="/img/get-pdf.png" /></a>
        <br />Note: of the 10 annotations you will write, two must be from a print journal at Benner Library
        </div>

        <h4 style="margin-bottom:0">Recommended <a href="#"></a>Article Databases:</h4>
        <div class="padding25-left">
        Recommended search technique: Do a keyword search... find an article you like...<br />
        look at the subject words...do a NEW search using those subject words...<br />
        </div>

        <blockquote>
    			<?php echo print_resource('761', 'basic', 'float_description', 'no-li'); ?>
          <?php echo print_resource('686', 'basic', 'no-li'); ?>
    			<?php echo print_resource('835', 'basic', 'no-li'); ?>
    			<?php echo print_resource('759', 'basic', 'no-li'); ?>
    			<?php echo print_resource('676', 'basic', 'no-li', 'break'); ?> <br />
    			<?php echo print_resource('564', 'basic', 'no-li', 'break'); ?> <br />
    			<?php echo print_resource('747', 'basic', 'no-li'); ?> (a fulltext subset of PsycINFO) <br />
    			<?php echo print_resource('743', 'basic', 'no-li', 'break'); ?> <br />
        </blockquote>

        <h4 style="margin-bottom:0">Need background sources?</h4>
        <div class="padding25-left">
       Remember: While these sources may help you understand your population and develop a working vocabulary, you need “research articles” in order to complete the assignment!<br /><br />
       </div>

       <p>Try:
		       <?php echo print_resource('608', 'basic', 'no-li'); ?>: fulltext version of encyclopedias and dictionaries<br />
      </p>

      <p>
           Look for books in: <?php echo print_resource('967', 'basic', 'no-li'); ?> (Olivet’s holdings) or
           <?php echo print_resource('919', 'basic', 'no-li'); ?> (90 partner libraries in IL)
		</p>




<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
