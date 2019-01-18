<?php
   $page_title = "Website Statistics - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "<!--Load the AJAX API-->
    <script type='text/javascript' src='https://www.google.com/jsapi'></script>
    <script type='text/javascript'>

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Nursing', 33462],
          ['Good Places to Start', 4661],
		  ['Education Professional', 2539],
		  ['Psychology', 1415],
		  ['Religion', 1086],
		  ['Biology', 875],
          ['Business Marketing', 1088],
		  ['Social Work', 866],
		  ['Communication', 596],
		  ['Education K12', 702]
        ]);

        // Set chart options
        var options = {'title':'Top 10 Page Views',
                       'width':675,
                       'height':350,
					   backgroundColor: '#F5F5F5',
					   'is3D':true};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
        chart.draw(data, options);
      }
    </script>

	<script type='text/javascript'>
      google.load('visualization', '1', {packages:['corechart']});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Browser', 'Sessions', { role: 'style' }],
          ['Chrome', 38029, '#FDCA0B'],
		  ['Internet Explorer', 4847, '#00599E'],
          ['Safari',  4622, '#F07109'],
		  ['Firefox', 2088, '#47BEE2'],
		  ['Edge', 1330, '#C11E28']
        ]);

        var options = {
          title: 'January-March 2018',
		  legend: {position: 'none'},
		  backgroundColor: '#F5F5F5',
          vAxis: {title: '',  titleTextStyle: {color: 'black'}}

        };

        var chart = new google.visualization.BarChart(document.getElementById('bar_chart'));

        chart.draw(data, options);
      }
    </script>

	<script type='text/javascript'>
      google.load('visualization', '1', {packages:['corechart']});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Operating System', 'Sessions'],
          ['Windows', 41354],
          ['Macintosh',  5548],
          ['iOS',  2894],
          ['Android', 1034],
        ]);

        var options = {
          title: 'January-August 2018',
		  backgroundColor: '#F5F5F5',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
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
<h2 class="header-line">Website Statistics</h2>

	<div class="margin15 color-light-grey padding5-top padding5-bottom">
		<h5>Library Homepage Hits January-August 2018: 171,783</h5>
	</div>

	<div class="border-double margin15" >
		<div class="color-light-grey padding5-top padding5-bottom">
			<h5>Subject Guide January-August 2018:</h5>
		</div>

		<!--Div that will hold the pie chart-->
		<div id="pie_chart"></div>
	</div>

	<div class="border-double margin15" >
		<div class="color-light-grey padding5-top padding5-bottom">
			<h5>Internet Browser Choices:</h5>
		</div>

		<!--Div that will hold the bar chart-->
		<div id="bar_chart" style="width: 550px; height: 400px;"></div>
	</div>

	<div class="border-double margin15" >
		<div class="color-light-grey padding5-top padding5-bottom">
			<h5>Operating System Choices:</h5>
		</div>

		<!--Div that will hold the bar chart-->
		<div id="donutchart" style="width: 550px; height: 400px;"></div>
	</div>

	<p>To view our graphs, Javascript must be enabled.</p>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
