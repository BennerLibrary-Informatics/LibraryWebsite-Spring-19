<?php
   $page_title = "Astronomy - Benner Library";
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
<h1>Astronomy</h1>

<div class="split l60-r40 cf">
    <div class="left">
        <h3 class="no-margin-top bold">Selected Databases</h3>
            <ul class="link-list irs">
                <?php echo print_subject('41', array('5', '11'), 'bas', 'tutorial', 'gon', 'flo'); ?>
            </ul>
        <h3 class="bold">Selected eBooks</h3>
            <ul class="link-list irs">
                <?php echo print_subject('41', array('2'), 'bas', 'tutorial', 'gon', 'flo'); ?>
            </ul>
        <!-- <h3 class="bold">Selected eJournals</h3> -commented out 5/29/18 as there are non currently
            <ul class="link-list irs">
                <?php //echo print_subject('41', array('3'), 'bas', 'tutorial', 'gon', 'flo'); ?>
            </ul> -->
    </div>

    <div class="right">
        <img class="padding15-left" src="/img/subject-guides/astronomy.png" alt="Astronomy" title="Telescope" />
        <h5 class="bold">Websites</h5>
            <ul class="link-list padding10-left">
                <li><a href="/subject-guides/astronomy/selected-sites.php">Selected Sites</a></li>
            </ul>
    </div>
</div>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
