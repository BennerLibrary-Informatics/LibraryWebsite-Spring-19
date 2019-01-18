<?php
   $page_title = "Book Display Widget Request - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = '<link rel="stylesheet" type="text/css" href="css/style.css" />
            <link rel="stylesheet" type="text/css" href="jquery/css/smoothness/jquery-ui.min.css">
            <link rel="stylesheet" type="text/css" href="css/timepicker.css">
           ';
    $js = '<script src="jquery/jquery-2.0.3.min.js"></script>
           <script src="jquery/js/jquery-ui-1.10.3.custom.min.js"></script>
           <script src="jquery/jquery-ui-timepicker-addon.js"></script>
           <script type=\'text/javascript\' src=\'/js/libraries/livevalidation.js\'></script>
          ';  
?>

<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/top.php";
   include_once($path);
?>
<!-- ===== content below here ========================================================== -->
<!-- <script type="text/ " src="http://ltfl.librarything.com/forlibraries/widget.js?id=2091-5736230"></script>
<script src="http://ltfl.librarything.com/forlibraries/widget.js?id=2091-5736230" type="text/javascript"></script>
<noscript>This page contains enriched content visible when JavaScript is enabled or by clicking <a href="http://ltfl.librarything.com/forlibraries/noscript.php?id=2091-5736230&accessibility=1">here</a>.</noscript>
 -->
<h1>Book Display Widget Request</h1>

<div class="margin10 border-solid padding10-top">
    <form action="/forms/book-display-widget/bdw_do.php"  name="bdwrequest"  method="post">
        <h3 style="margin-top:0">Requestor Information</h3>
            <strong class="padding20-left">First Name*</strong>
                <div class="form-wrapper">
                    <input type="text" name="first_name" id="first_name" style="width:90%" />
                        <script type="text/javascript">
                            var first_name = new LiveValidation('first_name', {wait: 500})
                            first_name.add( Validate.Presence );
                        </script>
                </div>

            <strong class="padding20-left">Last Name*</strong>
                <div class="form-wrapper">
                    <input  type="text" name="last_name" id="last_name" style="width:90%" />
                        <script type="text/javascript">
                            var last_name = new LiveValidation('last_name', {wait: 500})
                            last_name.add( Validate.Presence );
                        </script>
                </div>

            <strong class="padding20-left">ONU E-mail Address*</strong>
                <div class="form-wrapper">
                    <input type="text" name="email" id="email" style="width:90%" />
                        <script type="text/javascript">
                            var email = new LiveValidation('email', {wait: 500})
                            email.add( Validate.Presence );
                        </script>
                </div>

            <strong class="padding20-left">Department Representing</strong>
                <div class="form-wrapper">
                    <input type="text" name="department" style="width:90%" />
                </div>

            <strong class="padding20-left">Purpose of BDW</strong>
                <div class="form-wrapper">
                    <input  type="text" name="Purpose" style="width:90%" />
                </div>

            <strong class="padding20-left">Date Needed*</strong>
                <div class="form-wrapper">
                    <input type="text" id="date_needed" name="date_needed" placeholder="mm/dd/yyyy" style="width:90%" />
                        <script type="text/javascript">
                            var date_needed = new LiveValidation('date_needed', {wait: 500})
                            date_needed.add( Validate.Presence );
                            date_needed.add( Validate.Format, { pattern: /(0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.](20)\d\d/, failureMessage: "The date should be formatted as mm-dd-yyyy" } );
                        </script>
                </div>

            <strong class="padding20-left">URL location of BDW</strong>

            <div class="form-wrapper">
            <textarea name="URL"  style="width:90%"></textarea>
            </div>

            <p>
                <strong>Will you be providing your own list of ISBN? If so, please paste them below:</strong>
            </p>

            <div class="form-wrapper">
            <textarea name="ISBN"  style="width:90%"></textarea>
            </div>
            
            <strong class="padding20-left">Comments or special considerations</strong>
            <br />
            <div class="form-wrapper">
            <textarea name="comments"  style="width:90%"></textarea>
            </div>

            <div class="padding20-left padding20-bottom">
                <input type="submit"  id="submit" name="submit" value="Submit"  onclick="return checkForm()" />
                <input type="reset" value="Reset Form" />
            </div>
    </form>
</div>

<script language="javascript">
    function checkForm() {
        if (document.bdwrequest.first_name.value == "") {
            alert("Please provide your first name.");
            document.bdwrequest.first_name.focus();
            return false;
        } else if (document.bdwrequest.last_name.value == "") {
            alert("Please provide your last name.");
            document.bdwrequest.last_name.focus();
            return false;
        } else if (!olivetecheck(document.bdwrequest.email.value)) {
            alert("Please provide a valid Olivet E-mail Address");
            document.bdwrequest.email.focus();
            return false;
        } else if (document.bdwrequest.date_needed.value == "") {
            alert("Please specify the date needed.");
            document.bdwrequest.date_needed.focus();
            return false;
        }
    }
 
// (http://www.smartwebby.com/dhtml/)
    function echeck(str) {
        var at="@";
        var dot=".";
        var lat=str.indexOf(at);
        var lstr=str.length;
        var ldot=str.indexOf(dot);

        if (str.indexOf(at)==-1) 
            return false;

        if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr)
            return false;

        if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr)
            return false;

        if (str.indexOf(at,(lat+1))!=-1)
            return false;

        if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot)
            return false;

        if (str.indexOf(dot,(lat+2))==-1)
            return false;

        if (str.indexOf(" ")!=-1)
            return false;

        return true;
   }

    function olivetecheck(str) {
        var splitStr = str.split("@");
        if(splitStr.length != 2 || splitStr[1] != "olivet.edu")
            return false;

        return true;
    }
   
</script>

<script type="text/javascript">
    $('#date_needed').datepicker({
        minDate: 0,
        maxDate: 365
    });
</script>

<script type="text/javascript">
    $('#date0').datepicker({
        minDate: 0,
        maxDate: 365
    });
</script>

<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>