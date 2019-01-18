<?php
   $page_title = "Website Statistics - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "<!--Load the AJAX API-->
    <script type='text/javascript' src='https://www.google.com/jsapi'></script>
    
	
	<script type='text/javascript'>
      google.load('visualization', '1', {packages:['corechart']});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Equipment', 'Charges', { role: 'style' }],
          ['Headphones', 182, '#992A2B'],
		  ['Lightning to USB', 138, '#9486B1'],
          ['Apple USB Power adapter',  89, '#248E84'],
		  ['Micro USB Charger', 45, '#6D6D6D'],
		  ['USB Cable for 30pin', 8, '#34495D'],
		  ['Lightning Digital AV adapter', 2, '#Af5A5A'],
		  ['30 Pin Digital AV adapter', 1, '#A48774']
        ]);

        var options = {
          title: '2016-2017 School Year',
		  legend: {position: 'none'},
		  backgroundColor: '#F5F5F5',
          vAxis: {title: '',  titleTextStyle: {color: 'black'}}
		  
        };

        var chart = new google.visualization.BarChart(document.getElementById('bar_chart'));

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
<h2 class="header-line">Checkout Statistics</h2>
	
	<div class="border-double margin15" >
		<div class="color-light-grey padding5-top padding5-bottom">
			<h5>Cable & Adapters Checkout:</h5>
		</div>
		
		<!--Div that will hold the bar chart-->
		<div id="bar_chart" style="width: 550px; height: 400px;"></div>
	</div>
	

	 
	<p>To view our graphs, Javascript must be enabled.</p>

<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>