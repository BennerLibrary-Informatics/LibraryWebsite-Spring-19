<?php
   $page_title = "Dewey Decimal Classification - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = ""; 
?>

<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/top.php";
   include_once($path);
?>
<!-- ===== content below here ========================================================== -->


<h1>Dewey Decimal Classification</h1>
<table>
	<thead>
		<tr>
			<td>
				Call Number
			</td>
			<td>
				Genre
			</td>
		</tr>
	</thead>
	<tbody class="readable">
		<tr>
			<td>
				Call Numbers 000-099
			</td>
			<td>
				Generalities, Library Science, Computer Science &amp; Journalism
			</td>
		</tr>
		<tr>
			<td>
				Call Numbers 100-199
			</td>
			<td>
				Philosophy &amp; Psychology
			</td>
		</tr>
		<tr>
			<td>
				Call Numbers 200-299
			</td>
			<td>
				Religion
			</td>
		</tr>
		<tr>
			<td>
				Call Numbers 300-309
			</td>
			<td>
				Sociology &amp; Anthropology
			</td>
		</tr>
		<tr>
			<td>
				Call Numbers 310-339
			</td>
			<td>
				General Statistics, Political, Science &amp; Economics
			</td>
		</tr>
		<tr>
			<td>
				Call Numbers 340-359
			</td>
			<td>
				Law &amp; Public Adminstration
			</td>
		</tr>
		<tr>
			<td>
				Call Numbers 360-369
			</td>
			<td>
				Social Services
			</td>
		</tr>
		<tr>
			<td>
				Call Numbers 370-379
			</td>
			<td>
			 Education
			</td>
		</tr>
		<tr>
			<td>
				Call Numbers 380-399
			</td>
			<td>
				Commerce, Communications &amp; Transportation
			</td>
		</tr>
		<tr>
			<td>
				Call Numbers 400-499
			</td>
			<td>
				Language
			</td>
		</tr>
		<tr>
			<td>
				Call Numbers 500-599
			</td>
			<td>
				Natural Science &amp; Mathematics
			</td>
		</tr>
		<tr>
			<td>
				Call Numbers 600-699
			</td>
			<td>
				Applied Science
			</td>
		</tr>
		<tr>
			<td>
				Call Numbers 700-799
			</td>
			<td>
				Arts &amp; Entertainment
			</td>
		</tr>
		<tr>
			<td>
				Call Numbers 800-899
			</td>
			<td>
				Literature
			</td>
		</tr>
		<tr>
			<td>
				Call Numbers 900-999
			</td>
			<td>
				Biography, Geography &amp; History
			</td>
		</tr>
	</tbody>
</table>
<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>