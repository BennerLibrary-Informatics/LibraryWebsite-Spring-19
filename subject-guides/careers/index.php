<?php
   $page_title = "Careers - Benner Library";
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
<h1>Careers</h1>

<div class="split l60-r40 cf">
    <div class="left">
        <h3 class="no-margin-top bold">Selected Databases</h2>
        <ul class="link-list irs">
        <?php echo print_subject('44', array('5', '11'), 'bas', 'tutorial', 'gon', 'flo'); ?>
        </ul>

        <h3 class="no-margin-top bold">Selected eBooks</h2>
        <ul class="link-list irs">
        <?php echo print_subject('44', array('2'), 'bas', 'tutorial', 'gon', 'flo'); ?>
        </ul>

        <h5>Visit <a href="https://my.olivet.edu/CareerServ/default.aspx" target="_blank">Career Services &amp; Student Employment</a> on My Olivet for many additional resources including on-campus and off-campus jobs, assistance with resumes, cover letters, interview preparation, internships, and professional employment.
        </h5>

        <h5>
        Interested in working for Benner library?  Fill out a library <a href= "http://library.olivet.edu/bin/jobapp/jobapp.php" target="_blank">Student Job Application</a>
        </h5>

    </div>

    <div class="right">
        <img class="padding15-left" src="/img/subject-guides/careers.png" alt="Careers" title="Careers" />
        <h5 class="bold">Websites</h5>
            <ul class="link-list padding10-left">
                <li><a href="http://www.nurse.com" target="_blank">Finding a Nursing Job</a></li>
                <li><a href="/subject-guides/careers/selected-sites.php">Selected Sites</a></li>
            </ul>

        <h5 class="bold">Tips &amp; Tutorials</h5>
            <ul class="link-list padding10-left">
                <li><a href="/subject-guides/careers/gre_resources.php">ONU GRE Resources</a></li>
				<li><a id="pdf" href="/help/subject-specific/doc/onet/onet.pdf" target="_blank">O*Net (gov info about jobs)</a></li>
                <li><a href="https://youtu.be/xhP85mRHLpY" target="_blank">Occupational Outlook Handbook</a></li>
            </ul>
    </div>
</div>

<!--
NeedSomething - Links - The links commented out did not work on the old site -->


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
