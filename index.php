<?php
	$page_title = "Benner Library - Olivet Nazarene University";
	$body_class = "no-side-bar";
	$body_id = "home";
	$css = "<link rel='stylesheet' type='text/css' href='/css/home.css'>";
	$js = "";
?>

<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/top.php";
   include_once($path);
?>


<!-- ===== content below here ======================================================== -->

<!-- following code allow home hero image to be randomized -->
<?php
   $imgDir = 'img/home-page/'; //directory of image files
   $imgs = glob($imgDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE); // array of images
   $ranImg = $imgs[array_rand($imgs)]; //set random image
   $info = pathinfo($ranImg);
   $file =  basename($ranImg,'.'.$info['extension']);
  //$img = array('img_2392.jpg', 'img_2400.jpg', 'img_2412.jpg', 'chess-cut.jpg', "books.png" ); // array of filenames
  //$i = rand(0, count($img)-1); // generate random number size of the array
  //$selHomeHeroImg = "$img[$i]"; // set variable equal to which random filename was chosen
	if(file_exists('./vendor/autoload.php')) {
		require_once('./vendor/autoload.php');
	}

	//Retrieves google calendar client
	function getClient()
	{
	    $client = new Google_Client();
	    $client->setApplicationName('Benner Library');
	    $client->setScopes(Google_Service_Calendar::CALENDAR_READONLY);
	    $client->setAuthConfig('credentials.json');
	    $client->setAccessType('offline');
	    $client->setPrompt('select_account consent');

	    // Load previously authorized token from a file, if it exists.
	    // The file token.json stores the user's access and refresh tokens, and is
	    // created automatically when the authorization flow completes for the first
	    // time.
	    $tokenPath = 'token.json';
	    if (file_exists($tokenPath)) {
	        $accessToken = json_decode(file_get_contents($tokenPath), true);
	        $client->setAccessToken($accessToken);
	    }

	    // If there is no previous token or it's expired.
	    if ($client->isAccessTokenExpired()) {
	        // Refresh the token if possible, else fetch a new one.
	        if ($client->getRefreshToken()) {
	            $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
	        } else {
	            // Request authorization from the user.
	            $authUrl = $client->createAuthUrl();
	            printf("Open the following link in your browser:\n%s\n", $authUrl);
	            print 'Enter verification code: ';
	            $authCode = trim(fgets(STDIN));

	            // Exchange authorization code for an access token.
	            $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
	            $client->setAccessToken($accessToken);

	            // Check to see if there was an error.
	            if (array_key_exists('error', $accessToken)) {
	                throw new Exception(join(', ', $accessToken));
	            }
	        }
	        // Save the token to a file.
	        if (!file_exists(dirname($tokenPath))) {
	            mkdir(dirname($tokenPath), 0700, true);
	        }
	        file_put_contents($tokenPath, json_encode($client->getAccessToken()));
	    }
	    return $client;
	}

	function getEvents($minTime,$numEvents = 10 ) {
		if($minTime == null) { $minTime = date('c'); }
		if(file_exists('credentials.json')) {
			// Get the API client and construct the service object.
			$client = getClient();
			$service = new Google_Service_Calendar($client);

			// Print the next 10 events on the user's calendar.
			//Test calendar ID - agile45501@gmail.com
			//Benner Cal ID - 72ts5jjncg48q761l4bsl9589g@group.calendar.google.com
			$calendarId = 'agile45501@gmail.com';
			$optParams = array(
				'orderBy' => 'startTime',
				'singleEvents' => true,
				'timeMin' => $minTime,//Uses server date as minimum
				'maxResults' => $numEvents
			);
			$results = $service->events->listEvents($calendarId, $optParams);
			$events = $results->getItems();
			return $events;
		}
	} 
	//If given datetime falls within the event, returns 0
	//If given event happens before datetime, returns -1
	//If given event happens after datetime, returns 1
	function compareDate($gCalEvent,$dTime) {
		$eventStart = new DateTime($gCalEvent->start->dateTime);
		$eventEnd = new DateTime($gCalEvent->end->dateTime);
		if($dTime < $eventStart) { return 1;}
		else
		if($dTime > $eventEnd) { return -1;}
		else {  return 0; }
	}

	//Returns a found event, and the array it was found in
	//The reason for returning the array of events is because we want to minimize the number of times we call to the google calendar
	//In the event that a single grouping of events contains all we need, this means we can get away with calling the API only once by externally searching with the same array
	//If the array given does not contain an open date occuring after the sdate, then the function will behave normally and make API calls to look forward.
	function getNextOpenFromDate($sDate,$maxRecursionDate, $events) {
		if($events == null) { $events = getEvents($sDate); }//If we are given an array, use it. Otherwise, populate one from the calendar
		for($i = 0; $i < count($events); $i++) {//Iterate through returned events and find one that is open
			$event = $events[$i];
			$pregResult = preg_match("/(?i)\bopen\b/",$event->getSummary());//Matches any summary containing "open" as a standalone word
			if($pregResult == 1) {//Make sure it has not already passed
				if(compareDate($event, $sDate) > -1) {//Either within, or before date
					return array($event,$events);
				}
			}
		}
		//No open was found within returned batch.
		$numEvents = count($events);
		if($numEvents == 0) {//There were no events to begin with, meaning we either lost connection or there are no events in the future
			return null;
		}
		else {//Look further in the future for an open event
			$nextTryDate = new DateTime($events[$numEvents-1]->end->dateTime);
			if($nextTryDate > $maxRecursionDate) {//We have reached cutoff date, stop looking
				return null;
			}
			else {//Keep looking starting from end last date returned
				return getNextOpenFromDate($nextTryDate, $maxRecursionDate);
			}
		}
	}

	//Return in array the following format:
	// [ isCurrentlyOpen, RelevantDate, nextRelevantDate ]
	function getOpenCloseDates() {
		$isOpen = null;
		$relevantDate = null;
		$nextRelevantDate = null;
		$currentDate = Date('c');
		$maxDate = date_add(new DateTime($currentDate), new DateInterval('P2M'));//max search date is 2 months from current
		$nextOpen1 = getNextOpenFromDate($currentDate,$maxDate,null);
					
		if($nextOpen1 != null) {//If a date was found
			if(compareDate($nextOpen1[0],$currentDate) == 0) { //Currently open
				$isOpen = true;
				$relevantDate = $nextOpen1[0]->end->dateTime;//Time we will be closing
				$nextOpen2 = getNextOpenFromDate($relevantDate,$maxDate,$nextOpen1[1]);//Look for next open date, starting from when we close
				if(nextOpen2 != null) {
					$nextRelevantDate = nextOpen2[0]->start->dateTime;//datetime we will be opening again
				}
			}
			else {//Currently closed
				$isOpen = false;
				$relevantDate = $nextOpen1[0]->start->dateTime;//Time we will be opening
				$nextRelevantDate = $nextOpen1[0]->end->dateTime;//Time we will be closing
			}
		}
		return array($isOpen,$relevantDate,$nextRelevantDate);
	}
?>

<!-- if would like to go back to static picture comment out style portion below and modify home-hero.less file -->
<div id="home-hero" class="" style="background: url(<?php echo $ranImg; ?>)">
	<ul>
		<li>
			<a href="/subject-guides/index_no_js.php" class="no-js-link">Subject Guides</a>
			<div class="home-hero-section">
				<?php
				    $path = $_SERVER['DOCUMENT_ROOT'];
				    $path .= "/scripts/resource-navigator_drop-page/subject-guides.php";
				    include_once($path);
				?>
			</div>
		</li>

		<li>
			<a href="/books-media/index.php">Books &amp; Media</a>
			<div class="home-hero-section">
				<?php
				   	$path = $_SERVER['DOCUMENT_ROOT'];
				   	$path .= "/scripts/resource-navigator_drop-page/books-media.php";
				   	include_once($path);
				?>
			</div>
		</li>

		<li>
			<a href="/journals-articles/index.php">Journals &amp; Articles</a>
			<div class="home-hero-section">
				<?php
				   	$path = $_SERVER['DOCUMENT_ROOT'];
				   	$path .= "/scripts/resource-navigator_drop-page/journals-articles.php";
				   	include_once($path);
				?>
			</div>
		</li>

		<li>
			<a href="/services/index.php">Services</a>
			<div class="home-hero-section">
				<?php
				   	$path = $_SERVER['DOCUMENT_ROOT'];
				   	$path .= "/scripts/resource-navigator_drop-page/services.php";
				   	include_once($path);
				?>
			</div>
		</li>

		<li>
			<a href="/help/index.php">Help</a>
			<div class="home-hero-section">
				<?php
				   	$path = $_SERVER['DOCUMENT_ROOT'];
				   	$path .= "/scripts/resource-navigator_drop-page/help.php";
				   	include_once($path);
				?>
			</div>
		</li>


	</ul>
	<div class="cf"> </div>
<!-- end #home-hero --></div>

<div class="split l25-r75 cf">
   <div class="left no-margin-top" >
		 <div class="margin10-left">

		 <?php
				date_default_timezone_set("America/Chicago");
				$eventResults = getOpenCloseDates();
				$isOpen = $eventResults[0];
				$relevantDate = new DateTime($eventResults[1]);
				$nextRelevantDate = new DateTime($eventResults[2]);
				//isOpen - Boolean - Is the library currently open at this instant?
				//relevantDate - date - if isOpen, the date we will close. if not isOpen, the date we will next open
				//nextRelevantDate - date - if isOpen, the date we will next open, if closed, the date we will next close
				
				//TODO - Update display code to include nextRelevantDate
				//TODO - introduce some sort of error handling in case isOpen or relevantDate are null

				if($isOpen) {
					echo "<div style=\"text-align: center\"><img src=\"/about/calendar/img/open_purple.png\" alt=\"open_purple.png\"></div>";
					echo "<p>The Library will close at ";
					echo date_format($relevantDate,"g:ia");
					echo "The library will open again on ";
					echo date_format($nextRelevantDate, "m/d");
					echo " at ";
					echo date_format($nextRelevantDate, "g:ia");
					echo "</p>";
				}
				else {
					echo"<div style=\"text-align: center\"><img src=\"/about/calendar/img/closed_purple.png\" alt=\"closed_purple.png\"></div>";
					echo "<p>The Library will open on ";
					echo date_format($relevantDate,"m/d");
					echo " at ";
					echo date_format($relevantDate,"g:ia");
					echo "</p>";
				}

				//Print time and UTC designation
				$cReadableTime = date('g:ia (T)');
				echo "<p>It is currently $cReadableTime</p>";
				echo "<p><a href=/about/calendar/index.php>Full Calendar</a></p>"


		  ?>
			</div>
	</div>

	<div class="right">
		<div id="bulletins">
			<div id="window">
				<div class="arrow left" style="width: 30px;"></div>
				<div class="arrow right hover"  style="width: 30px;"></div>
				<div id="reel">
					<div class="bulletin">
						<img id="previewImg" src="https://library.olivet.edu/img/bulletins/220x260/promote_charging_station.png" alt="Charging Station" title="promote_charging_station.png">
					</div>
					<div class="bulletin">
						<img id="previewImg" src="https://library.olivet.edu/img/bulletins/220x260/promote_archives_full.png" alt="University Archives" title="promote_archives_full.png">
					</div>
					<div class="bulletin">
						<img id="previewImg" src="https://library.olivet.edu/img/bulletins/220x260/promote_green_screen.png" alt="green_screen" title="promote_green_screen.png">
					</div>
					<div class="bulletin">
						<img id="previewImg" src="https://library.olivet.edu/img/bulletins/220x260/promote_dual_monitors.png" alt="Dual Monitors" title="promote_dual_monitors.png">
					</div>
					<div class="bulletin">
						<img id="previewImg" src="https://library.olivet.edu/img/bulletins/220x260/promote_backdrops.png" alt="Photo Backdrops" title="promote_backdrops.png">
					</div>

					<!--<?php
						include("bulletins/display.php");
					?>-->

				</div>
			</div>
		</div>
	</div>
	<!-- end #benner_bulletins --></div>
			<!-- The following two lines of code will generate the Benner Bulletins
			     below these two lines of code is how we orginally did the Bulletins
					 in case there is an application failure to be able to get Bulletins
					 back -->


			<!--Must have at least six bulletins or it leaves an awkward space-->
			<!--1 This position should be reserved for the most pertinent, time sensitive, and important bulletin like closing announcements-->
<!--
			<div class="bulletin">
				<img src="/img/bulletins/220x130/lightning_usb.png" alt="New Items for Sale" title="For Sale">
				<h6>
					Lightning Cables<br />
					$5 each<br /><br />
					USB Power Adapters<br />
					$6 each
				</h6>
			</div>



			<!--2 Google Calendar is a permanent bulletin. It should always be in the second position.-->
<!--
			<div class="bulletin">
				<iframe src="https://www.google.com/calendar/embed?title=Benner%20Hours%20%26%20Events&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTz=0&amp;mode=AGENDA&amp;height=240&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=72ts5jjncg48q761l4bsl9589g%40group.calendar.google.com&amp;color=%236B3304&amp;ctz=America%2FChicago" style=" border-width:0 " width="220" height="240" frameborder="0" scrolling="no"></iframe>
				<a href="/about/calendar/index.php">View Full Calendar</a>
			</div>

			<!--3-->
<!--
			<div class="bulletin">
                <a href="/about/calendar/index.php" title="library calendar" /><img src="img/bulletins/220x130/revival.png" alt="special hours" title="Link goes to library calendar" /></a>
                <p class="title-font">The library will be closed for Winter Revival Evening Services. Please refer to our <a href="/about/calendar/index.php">calendar</a> or our <a id="pdf" href="/about/hours/doc/exceptions.pdf">exceptions pdf</a> for revised dates and times.</p>
            </div>

			<!--4-->
<!--
			<div class="bulletin">
                <a href="/about/calendar/index.php" title="library calendar" /><img src="img/bulletins/220x130/special_hours_winter_break.png" alt="special hours" title="Link goes to library calendar" /></a>
                <p class="title-font">Please refer to our <a href="/about/calendar/index.php">calendar</a> or our <a id="pdf" href="/about/hours/doc/exceptions.pdf">exceptions pdf</a> for revised dates and times.</p>
            </div>

			<!--5-->
<!--
			<div class="bulletin">
				<a href="/services/faculty_services/index.php"><img src="/img/bulletins/220x260/faculty_resources.png" alt="Faculty Resources" title="Link to Faculty Resources page."></a>
			</div>

			<!--6-->



			<!--7-->
<!--
			<div class="bulletin">
				<img src="/img/bulletins/220x130/special_events_fishbowl_meditations.png" alt="" title="">
				<p>
				 Join us for Fishbowl Meditations every Friday from 10-11am in the Library Fishbowl.
				</p>
			</div>

			<!--8-->
<!--
			<div class="bulletin">
				<img src="/img/bulletins/220x130/technical_difficulties.png" alt="" title="">
				<p>
					Some of our database suppliers no longer support Internet Explorer version 8 or older. If you are experiencing difficulties accessing our databases, try another browser such as Firefox or Chrome before contacting us.
				</p>
			</div>
-->



<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
