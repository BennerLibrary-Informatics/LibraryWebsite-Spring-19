<?php
    $page_title = "Faculty Periodical Request - Benner Library";
    $body_class = "";
    $body_id = "";
    $css = "";
    $js = "<script type=\"text/javascript\" src=\"/js/libraries/livevalidation.js\"></script>";
?>
<?php 
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/scripts/top.php";
    include_once($path);
?>

<!-- ===== content below here ========================================================== -->

<h1 class="no-margin-top">Faculty Periodical Request Form</h1>

<div class="margin10 border-solid padding10-top">
    <form name="periodical_request" action="periodical_request_do.php" method="post">

        <?php if(isset($_GET['done']))
            {
            $alert = "".$_REQUEST['title']." Submitted Successfully!";
            echo "<script type='text/javascript'>alert('$alert');</script>";
            }
        ?>
        
        <p>
            <strong>Fields marked with an * are required.</strong>
        </p>
        <br />

        <label for="periodical" style="margin-bottom:0px;">
            <strong>Periodical title *</strong>
        </label>
            <div class="set-wrapper">
            <div class="form-wrapper"> 
            <input id="periodical" type="text" name="periodical" size="45" style="width:90%"> <!-- Changed names -->
            <script>
                var periodical = new LiveValidation('periodical', {wait: 500});
                periodical.add( Validate.Presence );
            </script>
            </div>
            </div>

        <label for="format" style="margin-bottom:0px;">
            <strong>Preferred format</strong>
        </label>
            <div class="form-wrapper"> 
            <select id="format" name="format" style="width:90%">
                <option id='0'></option>
                <option id='1' value='E-Access'>Electronic Access</option>
                <option id='2' value='Print'>Print</option>
                <option id='3' value='Both'>Both</option>
            </select> 
            </div>
        

        <label for="cost" style="margin-bottom:0px;">
            <strong>Annual cost * </strong><br />
            <i style="padding-left:5px">Estimate if exact cost is not known</i>
        </label>
        <div class="set-wrapper">
            <div class="form-wrapper"> 
            <input id="cost" type="text" name="cost" size="45" style="width:90%">
                <script>
                    var cost = new LiveValidation('cost', {wait: 500});
                    cost.add( Validate.Presence );
                </script>
            </div>
        </div>


        <label for="issn" style="margin-bottom:0px;">
            <strong>ISSN</strong>
        </label>
            <div class="set-wrapper">
            <div class="form-wrapper">
            <input id="issn" name="issn" type="text" placeholder="####-####" style="width:90%">
            </div>
            </div>

        <label for="publisher" style="margin-bottom:0px;">
            <strong>Publisher</strong>
        </label>
            <div class="set-wrapper">
            <div class="form-wrapper">
            <input id="publisher" name="publisher" type="text" size="45" style="width:90%">
            </div>
            </div>

        <label for="course" style="margin:0px;padding:0px;">
            <div class="form-wrapper">
            <strong>Course names and course numbers this title will support</strong>
            <textarea id="course" name="course" type="text" rows=3 cols=60 style="width:90%"></textarea>
            </div>
        </label>

        <label>
            <strong>Have any new courses or programs been initiated in your department within the last 3 years which would benefit from this title?</strong>
        </label>
                <label for="newprogramsNo"><input type="radio" name="newprograms" id="newprogramsNo" value="No"checked/>
                    No
                </label>
                <label for="newprogramsYes"><input type="radio" name="newprograms" id="newprogramsYes" value="Yes"/>
                    Yes
                </label>

            <label for="programs" style="margin:0px;padding:0px">
                <strong><span class="padding20-left">If Yes, please explain:</span></strong>
                <div class="form-wrapper">
                <textarea id="programs" name="programs" type="text" rows=3 cols=60 style="width:90%"></textarea>
                </div>
            </label>

        <label for="features" style="margin:0px;padding:0px">
            <div class="margin20-left"><strong>Unique features or coverage in this periodical which make it a useful addition to the Benner Library collection:</strong></div>
            <div class="form-wrapper">
            <textarea id="features" name="features" type="text" rows=3 cols=60 style="width:90%"></textarea>
            </div>
        </label>

        <label>
            <strong>Is there a periodical title which the library could consider canceling, if necessary, in order to make room for this title?</strong>
        </label>
            <label for="cancelNo"><input type="radio" name="cancel" id="cancelNo" value="No"checked/>
                No
            </label>
            <label for="cancelYes"><input type="radio" name="cancel" id="cancelYes" value="Yes"/>
                Yes
            </label>
        <label for="reason" style="margin:0px;padding:0px">
            <strong class="padding20-left">If Yes, please give title and reason</strong>
            <div class="form-wrapper">
            <textarea id="reason" name="reason" type="text" rows=3 cols=60 style="width:90%"></textarea>
            </div>
        </label>

        <label for="other" style="margin:0px;padding:0px">
            <strong class="padding20-left">Other considerations not mentioned above for adding this periodical</strong>
            <div class="form-wrapper">
            <textarea id="other" name="other" type="text" rows=3 cols=60 style="width:90%"></textarea>
            </div>
        </label>

        <label><strong>Do you have a sample copy?</strong>
            <label for="sampleNo">
                <input type="radio" name="sample" id="sampleNo" value="No"checked/>
                No
            </label>
            <label for="sampleYes">
                <input type="radio" name="sample" id="sampleYes" value="Yes"/>
                Yes
            </label>
        <label>
            <strong><i>If Yes, please send a copy to Pam Greenlee, Box 6014.</i></strong>
        </label>
        </label>


        <label>
            <strong>The Department head has approved adding this title</strong>
        </label>
            <label for="approvedNo">
                <input type="radio" name="approved" id="approvedNo" value="No"checked/>
                No
            </label>
            <label for="approvedYes">
                <input type="radio" name="approved" id="approvedYes" value="Yes"/>
                Yes
            </label>

        <label for="facultyname" style="margin-bottom:0px;">
            <strong>Professor's Name *</strong>
        </label>
            <div class="set-wrapper">
            <div class="form-wrapper">
            <input id="facultyname" type="text" name="facultyname" size="45" style="width:90%">
                <script>
                    var facultyname = new LiveValidation('facultyname', {wait: 500});
                    facultyname.add( Validate.Presence );
                </script>
            </div>
            </div>

        <label for="email" style="margin-bottom:0px;">
            <strong>Professor's E-mail *</strong>
        </label>
            <div class="set-wrapper">
            <div class="form-wrapper">
            <input id="email" type="text" name="email" size="45" placeholder="example@olivet.edu" style="width:90%">
                <script>
                    var email = new LiveValidation('email', {wait: 500});
                    email.add( Validate.Presence );
                    email.add( Validate.Email );
                    // Make sure .olivet.edu is in the email address
                    email.add( Validate.Inclusion, {within: ['@olivet.edu'], partialMatch: true }); 
                        // TODO: Make unique livevalidation for olivet email
                </script>
            </div>
            </div>

        <label for="retype_email" style="margin-bottom:0px;">
            <strong>Retype Email *</strong>
        </label>
        <div class="set-wrapper">
            <div class="form-wrapper">                    
            <input id="retype_email" name="retype_email" type="text" size="45" style="width:90%" placeholder="example@olivet.edu" onpaste="return false;">
            <script type="text/javascript">
                var retype_email = new LiveValidation('retype_email', {wait: 500});
                retype_email.add( Validate.Presence );
                retype_email.add( Validate.Confirmation, { match: 'email' } );
            </script>
            </div>
        </div>

        <label for="phone" style="margin-bottom:0px;">
            <strong>Professor's Phone Number *</strong>
        </label>
            <div class="set-wrapper">
            <div class="form-wrapper">
            <input id="phone" type="text" name="phone" size="45" style="width:90%">
                <script>
                    var phone = new LiveValidation('phone', {wait: 500});
                    phone.add( Validate.Presence );
                </script>
            </div>
            </div>


        <label for="dept" style="margin:0px;padding:0px">
           <strong class="padding20-left">Department</strong>
            <div class="form-wrapper">
                    <select id="dept" name="dept" style="width:90%">
                    <option value="AAB">AAB</option>
                    <option value="BBA">BBA</option>  
                    <option value="BSN">BSN</option>
                    <option value="EDD">EDD</option>
                    <option value="Education Masters">Education Masters</option>
                    <option value="eMBA">eMBA</option>
                    <option value="FNP">FNP</option>
                    <option value="MBA">MBA</option>
                    <option value="MOL">MOL</option>                                                
                    <option value="MSN">MSN</option>
                    </select>
            </div>
        </label>

        <label>
            <strong>Should we contact you when the first issue is received (if print) or when internet access has been established (if online)?</strong>
                <label for="notifyNo">
                    <input type="radio" name="notify" id="notifyNo" value="No"checked/>
                    No
                </label>
                <label for="notifyYes">
                    <input type="radio" name="notify" id="notifyYes" value="Yes"/>
                    Yes
                </label>
        </label>
            <!--
        <label for="class"><span>Class Name:</span><input id="class" name="class" type="text"></label>
        <label for="message"><span>Message:</span><textarea id="message" name="message" rows="10" cols="80"></textarea></label>
     -->
        <input type="hidden" name="home" value="<?php echo (isset($_GET['home']) && $_GET['home']) ? "1" : "0"; ?>">
        <input type="hidden" name='refer' id='refer'>

        <div class="padding20-left">
        	<div class="g-recaptcha" data-sitekey="6Lf77FEUAAAAAEfakCqBw9garEX081DsybGyIGx-"></div>
        </div>
        
        <label>
            <input type="submit" name="send" value="Send">
            <input type="reset" name="Clear Fields" value="Clear All Fields">
        </label>
    </form>
</div>

<!-- ===== content above here ========================================================== -->                
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>