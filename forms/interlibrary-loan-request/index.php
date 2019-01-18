<?php
    $page_title = "ILL Request - Benner Library";
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

<h1>Interlibrary Loan Request</h1>
    <p align="center">
        Please enter the information below in order to send an Interlibrary Loan request to your library's Interlibrary Loan Department.
    </p>

    <div class="margin10 border-solid padding10-top">
        <form name="illrequest" action="ill-request-do.php" method="post">
            <h3 style="margin-top:0">Personal Information</h3>
                <strong class="padding20-left">First Name*</strong>
                <div class="set-wrapper">
                    <div class="form-wrapper">
                    <input style="width:90%" type="text" name="first_name" id="first_name" />
                        <script type="text/javascript">
                            var first_name = new LiveValidation('first_name', {wait: 500});
                            first_name.add( Validate.Presence );
                        </script>
                    </div>
                </div>

                <strong class="padding20-left">Last Name*</strong>
                <div class="set-wrapper">
                    <div class="form-wrapper">
                    <input style="width:90%" type="text" name="last_name" id="last_name" />
                    <script type="text/javascript">
                        var last_name = new LiveValidation('last_name', {wait: 500});
                        last_name.add( Validate.Presence );
                    </script>
                    </div>
                </div>
                
                <strong class="padding20-left">ONU E-mail Address*</strong>
                <div class="set-wrapper">
                    <div class="form-wrapper">
                    <input style="width:90%" type="text" name="email" id="email" />
                    <script type="text/javascript">
                        var email = new LiveValidation('email', {wait: 500});
                        email.add( Validate.Presence );
                        email.add( Validate.Email );
                        // Make sure .olivet.edu is in the email address
                        email.add( Validate.Inclusion, {within: ['@olivet.edu'], partialMatch: true }); 
                            // TODO: Make unique livevalidation for olivet email
                    </script>
                    </div>
                </div>
                
                <strong class="padding20-left">Department</strong>
                <div class="set-wrapper">
                    <div class="form-wrapper">
                    <input style="width:90%" type="text" name="department" />
                    </div>
                </div>
                    
                <strong class="padding20-left">Status*</strong>
                <div class="form-wrapper">
                <select style="width:90%" name="my_status" id="my_status">
                    <option value="">Choose One...</option>
                    <option value="Undergraduate">Undergraduate</option>
                    <option value="Graduate">Graduate</option>
                    <option value="Faculty">Faculty</option>
                    <option value="Staff">Staff</option>
                    </select>

                    <script type="text/javascript">
                        var my_status = new LiveValidation('my_status', {wait: 500});
                        my_status.add( Validate.Presence );
                    </script>
                </div>

                <strong class="padding20-left">Address</strong>
                <br />
                <div class="form-wrapper">
                <textarea name="address" style="width:90%;"></textarea>
                </div>
                
                <strong class="padding20-left">Phone</strong>

                <div class="set-wrapper">
                    <div class="form-wrapper">
                    <input style="width:90%" type="text" name="phone" />
                    </div>
                </div>

                <strong class="padding20-left">Date Needed</strong>
                <div class="set-wrapper">
                <div class="form-wrapper">
                    <input style="width:90%" type="text" name="date_needed" id="date_needed">
                    <script type="text/javascript">
                    //    var date_needed = new LiveValidation('date_needed', {wait: 500});
                    //    date_needed.add( Validate.Presence );
                    //    date_needed.add( Validate.Format, { pattern: /(0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.](20)\d\d/, failureMessage: "The date should be formatted as mm-dd-yyyy" } );
                    </script>
                </div>
                </div>

                <!-- 
                    *
                    <strong class="padding20-left">Date Needed</strong>
                    
                        <input style="width:15em" type="text" name="date_needed"
                            value="<?php
                                $future = mktime(0,0,0,date("m"),date("d")+21,date("Y"));
                                echo date("m/d/Y", $future);
                            ?>"
                        />
                        <input type='button' value='select' onclick="displayDatePicker('date_needed', false, 'mdy', '/');">
                    
                 -->
                
                <strong class="padding20-left">Comments</strong>
                <br />
                <div class="form-wrapper">
                <textarea name="comments" style="width:90%;"></textarea>
                </div>

                <strong class="padding20-left">Database Used*</strong>
                <div class="set-wrapper">
                    <div class="form-wrapper">
                    <input name="database" type='text' style="width:90%" id="database" value="<?php
                    //Check to see if the datebase has been passed to the form
                    if (isset($_REQUEST['dbfullname'])){
                            echo $_REQUEST['dbfullname'];
                        }
                        ?>"
                    />
                    <script type="text/javascript">
                        var database = new LiveValidation('database', {wait: 500});
                        database.add( Validate.Presence );
                    </script>
                    </div>
                </div>

                <strong class="padding20-left">Most articles are available through Benner resources. If additional payment is necessary:</strong>
                <br />
                <input class="margin20-left" type="radio" name="costOpt" value="Go ahead and purchase (no charge to me)" /> Go ahead and purchase (no charge to me)
                <br />
                <input class="margin20-left" type="radio" name="costOpt" value="Email me first" /> Email me first
                <br />
                <input class="margin20-left" type="radio" name="costOpt" value="Recommend an alternative article" /> Recommend an alternative article 
                <br />

                <div class="padding20">
                    <hr>
                </div>
                <h3>Item Details</h3>
            
                <strong class="padding20-left">Title</strong>
                    <div class="form-wrapper">
                        <input style="width:90%" type="text" name="title"
                            value="<?php
                            if (isset($_REQUEST['atitle'])){
                                echo $_REQUEST['atitle'];
                            // Check for non-standard tag
                            } elseif (isset($_REQUEST['ti'])) {
                                echo $_REQUEST['ti'];
                            }
                            ?>"
                        />
                    </div>

                <strong class="padding20-left">Author</strong>
                    <div class="form-wrapper">
                        <input style="width:90%" type="text" name="author"
                            value="<?php
                            // Check for the author. It exists, print it.
                            // If the last name, first name and middle name are defined
                            if (isset($_REQUEST['aulast']) &&
                                isset($_REQUEST['aufirst']) &&
                                isset($_REQUEST['auinitm'])) {

                                echo $_REQUEST['aulast'] .
                                ", " . $_REQUEST['aufirst'] .
                                " " . $_REQUEST['auinitm'];
                            // If the last name and first name are defined
                            } elseif (isset($_REQUEST['aulast']) &&
                                      isset($_REQUEST['aufirst'])) {
                                echo $_REQUEST['aulast'] .
                                ", " . $_REQUEST['aufirst'];
                            // If only the last name is defined
                            } elseif (isset($_REQUEST['aulast'])) {
                                echo $_REQUEST['aulast'];
                            // Check for non-standard tag
                            } elseif (isset($_REQUEST['au'])) {
                                echo $_REQUEST['au'];
                            }
                            ?>"
                        />
                    </div>

                <strong class="padding20-left">Source</strong>
                    <div class="form-wrapper">
                        <input style="width:90%" type="text" name="source"
                            value="<?php
                                // Check for the long title of the source
                                if (isset($_REQUEST['title'])) {
                                    echo $_REQUEST['title'];
                                // Check for the short title of the source
                                } elseif (isset($_REQUEST['stitle'])) {
                                    echo $_REQUEST['stitle'];
                                // Check for non-standard tag
                                } elseif (isset($_REQUEST['so'])) {
                                    echo $_REQUEST['so'];
                                }
                            ?>"
                        />
                    </div>

                <strong class="padding20-left">Publisher</strong>
                    <div class="form-wrapper">
                        <input style="width:90%" type="text" name="pub"
                            value="<?php
                                if (isset($_REQUEST['pub'])) {
                                    echo $_REQUEST['pub'];
                                //Check for non-standard tag
                                } elseif (isset($_REQUEST['pb'])) {
                                    echo $_REQUEST['pb'];
                                }
                            ?>"
                        />
                    </div>

                <strong class="padding20-left">Place Published</strong>
                    <div class="form-wrapper">
                        <input style="width:90%" type="text" name="place"
                            value="<?php
                                if (isset($_REQUEST['place'])) {
                                    echo $_REQUEST['place'];
                                }
                            ?>"
                        />
                    </div>

                <strong class="padding20-left">ISSN</strong>
                    <div class="form-wrapper">
                        <input style="width:90%" type="text" name="issn"
                            value="<?php
                            // Check for ISSN. If it exists, print it.
                            if (isset($_REQUEST['issn'])) {
                                echo $_REQUEST['issn'];
                            //Check for non-standard tags
                            } elseif (isset($_REQUEST['is'])) {
                                echo $_REQUEST['is'];
                            } elseif (isset($_REQUEST['is_nohyphen'])) {
                                echo $_REQUEST['is_nohyphen'];
                            }
                            ?>"
                        />
                    </div>

                <strong class="padding20-left">ISBN</strong>
                    <div class="form-wrapper">
                        <input style="width:90%" type="text" name="isbn"
                            value="<?php
                            // Check for ISBN. If it exists, print it.
                            if (isset($_REQUEST['isbn'])) {
                                echo $_REQUEST['isbn'];
                            }
                            ?>"
                        />
                    </div>

                <strong class="padding20-left">Series or Collection Title</strong>
                    <div class="form-wrapper">
                        <input style="width:90%" type="text" name="series" />
                    </div>

                <strong class="padding20-left">Volume</strong>
                    <div class="form-wrapper">
                        <input style="width:90%" type="text" name="volume"
                            value="<?php
                            // Check for the volume number. If it exists, print it.
                            if (isset($_REQUEST['volume'])){
                                echo $_REQUEST['volume'];
                            //Check for non-standard tags
                            } elseif (isset($_REQUEST['ftvol'])) {
                                echo $_REQUEST['ftvol'];
                            }
                            ?>"
                        />
                    </div>

                <strong class="padding20-left">Issue</strong>
                    <div class="form-wrapper">
                        <input style="width:90%" type="text" name="issue"
                            value="<?php
                            // Check for the issue number. If it exists, print it.
                            if (isset($_REQUEST['issue'])) {
                                echo $_REQUEST['issue'];
                            //Check for non-standard tags
                            } elseif (isset($_REQUEST['ftissue'])) {
                                echo $_REQUEST['ftissue'];
                            }
                            ?>"
                        />
                    </div>

                <strong class="padding20-left">Date</strong>
                    <div class="set-wrapper">
                    <div class="form-wrapper">
                        <input type="text" name="date" id="date" style="width:90%;" value="<?php
                            // Check for date. If it exists, print it.
                            if (isset($_REQUEST['date'])) {
                                if (strlen($_REQUEST['date']) > 4) {
                                    $dateArr = explode("-", $_REQUEST['date']);
                                    if (isset($dateArr[2])) {
                                        $dateSeconds = mktime(0,0,0,$dateArr[1],$dateArr[2],$dateArr[0]);
                                        $printDate= date('m/d/Y', $dateSeconds);
                                    } else {
                                        $dateSeconds = mktime(0,0,0,$dateArr[1],1,$dateArr[0]);
                                        $printDate= date('m/Y', $dateSeconds);
                                    }
                                    echo $printDate;
                                } elseif (strlen($_REQUEST['date']) <= 4) {
                                    echo $_REQUEST['date'];
                                }
                            //Check for non-standard tags
                            } elseif (isset($_REQUEST['ftpy'])) {
                                echo $_REQUEST['ftpy'];
                            }
                            ?>"
                        />
                    </div>
                    </div>
                <strong class="padding20-left">Page Numbers</strong>
                    <div class="form-wrapper">
                        <input style="width:90%" type="text" name="start_page"
                            value="<?php
                            // Check for the start & end page. If they exist, print them.
                            if (isset($_REQUEST['spage']) &&
                                isset($_REQUEST['epage'])){
                                echo $_REQUEST['spage'] . "-" .
                                $_REQUEST['epage'];
                            // Start page only
                            } elseif (isset($_REQUEST['spage'])) {
                                echo $_REQUEST['spage'];
                            //Check for non-standard tags
                            } elseif (isset($_REQUEST['ftpage'])) {
                                echo $_REQUEST['ftpage'];
                            }
                            ?>"
                        />
                    </div>

                <strong class="padding20-left">* Denotes required field</strong>
                <br /><br />
                <p>
                    <strong> Warning Concerning Copyright Restrictions</strong>
                </p>
                
            <p>
                The copyright law of the United States (Title 17, United States Code) governs the making of photocopies or other reproductions of copyright material. Undercertain circumstances specified in the law, libraries and archives are authorized to furnish a photocopy or other reproduction. One of these specified conditions is that the photocopy or reproduction is not to be "for any purpose other than private study, scholarship, or research". If a user makes a request for, or later uses, a photocopy or reproduction for purposes in excess of "fairuse", that user may be liable for copyright infringement. This instititution reserves the right to refuse a copying order if, in its judgement, fulfillment of the order would involve violation of copyright law.
            </p>
            <input name='refer' id='refer' value='test' style='display:none' />
            <!-- <input type="hidden" name="request_uri" value="<?php echo $_SERVER['HTTP_REFERER']; ?>" /> -->

            <div class="padding20-left padding20-bottom">
            <input type="submit" value="Submit" onclick="return checkForm()" />
            <input type="button" name="reset" value="Reset Form" />
            </div>
        </form>
        </div>


    <script language="javascript">
        function checkForm() {
            if (document.illrequest.first_name.value == "") {
                alert("Please provide your first name.");
                document.illrequest.first_name.focus();
                return false;
            } else if (document.illrequest.last_name.value == "") {
                alert("Please provide your last name.");
                document.illrequest.last_name.focus();
                return false;
            } else if (!olivetecheck(document.illrequest.email.value)) {
                alert("Please provide a valid Olivet E-mail Address");
                document.illrequest.email.focus();
                return false;
            } else if (document.illrequest.status.value == "") {
                alert("Please provide a status.");
                document.illrequest.status.focus();
                return false;
            } else if (document.illrequest.date_needed.value == "") {
                alert("Please specify the date needed.");
                document.illrequest.date_needed.focus();
                return false;
            } else if (document.illrequest.database.value == "") {
                alert("Please specify the database that you were searching in when you found the article.\n\nIf you weren't in a database, please tell us the page from which you accessed this form.");
                document.illrequest.date_needed.focus();
                return false;
            } else if (!olivetecheck(document.illrequest.email.value)) {
                var answer = confirm("The InterLibrary Loan department strongly recommends that you use your Olivet email address.\nYou have entered a non-Olivet email address.\n\nAre you sure you still want to do this?");
                document.illrequest.email.focus();
                return answer;
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

<!-- ===== content above here ========================================================== -->                
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>