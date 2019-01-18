<?php
   $page_title = "BSNS 440 - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
$reviewedDate = "";
$creatorID ="";		//This ID is from the help_email ie 10
	$updaterID ="5";		//This ID is from the help_email ie 10
	$createdDate ="10/20/2018";	//The date entered here shows up ie 3/2/2015
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
<h2 class="header-line">BSNS 440: Marketing Research</h2>
  <div class="split l50-r50 cf">
     <div class="left">
        <ul class="link-list irs">
          <?php echo print_resource('832', 'basic', 'graphic', 'float_description', 'tutorial'); ?>
        </ul>

      		<div class="margin30-left">
      			<p>
              Use this for:
              <ul>
                <li>Company reports</li>
                <li>Trade & popular news articles</li>
                <li>Scholarly articles</li>
              </ul>
      			</p>
      		</div>
        </div>

        <div class="right">
          <ul class="link-list irs">
            <?php echo print_resource('570', 'basic', 'graphic', 'float_description', 'tutorial'); ?>
          </ul>

        		<div class="margin30-left">
        			<p>
                Use this for:
                <ul>
                  <li>Industry information</li>
                  <li>Competitors</li>
                  <li>Company profiles</li>
                  <li>Scholarly articles</li>
                </ul>
        			</p>
        		</div>
        </div>
      </div>

      <div class="split l50-r50 cf">
         <div class="left">
            <ul class="link-list irs">
              <?php echo print_resource('569', 'basic', 'graphic', 'float_description', 'tutorial'); ?>
            </ul>

          		<div class="margin30-left">
          			<p>
                  Use this for:
                  <ul>
                    <li>Statistics!</li>
                    <li>Market share</li>
                    <li>Competitive analysis</li>
                    <li>Infographics</li>
                  </ul>
          			</p>
          		</div>
            </div>

            <div class="right">
              <ul class="link-list irs">
                <?php echo print_resource('611', 'basic', 'graphic', 'float_description', 'tutorial'); ?>
              </ul>

            		<div class="margin30-left">
            			<p>
                    Use this for:
                    <ul>
                      <li>Click on “Menu,” then “Company Dossier”</li>
                      <li>SIC and NAICS code searches</li>
                    </ul>
            			</p>
            		</div>
            </div>
        </div>

        <h5>External link recommendations</h5>
        <p><?php echo print_bookmark('263', 'under_description', 'tab', 'email'); ?>
          <small>
          Powered By <img align="absmiddle" src="/img/dcod.png" />
          </small>
        </p>

        <h5>Client-specific database recommendations</h5>
          <p>
              <a href="https://infograph.venngage.com/ps/oZFk42ihPmY/marketing-perez" target="_blank">Fall 2018 Infographic</a>
          </p>

        	<p><?php echo print_bookmark('262', 'under_description', 'tab', 'email'); ?>
        		<small>
        		Powered By <img align="absmiddle" src="/img/dcod.png" />
        		</small>
        	</p>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
