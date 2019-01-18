<?php
    $page_title = "Student Job Application - Benner Library";
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

<?php
    $divString = "";
    $complete = (isset($_REQUEST['complete']));
    if ($complete) {
        $edited = (isset($_GET['edited'])) ? "edited" : "received";
        switch ($_REQUEST['complete']) {
            case 0: $divString =
                '<div class="padding15">We are terribly sorry, but there has been an <b>E R R O R</b> in processing
                 your application.  The necessary e-mails reporting this problem have been sent to the correct persons to
                 handle this problem.  This problem will be reviewed, and hopefully fixed.  Sorry for the inconvenience.</div>';
                break;
            case 1: $divString =
                '<h1 align="center">Thank You!</h1><div class="padding15">Your application has been
                 '.$edited.'.  You will be contacted by the library if a department would like to schedule an interview.
                 A confirmation email containing a link to review and print your application has been sent to your inbox.
                 You may now close your browser or navigate to another page.</div>';
                break;
            case 2: $divString =
                '<div class="padding15">You have been successfully deleted from our system.</div><br />';
                break;
            case 3: $divString =
                '<div class="padding15">There has been a problem with deleting your application.  Please try again
                 in a few hours.</div><br />';
                break;
            case 4: $divString=
                '<div class ="padding15">You can not submit two applications. If you would like to edit your application
                 contact <a href="/forms/email/index.php?id=019&sid=1&home=1">Meda Long</a></div><br />';
                break;
        }
    }
    echo $divString;
    if (!$complete) { /*this { goes all the way to the end of the content of the page as if complete is not set would want to see the form to enter*/
?>


<h1>Student Job Application</h1>


<div class="split l60-r40 cf">
    <div class="left">
        <p>All form fields with an * are required.<br>
           All dates should be in YYYY-MM-DD format.<br>
           Applicant must be an <i>incoming freshman</i> or a <i>current</i> student. <br /> <br />
        </p>
    </div>
    <div class="right">
        <p>
            <!-- Edit Application -->
            If you wish to edit an existing application enter your email address here
        <input type="text" id='editEmail' name='editEmail' />
            <br/>
        </p>
        <div class="field-wrapper">
            <input type="submit" value="Submit" onClick="url()">
        </div>

    </div>
</div>

<!-- DO NOT PUT FORM AROUND THIS -->
<script type="text/javascript">

// redirect to send email for editing email

function url() {

    var inEmail = document.getElementById('editEmail').value; // get email inputted in text field

    // build URL
    var url1 = "/bin/jobapp/existing_app.php/?operation=check&emailCheck="
    var url = url1.concat(inEmail);

    window.location.replace(url); // redirect
}
</script>


<!-- @@loading of old app NeedsSomething work@@ -->

<div class="margin10 border-solid padding10-top">
<form class="float-label" method="post" name="jobapp" id="jobapp" action="/bin/jobapp/jobapp_do.php">

    <div class="field-wrapper">
        <label for="term">Applying for Term *</label>
        <select id="term" name="term" size="1" style="width: auto">
            <option value="" selected="selected">Term</option>
            <?php
            $term = $db->query("SELECT *
                                     FROM app_term");

            while ($result2 = $term->fetch_array())
                    echo '<option value="'.$result2['term_id'].'">'.$result2['name'].'</option>';
            ?>
        </select>
         <select id="year" name="year" style="width: auto">
            <option value="" selected="selected">Year</option>
            <?php
                $defaultNextYear = (date('m/d') > '11/01') ? 'selected="selected"' : '';
                echo '<option>',date('Y'),'</option>';
                echo '<option ',$defaultNextYear,'>',date('Y', strtotime(date('Y').'+1 year')),'</option>';
            ?>
        </select>
        <script type="text/javascript">
            var term = new LiveValidation('term');
            term.add( Validate.Presence, {failureMessage: 'Please select a term'} );
            var year = new LiveValidation('year');
            year.add( Validate.Presence, {failureMessage: 'Please select a year'} );
        </script>
    </div>


    <h4>Personal information</h4>

    <div class="set-wrapper">
        <div class="field-wrapper">
            <label for="first_name">First Name *</label>
            <input id="first_name" name="first_name" type="text" placeholder="First Name">
            <script type="text/javascript">
                var first_name = new LiveValidation('first_name');
                first_name.add( Validate.Presence );
            </script>
        </div>

        <div class="field-wrapper">
            <label for="last_name">Last Name *</label>
            <input id="last_name" name="last_name" type="text" placeholder="Last Name">
            <script type="text/javascript">
                var last_name = new LiveValidation('last_name');
                last_name.add( Validate.Presence );
            </script>
        </div>
    </div>

    <div class="set-wrapper">
        <div class="field-wrapper">
            <label for="birth_date">birth date (yyyy-mm-dd) *</label>
            <input id="birth_date" name="birth_date" type="text" placeholder="yyyy-mm-dd">
            <script type="text/javascript">
                var birth_date = new LiveValidation('birth_date', {wait: 700});
                birth_date.add( Validate.Presence );
                birth_date.add( Validate.Format, { pattern: /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/, failureMessage: "The date should be formatted as yyyy-mm-dd" } );
            </script>
        </div>

        <div class="field-wrapper">
            <label for="hours">Hours desired per week</label>
            <input id="hours" name="hours" type="text" value="">
        </div>
    </div>

    <br>

    <div class="field-wrapper">
        <label for="email">email *</label>
        <input id="email" name="email" type="text" placeholder="example@me.com">
        <script type="text/javascript">
            var email = new LiveValidation('email', {wait: 500});
            email.add( Validate.Presence );
            email.add( Validate.Email );
        </script>
    </div>

    <div class="field-wrapper">
        <label for="retype_email">retype email *</label>
        <input id="retype_email" name="retype_email" type="text" placeholder="example@me.com" onpaste="return false;">
        <script type="text/javascript">
            var retype_email = new LiveValidation('retype_email', {wait: 500});
            retype_email.add( Validate.Presence );
            retype_email.add( Validate.Confirmation, { match: 'email' } );
        </script>
    </div>

    <div class="set-wrapper">
        <div class="field-wrapper">
            <label for="cell_phone">cell Phone *</label>
            <input id="cell_phone" name="cell_phone" type="text" placeholder="(815) 555-5555">
            <script type="text/javascript">
                var cell_phone = new LiveValidation('cell_phone', {wait: 500});
                cell_phone.add( Validate.Presence );
            </script>
        </div>
        <div class="field-wrapper">
            <label for="home_phone">home Phone *</label>
            <input id="home_phone" name="home_phone" type="text" placeholder="(815) 555-5555">
            <script type="text/javascript">
                var home_phone = new LiveValidation('home_phone', {wait: 500});
                home_phone.add( Validate.Presence );
            </script>
        </div>
    </div>

    <br>

    <div class="field-wrapper">
        <label for="home_address">Home Address *</label>
        <input id="home_address" name="home_address" type="text" placeholder="Home Address">
        <script type="text/javascript">
            var home_address = new LiveValidation('home_address', {wait: 500});
            home_address.add( Validate.Presence );
        </script>
    </div>

    <div class="set-wrapper">
        <div class="field-wrapper">
            <label for="city">City *</label>
            <input id="city" name="city" type="text" placeholder="City">
            <script type="text/javascript">
                var city = new LiveValidation('city', {wait: 500});
                city.add( Validate.Presence );
            </script>
        </div>
        <div class="field-wrapper">
            <label for="city">state *</label>
            <input id="state" name="state" type="text" placeholder="State">
            <script type="text/javascript">
                var state = new LiveValidation('state', {wait: 500});
                state.add( Validate.Presence );
            </script>
        </div>
        <div class="field-wrapper">
            <label for="zip">zip *</label>
            <input id="zip" name="zip" type="text" placeholder="Zip">
            <script type="text/javascript">
                var zip = new LiveValidation('zip', {wait: 500});
                zip.add( Validate.Presence );
            </script>
        </div>
    </div>

    <br>

    <div class="field-wrapper">
        <label for="box_num">ONU Box Number</label>
        <input id="box_num" name="box_num" type="text" placeholder="ONU Box Number">

    </div>

    <div class="field-wrapper">
        <label for="dorm_room">Dorm/Room Number</label>
        <input id="dorm_room" name="dorm_room" type="text" placeholder="Dorm/Room Number">

    </div>

    <div class="field-wrapper">
        <label for="olivet_phone">ONU Phone (extension)</label>
        <input id="olivet_phone" name="olivet_phone" type="text" placeholder="Extension">

    </div>

    <br>

    <div class="set-wrapper">
        <div class="field-wrapper">
            <label for="hs_GPA">High School GPA *</label>
            <input id="hs_GPA" name="hs_GPA" type="text" placeholder="High School GPA">
            <script type="text/javascript">
                var hs_GPA = new LiveValidation('hs_GPA', {wait: 500});
                hs_GPA.add( Validate.Presence );
            </script>
        </div>
         <div class="field-wrapper">
            <label for="GPA_scale">Scale of HS GPA *</label>
            <input id="GPA_scale" name="GPA_scale" type="text" placeholder="Scale of HS GPA">
            <script type="text/javascript">
                var GPA_scale = new LiveValidation('GPA_scale', {wait: 500});
                GPA_scale.add( Validate.Presence );
            </script>
        </div>
    </div>

    <br>

    <div class="field-wrapper">
        <label for="col_GPA">College GPA</label>
        <input id="col_GPA" name="col_GPA" type="text" placeholder="College GPA">

    </div>

    <div class="field-wrapper">
        <label for="class">Current Class Year *</label>
        <select id="class" name="class">
            <option value="">Select your Class Year</option>
            <?php
                $classQuery = $db->query("SELECT *
                                           FROM class
                                           ORDER BY class_id");

                while ($classResults = $classQuery->fetch_array())
                    echo '<option value="'.$classResults['class_id'].'">'.$classResults['class_name'].'</option>';
            ?>
        </select>
        <script type="text/javascript">
            var classin = new LiveValidation('class', {wait: 500});
            classin.add( Validate.Presence );
        </script>
    </div>

    <div class="field-wrapper">
        <label for="grad_month">Expected Graduation</label>
        <select id="grad_month" name="grad_month" style="width:auto">
            <?php
                for ($i = 0; $i < 12; $i++) {
                    echo '<option value="'.date("m", strtotime( "+$i month" , strtotime ( "2010-01-01"))).'"';
                    echo ($i == 4) ? " selected=\"true\"" : "";
                    echo '>'.date("F", strtotime( "+$i month" , strtotime ( "2010-01-01"))).'</option>';
                }
            ?>
        </select>
        <select id="grad_year" name="grad_year" style="width:auto">
            <option value="">Select Year</option>
            <?php
                for ($i = 0; $i < 5; $i++)
                    echo '<option value="'.date("Y", strtotime ( "+$i year" , strtotime ( date("Y-m-d") ) )).'"
                >'.date("Y", strtotime ( "+$i year" , strtotime ( date("Y-m-d") ) )).'</option>';
            ?>
        </select>
        <script type="text/javascript">
            var grad_year = new LiveValidation('grad_year', {wait: 500});
            grad_year.add( Validate.Presence );
        </script>
    </div>

    <div class="set-wrapper">
        <div class="field-wrapper">
            <label for="major">Major *</label>
            <input id="major" name="major" type="text" placeholder="Major">
            <script type="text/javascript">
                var major = new LiveValidation('major', {wait: 500});
                major.add( Validate.Presence );
            </script>
        </div>

        <div class="field-wrapper">
            <label for="minor">Minor</label>
            <input id="minor" name="minor" type="text" placeholder="minor">

        </div>
    </div>

    <div class="field-wrapper">
        <label for="plans">Post-Olivet Plans, if known:</label>
        <textarea id="plans" name="plans"></textarea>
    </div>

    <br>

    <div class="field-wrapper">
        <label>Work Study Award</label>
        <div class="radio-wrapper">
            <label for="workyes"><input type="radio" id="workyes" name="work_study" value="1" >Yes</label>
            <label for="workno"><input type="radio" id="workno" name="work_study" value="0" CHECKED>No</label>
        </div>
    </div>

    <div class="field-wrapper">
        <label for="work_study_award">Work Study Amount</label>
        <input id="work_study_award" name="work_study_award" type="text" placeholder="$0.00">
    </div>

    <br>

    <div class="field-wrapper">
        <p>Is your home address within driving distance to the library?</p>
        <div class="radio-wrapper">
            <label for="commuteryes"><input type="radio" id="commuteryes" name="commuter" value="1">Yes</label>
            <label for="commuterno"><input type="radio" id="commuterno" name="commuter" value="0" CHECKED>No</label>
        </div>
    </div>

    <div class="field-wrapper">
        <p>Are you willing to work on university breaks?</p>
        <div class="radio-wrapper">
            <label for="universityyes"><input type="radio" id="universityyes" name="willing_to_work_university_breaks" value="1">Yes</label>
            <label for="universityno"><input type="radio" id="universityno" name="willing_to_work_university_breaks" value="0" CHECKED>No</label>
        </div>
    </div>

    <div class="field-wrapper">
        <p>Are you willing to work summer break?</p>
        <div class="radio-wrapper">
            <label for="summeryes"><input type="radio" id="summeryes" name="willing_to_work_summer_breaks" value="1">Yes</label>
            <label for="summerno"><input type="radio" id="summerno" name="willing_to_work_summer_breaks" value="0" CHECKED>No</label>
        </div>
    </div>

    <h4>References</h4>
    <p>At least one should be a work reference, if you have prior work experience.</p>

    <div class="set-wrapper">
        <div class="field-wrapper">
            <label for="RefName1">Name</label>
            <input id="RefName1" name="RefName1" type="text" placeholder="First Last">

        </div>

        <div class="field-wrapper">
            <label for="RefOcc1">Occupation</label>
            <input id="RefOcc1" name="RefOcc1" type="text" placeholder="Occupation">

        </div>

        <div class="field-wrapper">
            <label for="RefNum1">Phone Number</label>
            <input id="RefNum1" name="RefNum1" type="text" placeholder="(815) 555-5555">

        </div>
    </div>

    <div class="set-wrapper">
        <div class="field-wrapper">
            <label for="RefEmail1">Email address</label>
            <input id="RefEmail1" name="RefEmail1" type="text" placeholder="example@me.com">

        </div>

        <div class="field-wrapper">
            <label for="RefCityState1">City, State</label>
            <input id="RefCityState1" name="RefCityState1" type="text" placeholder="City, State">

        </div>

        <div class="field-wrapper">
            <label for="RefYears1">Years known</label>
            <input id="RefYears1" name="RefYears1" type="text" placeholder="Years known">

        </div>
    </div>

    <div class="field-wrapper">
        <label for="RefYears1">Work Reference?</label>
        <input type="checkbox" name="RefWork1">
    </div>

    <br>

    <div class="set-wrapper">
        <div class="field-wrapper">
            <label for="RefName2">Name</label>
            <input id="RefName2" name="RefName2" type="text" placeholder="First Last">

        </div>

        <div class="field-wrapper">
            <label for="RefOcc2">Occupation</label>
            <input id="RefOcc2" name="RefOcc2" type="text" placeholder="Occupation">

        </div>

        <div class="field-wrapper">
            <label for="RefNum2">Phone Number</label>
            <input id="RefNum2" name="RefNum2" type="text" placeholder="(815) 555-5555">

        </div>
    </div>

    <div class="set-wrapper">
        <div class="field-wrapper">
            <label for="RefEmail2">Email address</label>
            <input id="RefEmail2" name="RefEmail2" type="text" placeholder="example@me.com">

        </div>

        <div class="field-wrapper">
            <label for="RefCityState2">City, State</label>
            <input id="RefCityState2" name="RefCityState2" type="text" placeholder="City, State">

        </div>

        <div class="field-wrapper">
            <label for="RefYears2">Years known</label>
            <input id="RefYears2" name="RefYears2" type="text" placeholder="Years known">

        </div>
    </div>

    <div class="field-wrapper">
        <label for="RefYears2">Work Reference?</label>
        <input type="checkbox" name="RefWork2">
    </div>

    <br>

    <div class="set-wrapper">
        <div class="field-wrapper">
            <label for="RefName3">Name</label>
            <input id="RefName3" name="RefName3" type="text" placeholder="First Last">

        </div>

        <div class="field-wrapper">
            <label for="RefOcc3">Occupation</label>
            <input id="RefOcc3" name="RefOcc3" type="text" placeholder="Occupation">

        </div>

        <div class="field-wrapper">
            <label for="RefNum3">Phone Number</label>
            <input id="RefNum3" name="RefNum3" type="text" placeholder="(815) 555-5555">

        </div>
    </div>

    <div class="set-wrapper">
        <div class="field-wrapper">
            <label for="RefEmail3">Email address</label>
            <input id="RefEmail3" name="RefEmail3" type="text" placeholder="example@me.com">

        </div>

        <div class="field-wrapper">
            <label for="RefCityState3">City, State</label>
            <input id="RefCityState3" name="RefCityState3" type="text" placeholder="City, State">

        </div>

        <div class="field-wrapper">
            <label for="RefYears3">Years known</label>
            <input id="RefYears3" name="RefYears3" type="text" placeholder="Years known">

        </div>
    </div>

    <div class="field-wrapper">
        <label for="RefYears3">Work Reference?</label>
        <input type="checkbox" name="RefWork3">
    </div>

    <div class="field-wrapper">
        <p>Does Benner Library have permission to contact your references?</p>
        <div class="radio-wrapper">
            <label for="contactyes"><input type="radio" id="contactyes" name="contact" value="1" CHECKED>Yes</label>
            <label for="contactno"><input type="radio" id="contactno" name="contact" value="0">No</label>
        </div>
    </div>

    <h4>Work Experience and Related Skills</h4>
    <h5>Library Experience</h5>

    <div class="field-wrapper">
        <p>List the time, place, and duties in the space below</p>
        <textarea id="LibraryExperience" name="LibraryExperience"></textarea>

    </div>

    <div class="field-wrapper">
        <p>Other Work Experience</p>
        <textarea id="OtherExperience" name="OtherExperience"></textarea>

    </div>

    <div class="field-wrapper">
        <label for="SkillsList">Skills</label>
        <p>Hold the CTRL key and select all that apply</p>
        <?php
        $pref = $db->query('SELECT *
                                 FROM app_preference');
        $numPrefs = $pref->num_rows;
        ?>
        <select multiple name="SkillsList[]" id="SkillsList" size="10" style="width: auto;">
            <?php
                $getSkills = 'SELECT *
                              FROM app_skill
                              ORDER BY skill_type_id, name';
                $skillInfo = $db->query($getSkills);

                $getSkillType = 'SELECT *
                                 FROM app_skill_type
                                 ORDER BY skill_type_id';
                $typeInfo = $db->query($getSkillType);

                $typeResult = $typeInfo->fetch_array();
                echo '<optgroup label="',$typeResult['type_name'],'">';
                while ($skillResult = $skillInfo->fetch_array()) {
                    if ($skillResult['skill_type_id'] != $typeResult['skill_type_id']) {
                        echo '</optgroup>';
                        $typeResult = $typeInfo->fetch_array();
                        echo '<optgroup label="',$typeResult['type_name'],'">';
                    }
                    echo '<option value="',$skillResult['skill_id'],'">',$skillResult['name'],'</option>';
                }
            ?>
        </select>
    </div>

    <div class="field-wrapper">
        <p>Please explain any "Other..." selections from the skills list.</p>
        <textarea id="OtherSkills" name="OtherSkills"></textarea>

    </div>

    <div class="field-wrapper">
        <label for="WorkPreference">Working Preference</label>
        <p>You prefer working (Hold the CTRL key and select all that apply)</p>
        <?php
        	$pref = $db->query('SELECT *
                                 FROM app_preference');
        	$numPrefs = $pref->num_rows;
        ?>
        <select multiple name="WorkPreference[]" id="WorkPreference" size="<?php echo $numPrefs; ?>">
            <?php
            while ($result = $pref->fetch_array())
                    echo '<option value="'.$result['preference_id'].'">'.$result['name'].'</option>';
            ?>
        </select>
    </div>

    <h5>Desired Department(s)</h5>
    <p>If a checkbox is disabled the department is not currently accepting applications.</p>

    <div class="field-wrapper">
        <div class="radio-wrapper">
            <?php
                $getDepts = "SELECT dept_name,
                             jobapp_active,
                             dept_id,
                             dept_desc
                             FROM department
                             WHERE jobapp_include
                             ORDER BY dept_name";
                $deptQuery = $db->query($getDepts);
                while ($deptResult = $deptQuery->fetch_array()) {
                    if ($deptResult['dept_name'] == "Circulation") {
                        $extraJavascript = "if (this.checked) alert(\"If you are applying for this department \" +
                                            \"you are required to print out an additional pdf file and return \" +
                                            \"the completed form to the Circulation desk (link provided below).\");";
                    } else if ($deptResult['dept_name'] == "Reference") {
                        $extraJavascript = "if (this.checked) alert(\"If you are applying for this department \" +
                                            \"you are required to print out an additional pdf file and return \" +
                                            \"the completed form to the Reference desk (link provided below).\");";
                    } else if ($deptResult['dept_name'] == "Interlibrary Loan") {
                        $extraJavascript = "if (this.checked) alert(\"If you are applying for this department \" +
                                            \"you are required to print out an additional pdf file and return \" +
                                            \"the completed form to the Interlibrary Loan Department (link provided below).\");";
                    } else {
                        $extraJavascript = "";
                    }
                    echo "<label>
                              <input type='checkbox' name='deptnum$deptResult[dept_id]'
                                  onclick='$extraJavascript' id='$deptResult[dept_id]'";
                    echo (!$deptResult['jobapp_active']) ? " disabled" : "";
                    echo ">".$deptResult['dept_name']."";

                    if(!empty($deptResult['dept_desc']))
                    {
                        echo "<a href=\"".$deptResult['dept_desc']."\" target=\"_blank\"><i><img src=\"/img/css/info.png\"></i></a></label><br>";
                    } else {
                        echo "</i></a></label><br>";
                    }
                }
            ?>
        </div>
    </div>

    <p>If you wish to apply for the:<br/>
        <ul style="list-style-type: none">
            <li> <b>Circulation</b> department you are required to complete and return the following pdf to the Circulation desk: <a href="/bin/jobapp/docs/Circulation Application Addendum.pdf" target="_blank"><img alt="Circulation Application Addendum" src="/img/get-pdf.png" title="Circulation Application Addendum" /></a></li>
            <li> <b>Interlibrary Loan</b> department you are required to complete and return the following pdf to the ILL department: <a href="/bin/jobapp/docs/ILL Application Addendum.pdf" target="_blank"><img alt="ILL Application Addendum" src="/img/get-pdf.png" title="ILL Application Addendum" /></a></li>
        </ul>
    </p>

    <div class="field-wrapper">
        <p>Why are you interested in working at the library? *</p>
        <textarea id="Reason" name="Reason"></textarea>
        <script type="text/javascript">
            var Reason = new LiveValidation('Reason', {wait: 500});
            Reason.add( Validate.Presence );
        </script>
    </div>

    <div class="field-wrapper">
        <p>List current extra-curricular activities and other obligations</p>
        <textarea id="ExtraActivites" name="ExtraActivites"></textarea>
    </div>

    <div class="field-wrapper">
        <label for="PreferredHours">Preferred working hours?</label>
        <select id="PreferredHours" name="PreferredHours" >
            <option value="Early Morning" selected>Early Morning</option>
            <option value="Late Night">Late Night</option>
            <option value="Doesn't matter/will work as needed">Doesn't matter/will work as needed</option>
        </select>
    </div>

    <div class="field-wrapper">
        <label for="AdditionalInfo">Additional Information</label>
        <p>If you have pertinent skills or accomplishments that may be helpful in reviewing your application please list them here.</p>
        <textarea id="AdditionalInfo" name="AdditionalInfo"></textarea>
    </div>

    <h4>Class Schedule:</h4>
    <p>Please include your class schedule for the semester you are applying for (if known).</p>

    <input type="hidden" name="numclass" value="9">
    <?php
        $numTimes     = 9;
        $classCounter = 1;
        $timeCounter  = 1;

        $outString = '';
        while ($numTimes-- > 0)
            $outString .=
                '<div class="set-wrapper">
                    <div class="field-wrapper">
                        <label for="classname'.$classCounter.'">Course</label>
                        <input name="classname'.$classCounter.'" id="class'.$classCounter.'" type="text">
                    </div>
                    <div class="field-wrapper">
                        <label for="classtime'.$classCounter.'">Start Time</label>
                        <input name="classtime'.$classCounter.'" id="time'.$timeCounter++.'" type="text">
                    </div>
                    <div class="field-wrapper">
                        <label for="classend'.$classCounter.'">End Time</label>
                        <input name="classend'.$classCounter.'" id="time'.$timeCounter++.'" type="text">
                    </div>
                </div>
                <div class="field-wrapper">
                    <label>Day(s) of Week</label>
                    <div class="radio-wrapper">
                        <label for="m'.$classCounter.'">M<input id="m'.$classCounter.'" type="checkbox" name="days'.$classCounter.'[]" value="M"></label>
                        <label for="t'.$classCounter.'">T<input id="t'.$classCounter.'" type="checkbox" name="days'.$classCounter.'[]" value="T"></label>
                        <label for="w'.$classCounter.'">W<input id="w'.$classCounter.'" type="checkbox" name="days'.$classCounter.'[]" value="W"></label>
                        <label for="r'.$classCounter.'">R<input id="r'.$classCounter.'" type="checkbox" name="days'.$classCounter.'[]" value="R"></label>
                        <label for="f'.$classCounter.'">F<input id="f'.$classCounter.'" type="checkbox" name="days'.$classCounter++.'[]" value="F"></label>
                    </div>
                </div>
                <br>';

        echo $outString;
    ?>

    <div class="field-wrapper">
        <p>Are you willing to come in for an interview over summer break?</p>
        <div class="radio-wrapper">
            <label for="interviewyes"><input type="radio" id="interviewyes" name="Interview" value="1">Yes</label>
            <label for="interviewno"><input type="radio" id="interviewno" name="Interview" value="0" CHECKED>No</label>
        </div>
    </div>

    <div class="field-wrapper">
        <p>Have you ever had a previous interview for, or been employed at, Benner Library?</p>
        <div class="radio-wrapper">
            <label for="prevyes"><input type="radio" id="prevyes" name="Prev_Interview" value="1" onClick="show_dept_interview(1)">Yes</label>
            <label for="prevno"><input type="radio" id="prevno" name="Prev_Interview" value="0" onClick="show_dept_interview(0)" CHECKED>No</label>
        </div>
    </div>

    <div class="field-wrapper">
        <p for="Dept_Interview">If yes, for which department?</p>
        <!-- <input id="Dept_Interview" name="Dept_Interview" type="text" placeholder="Dept"> -->
        <select id="Dept_Interview">
            <option value=""  selected disabled>Select One...</option>
            <?php

            $dept = $db->query("SELECT *
                                     FROM department
                                     WHERE enabled = 1");

            while ($dept_results = $dept->fetch_array())
                    echo '<option value="'.$dept_results['dept_id'].'">'.$dept_results['dept_name'].'</option>';

            ?>


        </select>
    </div>

    <p>By submitting this application, you certify that all the information included on the application form is accurate.</p>

    <div class="padding20-left">
        <div class="g-recaptcha" data-sitekey="6Lf77FEUAAAAAEfakCqBw9garEX081DsybGyIGx-"></div>
    </div>

    <div class="field-wrapper">
        <input type="submit" value="Submit">
    </div>
</form>
</div>


<script>
    $('#jobapp').on('
        ', function(event){
        if (document.jobapp.classname9.value != "")
                document.jobapp.numclass.value = '9';
            else if (document.jobapp.classname8.value != "")
                document.jobapp.numclass.value = '8';
            else if (document.jobapp.classname7.value != "")
                document.jobapp.numclass.value = '7';
            else if (document.jobapp.classname6.value != "")
                document.jobapp.numclass.value = '6';
            else if (document.jobapp.classname5.value != "")
                document.jobapp.numclass.value = '5';
            else if (document.jobapp.classname4.value != "")
                document.jobapp.numclass.value = '4';
            else if (document.jobapp.classname3.value != "")
                document.jobapp.numclass.value = '3';
            else if (document.jobapp.classname2.value != "")
                document.jobapp.numclass.value = '2';
            else if (document.jobapp.classname1.value != "")
                document.jobapp.numclass.value = '1';
            else
                document.jobapp.numclass.value = '0';
    });
</script>

<?php } /*this ends the if complete parm is set for the form*/?>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
