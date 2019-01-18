<?php
   $page_title = "Lab Statistics - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "
    <script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
	<script type='text/javascript'>

	  google.charts.load('current', {packages: ['corechart', 'line']});
google.charts.setOnLoadCallback(drawLineColors);

function drawLineColors() {
      var data = new google.visualization.DataTable();
      data.addColumn('number', 'Week');
      data.addColumn('number', 'Spring');
      data.addColumn('number', 'Fall');

      data.addRows([
        [0, 0, 0],    [1,21,24],   [2,30,31],  [3,31,29],   [4, 25,37],  [5, 31,41],
        [6, 26,41],   [7, 29,28],  [8, 31,23],  [9, 30,25],  [10, 25,23], [11, 23,24],
        [12, 25,27], [13, 28,25], [14, 24,25], [15, 25,26], [16, 24,25]
      ]);

      var options = {
        hAxis: {
          title: 'Week#', 
		  ticks: [2,4,6,8,10,12,14,16]
        },
        vAxis: {
          title: 'Count',
		  ticks: [5,10,15,20,25,30,35,40,45]
        },
		
        colors: ['#34495D', '#DA652F'],
		backgroundColor: '#F5F5F5',
		height: 500,
		width: 700,
		title: 'Max Usage FA 2014-SP2016 7am-5pm'
      };

      var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
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
<h2 class="header-line">Lab Statistics</h2>

	<h5>Instruction Lab</h5>
	
	<!--Div that will hold the line chart-->
	<div id="chart_div"></div>
	
	 
	<p>To view our graphs, Javascript must be enabled.</p>

<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>