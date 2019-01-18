<?php
   $page_title = "Resource Link Creator - Benner Library";
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
<script type="text/javascript">
    function check_url(){
        var user_entered_url = document.getElementById('no_prefix').value;
        var proper_url_format = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
        <!-- We are comparing the url entered by the user to a properly formatted url to make sure the user entered a valid url -->
        var url_test = proper_url_format.test(user_entered_url);

        <!-- If the url is bad we do not want to append the url, but rather, give out an alert -->
        if(url_test) {
            append_url(user_entered_url);
            return true;
        } else {
            alert('Please use a valid url starting with "ftp://", "http://", or "https://".');
            return false;
        }
    }
    function append_url(good_user_url){
        proxy_prefix = 'https://login.proxy.olivet.edu/login?url=';
        var finished_url = proxy_prefix + good_user_url;

        document.getElementById('with_prefix').value = finished_url;
        document.getElementById('with_prefix').select();
    }
</script>


<h1>Resource Link Creator </h1>

    <p>Use the following tool to create Persistent URLs for library database articles that can be accessed off-campus. See the <a id="pdf" href="/help/use-databases/doc/guide-to-linking.pdf"  target="_blank">Guide to Linking to Copyrighted Articles</a> for instructions about where to find PURLs.</p>

    <label for="no_prefix"><span class="titlt-font">1. Copy and paste your source URL (PURL) here:</span>
        <!--This is the url that does not have the proxy prefix added yet-->
        <textarea id='no_prefix' name='no_prefix' cols='60' rows='2'></textarea></label>

    <label><span class="title-font">2. Click the button:</span> <input type='submit' value='Create Link' onclick='return check_url();'/></h4></label>

    <label for="with_prefix"><span class="titlt-font">3. Copy &lt;Ctrl-C&gt; this URL and paste &lt;Ctrl-V&gt; the link into your syllabus or other document:</span>
        <!--This is the url that does have the proxy prefix added-->
        <textarea id='with_prefix' name='with_prefix' cols='60' rows='2'></textarea></label>

    <!--Contact management for problems-->
    <p>If you encounter any problems please contact <a href="/forms/email/index.php?id=021" target="_blank">Library Informatics</a>.</p>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
