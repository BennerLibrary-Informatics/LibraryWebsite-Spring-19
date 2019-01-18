
<?php
   $page_title = "Education - Benner Library";
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
<h1>Education</h1>

<div class="split l60-r40 cf">
    <div class="left">
		<ul class="link-list irs">
            <li><a href="/subject-guides/education/esl/index.php">Education: ESL/ELL/Bilingual</a></li><li><a href="/subject-guides/education/k12/index.php">Education: K-12 Subject Guide</a></li>
			<li><a href="/subject-guides/education/professional/index.php">Education: Professional Subject Guide</a></li>
			<li><a href="/subject-guides/education/special-education/index.php">Education: Special Education Subject Guide</a></li>
			<li><a href="/departments/curriculum-center/index.php">Curriculum Center</a></li>
        </ul>
		
		<h6>SGCS Education Program Pages:</h6>
		<p>
			<img src="/img/sgcs.png" /> <a class="like-link-list" href="/subject-guides/education/read/index.php">READ Program</a>

		</p>
		
    </div>

    <div class="right">
        <img class="padding15-left" src="/img/subject-guides/chalkboard.png" alt="Chalkboard Image" title="Decorative Chalkboard Image" />
    </div>
</div>


<!-- ===== content above here ========================================================== -->                
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>