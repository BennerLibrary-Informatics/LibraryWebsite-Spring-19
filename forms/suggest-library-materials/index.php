<?php
   $page_title = "Sugget Library Materials - Benner Library";
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

<script type="text/javascript">
        function showSemester(){
            $("#course_info").show();
            $('#checkout_period').show();
        }
        function hideSemester(){
            $('#reserve_semester').hide();
        }
        function showOtherField(){
            $('#other_field').show();
            document.getElementById("other_field").display = block;
        }
        function hideOtherField(){
            $('#other_field').hide();
            $('#other2_field').hide();
        }
        function validate_form() {
                var returnVal = true;

                document.getElementById('validation_errors').innerHTML = "The following errors occured while trying to process your form:<br />";
                returnVal = (validate("exist",
                                      new Array("title",
                                                "author",
                                                "prof",
                                                "email"),
                                      new Array("Title",
                                                "Author/Editor/Composer/Performer",
                                                "Professor's Name",
                                                "Your e-mail address")) && returnVal);
                if(document.getElementById('email').val != ''){
                    returnVal=(validate('email',new Array('email'),new Array('Your e-mail address')));
                }

                return returnVal;
        }
    </script>


<?php
    $deptOptions='';
    $departmentString = 'SELECT dept_code
                         FROM dept_table
                         ORDER BY dept_code';
    $departmentQuery = $db->query($departmentString) or die ($db->error);
    while($row = $departmentQuery->fetch_array()){
        $deptOptions .= '<option>'.$row['dept_code'].'</option>';
    }

?>

<!-- ===== content below here ========================================================== -->

<h1>Suggest Library Materials</h1>

    <div class="margin10 border-solid padding10-top">
        <form name="form" action="suggest-library-materials_do.php" method="post">
            <input type="hidden" name="subject" value="Library Materials Request"/>
            <input type="hidden" name="recipient" value="pgreenle@olivet.edu"/>
            <h2 align="center">Item Information</h2>

            <p>
            <strong>This form may be used to request materials in almost all formats (books, DVDs, etc.).  For periodical subscription requests, please use the <a href="/forms/periodical_request/index.php" target="_blank">Periodical Form</a>. <br />Do not use this form for interlibrary loan requests. (For assistance with Interlibrary Loan requests, see the <a href="/departments/interlibrary-loan/index.php" target="_blank">ILL web page</a>.)
            </p>

            <!-- <span id='validation_errors'></span> -->

            <p>
            Fields marked with an * are required.</strong>
            </p>

            <strong class="padding20-left">Title*</strong>
                <div class="form-wrapper">
                    <input style="width:90%" type="text" id="title" name="title" size="45"/>
                        <script type="text/javascript">
                            var title = new LiveValidation('title', {wait: 500})
                            title.add( Validate.Presence );
                        </script>
                </div>

            <strong class="padding20-left">Year</strong>
                <div class="form-wrapper">
                    <input style="width:90%" type="text" name="year" size="17" />
                </div>

            <strong class="padding20-left">Author/Editor/Composer/Performer *</strong>
                <div class="form-wrapper">
                    <input style="width:90%" type="text" id="author" name="author" size="45"/>
                        <script type="text/javascript">
                            var author = new LiveValidation('author', {wait: 500})
                            author.add( Validate.Presence );
                        </script>
                </div>

            <strong class="padding20-left">ISBN</strong>
                <div class="form-wrapper">
                    <input style="width:90%" type="text" id="isbn" name="isbn" size="17" />
                </div>


                <strong class="padding20-left">Publisher</strong>

                    <div class="form-wrapper">
                    <input style="width:90%" type="text" name="pub" size="45" />
                    </div>


                <strong class="padding20-left">Price</strong>
                <div class="form-wrapper">
                    <input style="width:90%" type="text" name="price" size="17" />
                </div>


                <strong class="padding20-left">Format*</strong>
                <div class="form-wrapper">
                    <select name="format_dropdown" style="width:90%">
                        <option onclick="hideOtherField();">Print Books</option>
                        <option onclick="hideOtherField();">CD</option>
                        <option onclick="hideOtherField();">DVD</option>
                        <option onclick="hideOtherField();">E-Book</option>
                        <option onclick="hideOtherField();">Musical Score</option>
                        <option onclick="showOtherField();">Other</option>
                    </select>
                </div>

                <strong class="padding20-left">Is this item needed for Reserve?</strong>
                    <div class="form-wrapper">
                        <label><input type="radio" value="1" name="reserve" onclick="showOtherField()"/> Yes</label>
                        <label><input type="radio" value="0" name="reserve" onclick="hideOtherField()" checked/> No</label>
                    </div>

                <span id="other_field" style="display:none">
                    <strong class="padding20-left">Please specify</strong>
                        <div class="form-wrapper">
                            <input style="width:90%" type="text" name="other" size="18" />
                        </div>
                </span>

                <!--
                <input style="width:90%" type="text" name="other" size="18" />
                -->


                <strong class="padding20-left">Source of Information</strong>
                    <div class="form-wrapper">
                        <input style="width:90%" type="text" name="src" size="45" />
                    </div>

                <strong class="padding20-left">Additional Information or Comments</strong>
                <div class="form-wrapper">
                <textarea name="text02" style="width:90%"></textarea>
                </div>

                <strong class="padding20-left">Is this a RUSH item?</strong>
                <div class="form-wrapper">
                    <label><input type="radio" value="1" name="rush_item" /> Yes</label>
                    <label><input type="radio" value="0" name="rush_item"  checked/> No</label>
                </div>


                <h2 align="center">Requester Information</h2>

                <strong class="padding20-left">Your Name*</strong>
                    <div class="form-wrapper">
                        <input style="width:90%" type="text" id="prof" name="prof" size="45"/>
                            <script type="text/javascript">
                                var prof = new LiveValidation('prof')
                                prof.add( Validate.Presence );
                            </script>
                    </div>


                <strong class="padding20-left">Department</strong>
                    <div class="form-wrapper">
                        <select id="dept" name="dept" style="width:90%">
                            <?php echo $deptOptions ?>
                        </select>
                    </div>

                <strong class="padding20-left">Your email address*</strong>
                    <div class="form-wrapper">
                        <input id="email" name="email" type="text" size="45" placeholder="example@me.com" style="width:90%">
                            <script type="text/javascript">
                                var email = new LiveValidation('email', {wait: 500});
                                email.add( Validate.Presence );
                                email.add( Validate.Email );
                            </script>
                    </div>

                <strong class="padding20-left">Retype Email*</strong>
                    <div class="form-wrapper">
                        <input id="retype_email" style="width:90%;" name="retype_email" type="text" size="45" placeholder="example@me.com" onpaste="return false;">
                            <script type="text/javascript">
                                var retype_email = new LiveValidation('retype_email', {wait: 500});
                                retype_email.add( Validate.Presence );
                                retype_email.add( Validate.Confirmation, { match: 'email' } );
                            </script>
                    </div>

                <strong class="padding20-left">Phone</strong>
                    <div class="form-wrapper">
                        <input style="width:90%" type="text" name="phone" size="17" />
                    </div>

                <p>
                    <strong>Before ordering materials for Benner Library, please check the Online Catalog <a href="http://vufind.carli.illinois.edu/vf-onu/Search/Advanced" target="_blank">BLISweb</a> to see whether the library already owns the item.</strong>
                </p>

                <p>
                    <strong>Do you want to be notified when this item is ready for use?</strong>
                </p>

                    <div class="form-wrapper">
                        <label><input type="radio" value="1" name="contact" checked/> Yes</label>
                        <label><input type="radio" value="0" name="contact" /> No</label>
                    </div>

              
<!--            <tr id="reserve_semester" style="display:none;">

                 What semester?
                    <input type="radio" value="fall <?php echo date('Y'); ?>" name="semester" /> Fall <?php echo date('Y'); ?>
                    <input type="radio" value="spring <?php echo (date('Y')+1); ?>" name="semester" /> Spring <?php echo (date('Y')+1); ?>
                    <input type="radio" value="fall <?php echo date('Y'); ?> and <?php echo (date('Y')+1); ?>" name="semester" /> Both

            -->

                <span id="course_info" style="display:none">
                <strong class="padding20-left">Course Title</strong>
                    <div class="form-wrapper">
                        <input style="width:90%" type="text" name="course_title"></input>
                    </div>

                <strong class="padding20-left">Course No</strong>
                    <div class="form-wrapper">
                        <input style="width:90%" type="text" name="course_no"></input>
                    </div>

                <strong class="padding20-left">Term</strong>
                    <div class="form-wrapper">
                        <input style="width:90%" type="text" name="course_term"></input>
                    </div>

                <strong class="padding20-left">Choose checkout period for reserve?</strong>
                    <div class="form-wrapper">
                        <label><input type="radio" value="0" name="checkout_period"/> 2 hour(in library only)</label>
                        <label><input type="radio" value="1" name="checkout_period"/> 2 hour(may leave library)</label>
                        <label><input type="radio" value="2" name="checkout_period" /> 2 day</label>
                        <label><input type="radio" value="3" name="checkout_period" /> 7 day</label>
                    </div>
                </span>

                <div class="padding20-left">
        			<div class="g-recaptcha" data-sitekey="6Lf77FEUAAAAAEfakCqBw9garEX081DsybGyIGx-"></div>
                </div>

                <div class="margin20-left margin20-bottom">
                    <input type="submit" name="Submit Form" onclick="return validate_form()" value="Submit Form" />
                    <input type="reset" name="Clear Fields" value="Clear Fields" />
                </div>


        </form>
    </div>



<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
