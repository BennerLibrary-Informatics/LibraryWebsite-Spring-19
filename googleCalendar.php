<?php
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
  $eventStart = new Datetime($gCalEvent->start->dateTime);
  $eventEnd = new Datetime($gCalEvent->end->dateTime);
  //printLine("D1=".$gCalEvent->start->dateTime);
  //printLine("D2=".$gCalEvent->end->dateTime);
  //printLine("D3=".$dTime);
  if($dTime < $eventStart) { return 1;}
  else
  if($dTime >= $eventEnd) { return -1;}
  else { return 0; }
}

function printLine($s) {
  echo "<p>";
  echo $s;
  echo "</p>";
}

//Returns a found event, and the array it was found in
//The reason for returning the array of events is because we want to minimize the number of times we call to the google calendar
//In the event that a single grouping of events contains all we need, this means we can get away with calling the API only once by externally searching with the same array
//If the array given does not contain an open date occuring after the sdate, then the function will behave normally and make API calls to look forward.
function getNextOpenFromDate($sDate,$maxRecursionDate, $events) {
  if($events == null) { $events = getEvents($sDate); }//If we are given an array, use it. Otherwise, populate one from the calendar
  $compDate = new DateTime($sDate);
  for($i = 0; $i < count($events); $i++) {//Iterate through returned events and find one that is open
    $event = $events[$i];
    $pregResult = preg_match("/(?i)\bopen\b/",$event->getSummary());//Matches any summary containing "open" as a standalone word
    if($pregResult == 1) {//Make sure it has not already passed
      if(compareDate($event, $compDate) > -1) {//Either within, or before date
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
    $nextTryDate = $events[$numEvents-1]->end->dateTime;
    if($nextTryDate > $maxRecursionDate) {//We have reached cutoff date, stop looking
      return null;
    }
    else {//Keep looking starting from end last date returned
      return getNextOpenFromDate($nextTryDate, $maxRecursionDate, null);
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
    $compDate = new DateTime($currentDate);
    if(compareDate($nextOpen1[0],$compDate) == 0) { //Currently open
      $isOpen = true;
      $relevantDate = $nextOpen1[0]->end->dateTime;//Time we will be closing
      $nextOpen2 = getNextOpenFromDate($relevantDate,$maxDate,$nextOpen1[1]);//Look for next open date, starting from when we close
      if($nextOpen2 != null) {
        $nextRelevantDate = $nextOpen2[0]->start->dateTime;//datetime we will be opening again
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

date_default_timezone_set("America/Chicago");
if (!isset($_COOKIE["relevantDate"])) {
  $eventResults = getOpenCloseDates();
  ob_start();
      setcookie("isOpen", $eventResults[0], time() + 300, "/");
      setcookie("relevantDate", $eventResults[1], time() + 300, "/");
      setcookie("nextRelevantDate", $eventResults[2], time() + 300, "/");
  ob_end_flush();
  $isOpen = (bool)$eventResults[0];
  $relevantDate = new DateTime($eventResults[1]);
  $nextRelevantDate = new DateTime($eventResults[2]);
} else {
  $isOpen = (bool)$_COOKIE["isOpen"];
  $relevantDate = new DateTime($_COOKIE["relevantDate"]);
  $nextRelevantDate = new DateTime($_COOKIE["nextRelevantDate"]);
}
$current = new DateTime(Date());
if ($current >= $relevantDate) {
  setcookie("isOpen", $eventResults[0], time() + -1, "/");
  setcookie("relevantDate", $eventResults[1], time() + -1, "/");
  setcookie("nextRelevantDate", $eventResults[2], time() + -1, "/");
}

//isOpen - Boolean - Is the library currently open at this instant?
//relevantDate - date - if isOpen, the date we will close. if not isOpen, the date we will next open
//nextRelevantDate - date - if isOpen, the date we will next open, if closed, the date we will next close

//TODO - Update display code to include nextRelevantDate
//TODO - introduce some sort of error handling in case isOpen or relevantDate are null

//Print time and UTC designation
$cReadableTime = date('M d, g:ia (T)');
echo "<p style='text-align: center' class='no-margin-right no-margin-left no-margin-top margin5-bottom'>$cReadableTime</p>";
if($isOpen) {
  echo "<div style=\"text-align: center\"><a href=/about/calendar/index.php><img src=\"/about/calendar/img/open_green.png\" alt=\"open_green.png\"></a>";
  echo "<p class='no-margin-top no-margin-left no-margin-right margin5-bottom'>Closes: ";
  echo date_format($relevantDate,"g:ia");
  echo "</p><p class='no-margin-top no-margin-left no-margin-right margin5-bottom'>Reopens: ";
  echo date_format($nextRelevantDate, "g:ia");
  echo "</p><p class='no-margin-top no-margin-left no-margin-right margin5-bottom'>On ";
  echo date_format($nextRelevantDate, "l M d");
  echo "</p></div>";
}
else {
  echo"<div style=\"text-align: center\"><a href=/about/calendar/index.php><img src=\"/about/calendar/img/closed_purple.png\" alt=\"closed_purple.png\"></a></div>";
  echo "<p style='text-align: center' class='no-margin-top no-margin-left no-margin-right margin5-bottom'>Opens: ";
  echo date_format($relevantDate,"g:ia");
  echo "</p><p style='text-align: center' class='no-margin-top no-margin-left no-margin-right margin5-bottom'>On ";
  echo date_format($relevantDate,"l M d");
  echo "</p>";
}

echo "<p style='text-align: center' class='no-margin-top no-margin-left no-margin-right margin5-bottom'><a href=/about/calendar/index.php>Full Calendar</a></p>";

?>
