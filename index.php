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

	if(file_exists('credentials.json')) {
	// Get the API client and construct the service object.
	$client = getClient();
	$service = new Google_Service_Calendar($client);

	// Print the next 10 events on the user's calendar.
	$calendarId = '72ts5jjncg48q761l4bsl9589g@group.calendar.google.com';
	$optParams = array(
	  'maxResults' => 10,
	  'orderBy' => 'startTime',
	  'singleEvents' => true,
	  'timeMin' => date('c'),
	);
	$results = $service->events->listEvents($calendarId, $optParams);
	$events = $results->getItems();

	if (empty($events)) {
	    print "No upcoming events found.\n";
	} else {
	    print "Upcoming events:\n";
	    foreach ($events as $event) {
	        $start = $event->start->dateTime;
	        if (empty($start)) {
	            $start = $event->start->date;
	        }
	        printf("%s (%s)\n", $event->getSummary(), $start);
	    }
	}
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
   <div class="left">
		 <p>hello the library is currently open</P>
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
