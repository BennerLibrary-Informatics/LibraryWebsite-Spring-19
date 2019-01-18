<?php
   $page_title = "Campus Links - Benner Library";
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

<h1>Campus Links</h1>

    <div class="split l40-r60">
        <div class="left">
            <ul class="link-list">
                <?php
                    $path = $_SERVER['DOCUMENT_ROOT'];
                    $path .= "/scripts/top-nav_drop-page/campus-links.php";
                    include($path);
                ?>
            </ul>
        </div>
    </div>


<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>