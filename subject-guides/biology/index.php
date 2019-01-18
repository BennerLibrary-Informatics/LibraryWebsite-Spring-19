<?php
   $page_title = "Biology - Benner Library";
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
<h1>Biology</h1>

<div class="split l60-r40 cf">
    <div class="left">
        <h3 class="no-margin-top bold">Selected Databases</h3>
            <ul class="link-list irs">
                <?php echo print_subject('22', array('5', '11'), 'bas', 'tutorial', 'gon', 'flo'); ?>
            </ul>

		<h3 class="bold">Selected eJournals</h3>
			  <ul class="link-list irs">
				 <?php echo print_subject('22', array('3'), 'bas', 'tutorial', 'gon', 'flo'); ?>
			  </ul>

        <h3 class="bold">Selected eBooks</h3>
            <ul class="link-list irs">
                <?php echo print_subject('22', array('2'), 'bas', 'tutorial', 'gon', 'flo'); ?>
            </ul>

    </div>

    <div class="right">
        <img class="padding15-left" src="/img/subject-guides/biology.png" alt="Biology" title="Microscope" />
        <h5 class="bold">Course Guides</h5>
            <ul class="link-list padding10-left">
                <!--<li><a href="/subject-guides/biology/biol126/index.php">BIOL126: Biology II</a></li>-->
                <li><a href="/subject-guides/biology/biol126/index.php">BIOL 126: Biology II</a></li>
                <li><a href="/subject-guides/biology/biol352/index.php">BIOL352: Advanced Botany</a></li>
				        <li><a href="/subject-guides/biology/biol356/index.php">BIOL356: Microbiology</a></li>
                <li><a href="/subject-guides/biology/biol370/index.php">BIOL370: Ecology</a></li>
            </ul>

        <h5 class="bold">Websites</h5>
            <ul class="link-list padding10-left">
                <li><a href="/subject-guides/biology/selected-sites.php">Selected Sites</a></li>
            </ul>

        <h5 class="bold">Tips &amp; Tutorials</h5>
            <ul class="link-list padding10-left">
                <li><a href="http://biology.kenyon.edu/Bio_InfoLit/index.html">Reading Primary Literature in Biology</a></li>
            </ul>

    </div>
</div>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
