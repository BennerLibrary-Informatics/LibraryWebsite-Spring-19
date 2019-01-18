<?php
   $page_title = "Printer Statistics - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "
	<script type='text/javascript' src='https://www.google.com/jsapi'></script>
    <script type='text/javascript'>
      google.load('visualization', '1', {packages:['corechart']});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Printer Station', 'Pages'],
          ['Des Moines',  30425],
          ['New York',  19950]
        ]);

        var options = {
          title: '',
		  series: [{color: '#20B2AA'}],
		  backgroundColor: '#F5F5F5',
          vAxis: {title: '',  titleTextStyle: {color: 'black'}}

        };

        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

        chart.draw(data, options);
      }
    </script>

	<script type='text/javascript' src='https://www.google.com/jsapi'></script>
    <script type='text/javascript'>
      google.load('visualization', '1', {packages:['corechart']});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Poster printer', 'Jobs'],
          ['Poster print jobs',  215],
        ]);

        var options = {
          title: '',
		  series: [{color: '#DA652F'}],
		  backgroundColor: '#F5F5F5',
          vAxis: {title: '',  titleTextStyle: {color: 'black'}}

        };

        var chart = new google.visualization.BarChart(document.getElementById('chart_div_poster'));

        chart.draw(data, options);
      }
    </script>

	<script type='text/javascript' src='https://www.google.com/jsapi'></script>
    <script type='text/javascript'>
      google.load('visualization', '1', {packages:['corechart']});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['3D printer', 'Totals'],
          ['Total jobs',  75],
		  ['Total grams',  7529],
        ]);

        var options = {
          title: '',
		  series: [{color: '#9486B1'}],
		  backgroundColor: '#F5F5F5',
          vAxis: {title: '',  titleTextStyle: {color: 'black'}}

        };

        var chart = new google.visualization.BarChart(document.getElementById('chart_div_3d'));

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
<h2 class="header-line">Printer Statistics</h2>
<h5>Patron Printing from March 16, 2018 to April 15, 2018</h5>
	<div class="border-double margin15" id="chart_div" style="width: 650px; height: 250px;"></div>

<p>To view our graphs, Javascript must be enabled.</p>

<h5>Poster Printing from July 16, 2018 through August 15, 2018</h5>
	<div class="border-double margin15" id="chart_div_poster" style="width: 650px; height: 250px;"></div>

<p>To view our graphs, Javascript must be enabled.</p>

<h5>3D Printing from January 2018 to August 2018</h5>
	<div class="border-double margin15" id="chart_div_3d" style="width: 650px; height: 250px;"></div>

<p>To view our graphs, Javascript must be enabled.</p>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
