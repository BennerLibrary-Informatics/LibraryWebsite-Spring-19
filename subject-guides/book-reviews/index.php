<?php
   $page_title = "Book Reviews - Benner Library";
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
<h1>Book Reviews</h1>

  <div class="split l60-r40 cf">
    <div class="left">
        <h2 class="bold">Selected Databases</h2>
        <ul class="link-list irs">
        <?php echo print_subject('43', array('5', '11'), 'bas', 'tutorial', 'gon', 'flo'); ?>
        </ul>
    </div>

    <div class="right">
    <img class="padding15-left" src="/img/subject-guides/book_reviews.png" alt="Book Reviews" title="Book Reviews">

        <h5 class="bold">Course Guides</h5>
            <ul class="link-list padding10-left">
            <li><a href="/subject-guides/book-reviews/finding-book-reviews.php">Finding Book Reviews at Benner Library</a>
            </ul>
    </div>
</div>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
