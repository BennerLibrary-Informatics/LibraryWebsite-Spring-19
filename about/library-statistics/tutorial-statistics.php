<?php
   $page_title = "Tutorial Statistics - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "
	<script type='text/javascript' src='https://www.google.com/jsapi'></script>
    <script type='text/javascript'>
      google.load('visualization', '1', {packages:['corechart']});
google.setOnLoadCallback(drawVisualization);

function drawVisualization() {
  // Some raw data (not necessarily accurate)
  var data = google.visualization.arrayToDataTable([
    ['Tutorial', 'Views', 'Minutes Watched (estimate)'],
    ['Welcome to the Library Website', 44, 103],
    ['Set up my Library Account',  28, 35],
    ['Finding Articles',  12, 42],
    ['Renew books in my Library Account',  11, 15],
    ['Request items from the Illinois Catalog',  8, 24]
  ]);

  var options = {
    title : 'Tutorial Usage for March 2018',
	backgroundColor: '#F5F5F5',
    seriesType: 'bars',
    series: {5: {type: 'line'}}
  };

  var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
  chart.draw(data, options);
}
    </script>

	"; 
?>

<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/top.php";
   include_once($path);
?>
<!-- ===== content below here ========================================================== -->
<h2 class="header-line">Tutorial Statistics</h2>
	<div id="chart_div" style="width: 600px; height: 400px;"></div>

<p>To view our graphs, Javascript must be enabled.</p>






<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>