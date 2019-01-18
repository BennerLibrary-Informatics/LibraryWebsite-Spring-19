<?php
   $page_title = "Literature - Benner Library";
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
<h1>Literature</h1>

<div class="split l60-r40 cf">
    <div class="left">
        <h3 class="no-margin-top bold">Selected Databases</h3>
            <ul class="link-list irs">
                <?php echo print_subject('74', array('5', '11'), 'bas', 'tutorial', 'gon', 'flo'); ?>
            </ul>      

        <h3 class="bold">Selected eBooks</h3>
            <ul class="link-list irs">
               <?php echo print_subject('74', array('2'), 'bas', 'tutorial', 'gon', 'flo'); ?>
            </ul>
    </div>
    <div class="right">

    <img class="padding15-left" src="/img/subject-guides/literature.png" alt="Literature" title="Literature" />
    <h5 class="no-margin-top bold">Course Guides</h5>
    <ul class="link-list padding10-left">
        <li><a href="/subject-guides/literature/lit318/index.php">LIT318: Shakespeare</a></li> 
    </ul>

        <h5 class="no-margin-top bold">Websites</h5>
        <ul class="link-list padding10-left">
            <li><a href="/subject-guides/english/selected-sites.php">Selected Sites</a></li>
			<li><a href="/subject-guides/english/index.php">English Subject Guide</a></li>
        </ul>

    </div>
</div>



<!-- ===== content above here ========================================================== -->                
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>