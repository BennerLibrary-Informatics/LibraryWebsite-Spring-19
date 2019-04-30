<?php
   $page_title = "Database List - Benner Library";
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


<h1 class="no-margin-bottom">Database List</h1>
    <p class="no-margin-top"><a href="#A">A-B</a> | <a href="#C">C-E</a> | <a href="#F">F-H</a> | <a href="#I">I-L</a> | <a href="#M">M-O</a> | <a href="#P">P-R</a> | <a href="#S">S-U</a> | <a href="#V">V-Z</a></p>

    <ul class = "link-list irs">
        <li style="height:0; min-height:0" name="A" id="A"></li>
        <?php echo print_subject('3', array('5', '2', '3'), 'bas', 'tutorial', 'gon', 'flo'); ?>
        <li style="height:0; min-height:0" name="C" id="C"></li>
        <?php echo print_subject('11', array('5', '2', '3'), 'bas', 'tutorial', 'gon', 'flo'); ?>
        <li style="height:0; min-height:0" name="F" id="F"></li>
        <?php echo print_subject('23', array('5', '2', '3'), 'bas', 'tutorial', 'gon', 'flo'); ?>
        <li style="height:0; min-height:0" name="I" id="I"></li>
        <?php echo print_subject('28', array('5', '2', '3'), 'bas', 'tutorial', 'gon', 'flo'); ?>
        <li style="height:0; min-height:0" name="M" id="M"></li>
        <?php echo print_subject('31', array('5', '2', '3'), 'bas', 'tutorial', 'gon', 'flo'); ?>
        <li style="height:0; min-height:0" name="P" id="P"></li>
        <?php echo print_subject('19', array('5', '2', '3'), 'bas', 'tutorial', 'gon', 'flo'); ?>
        <li style="height:0; min-height:0" name="S" id="S"></li>
        <?php echo print_subject('34', array('5', '2', '3'), 'bas', 'tutorial', 'gon', 'flo'); ?>
        <li style="height:0; min-height:0" name="V" id="V"></li>
        <?php echo print_subject('36', array('5', '2', '3'), 'bas', 'tutorial', 'gon', 'flo'); ?>
    </ul>

<!-- <form target="_blank" name="querybox" action="https://i-share.carli.illinois.edu/onu/cgi-bin/Pwebrecon.cgi" method="get"> <input type="hidden" name="DB" value="local" /> <input type="hidden" name="CNT" value="20" /> <input class="formelem" onfocus="this.value='';" size="21" maxlength="100" value="BLISweb Quick Search" name="Search_Arg" /> <select class="formelem" name="Search_Code" style="width: 11em;"> <option value="FT*">Keyword Search</option> <option value="TALL">Start of Title</option>
<option value="CMD">Boolean Search</option> <option value="SUBJ_">Subject Heading</option> <option value="NAME_">Author</option> <option value="CALL_">Call Number</option> </select> <input class="formelem" type="submit" value="Search" /> </form> -->

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
