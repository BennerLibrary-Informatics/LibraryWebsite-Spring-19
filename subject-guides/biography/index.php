<?php
   $page_title = "Biography - Benner Library";
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
<h1>Biography</h1>

<div class="split l60-r40 cf">
    <div class="left">
        <h3 class="no-margin-top bold">Selected Databases</h3>
            <ul class="link-list irs">
                <?php echo print_subject('42', array('5', '11'), 'bas', 'tutorial', 'gon', 'flo'); ?>
            </ul>      

        <h3 class="bold">Selected eBooks</h3>
            <ul class="link-list irs">
                <?php echo print_subject('42', array('2'), 'bas', 'tutorial', 'gon', 'flo'); ?>
            </ul>
    </div>

    <div class="right">
        <img class="padding15-left" src="/img/subject-guides/abraham-lincoln.png" alt="Abraham Lincoln Image" title="Decorative Abraham Lincoln sketched image">
        <h5 class="bold">Websites</h5>
            <ul class="link-list padding10-left">
                <li><a href="http://www.biography.com/" target="_blank" title="Over 25,000 biographies">A&amp;E Biography</a></li>
                <li><a href="http://bioguide.congress.gov/biosearch/biosearch.asp" target="_blank">Congressional Biographical Dictionary</a></li>
				<li><a href="/subject-guides/biography/selected-sites.php">Other Selected Sites</a></li>
            </ul>
    </div>
</div>

<!-- ===== content above here ========================================================== -->                
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>