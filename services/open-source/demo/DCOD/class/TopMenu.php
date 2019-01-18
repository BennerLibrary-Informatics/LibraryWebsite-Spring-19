<?php
/* File Name: TopMenu.php
 * OpenSource Software Name:  Dynamic Content On Demand - DCOD
 *
 * Developer: Bruce Cheek, Michael Kirkpatrick, Matt Marcukaitis
 * Project Managers: Profs Ann Johnston and Craighton Hippenhammer,
 *     Benner Library and Resource Center, Olivet Nazarene University
 * If you use this code, let a project manager know at
 * oss-lib@olivet.edu. Thank you.
 * Copyright (C) 2013 Olivet Nazarene University
 *
 * This file is part of DCOD.
 *
 * DCOD is free software: you can redistribute it and/or modify
 * it under the terms of the Creative Commons CC-BY license at
 * http://creativecommons.org/licenses/by/3.0/
 * 
 * This license lets you distribute, remix, tweak, and build upon
 * our work, even commercially, as long as you credit us for the
 * original creation. 
 * 
 * 
 * You are free:
 *    to Share — to copy, distribute and transmit the work
 *    to Remix — to adapt the work
 *    to make commercial use of the work

 * Under the following conditions:
 *    Attribution — You must attribute the work in the manner
 * specified by the author or licensor (but not in any way that
 * suggests that they endorse you or your use of the work) with the
 * understanding that:
 *    Waiver — Any of the above conditions can be waived if you get
 * permission from the copyright holder.
 *    Public Domain — Where the work or any of its elements is in the
 * public domain under applicable law, that status is in no way
 * affected by the license.
 *    Other Rights — In no way are any of the following rights
 * affected by the license:
 *    Your fair dealing or fair use rights, or other applicable
 * copyright exceptions and limitations;
 *    The author's moral rights;
 *    Rights other persons may have either in the work itself or in
 * how the work is used, such as publicity or privacy rights.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * CC-BY License for more details.
 *
 */
?>
<?php
    $curPage = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
    if($curPage != "login.php" && $curPage != "install.php")
    {
        include_once "class/User.php";
        $_SESSION['user'] = new User($db, $_SESSION['emp_id']);
        $user = $_SESSION['user'];
    }
?>
<?php
if(isset($user))
{
    if(isset($_GET['v']))
    {
        if($_SESSION['user']->getGroupId()=='admin')
        {
            if($_GET['v']=='admin')
                $_SESSION['view']='admin';
            else
                $_SESSION['view']='normal';
        }
    }
    else
    {
        if(!isset($_SESSION['view']))
        {
            if($_SESSION['user']->getGroupId()=='admin')
                $_SESSION['view']='admin';
            else
                $_SESSION['view']='normal';
        }
    }
}

?>
<?php
class TopMenu {

    var $employee_full_name;
    var $session_type; // 1 = Normal 2 = Admin
                       // -1 = Session not started yet
    var $msg_num; // message number embedded in the URL

function curPageName() {
 return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}
    //the user_id parametergotten rid of now due to the user class.
    function __construct() {
        if($this->curPageName()!="login.php" && $this->curPageName()!="install.php")
        {
        $user = $_SESSION['user'];
        if($user->getGroupId()=="admin")
            $this->session_type=1;
        else if ($_SESSION['user']->getGroupId()=="normal")
            $this->session_type=0;
        else $this->session_type=-1;

        // Check to see if the session has been started before running this
        if ($this->session_type >= 0) {
            $this->employee_full_name = $_SESSION['user']->getFullName();
        }

        
        }
        // Check to see if there is a message code embedded in the url.
        // If there is, set this object's msg_num to that code number, if not
        //   set it to -1. Message with code -1 will not be displayed.
        if(isset($_GET['msg'])) {
            $this->msg_num = $_GET['msg'];
        } else {
            $this->msg_num = -1;
        }
    }

    // Depending on session type, the appropriate permissions will be printed.
    function switchSessionType() {
        switch($this->session_type) {
            case 0: $titleString = "<i>User</i>"; break;
            case 1: $titleString = "<small><i>Administrator</i></small> &bull;"; break;
            default: $titleString = ""; break;
        }
        return $titleString;
    }

    // Depending which session type, the appropriate menu link will be printed.
    function switchMenu() {
        switch($this->session_type) {
            case 0:
                $menuString = "<a href='mainPage.php'>Main Menu</a>";
                break;
            case 1:
                $menuString = "<a href='mainPage.php'>Main Menu</a>";
                break;
            default:
                $menuString = "<a href='normal_menu.php'>Main Meunu</a>";
                break;
        }
        return $menuString;
    }

    // This function contains all messages and their code numbers.
    // The attributes are mostly self explanatory
    // If you have any questions about what they do go to http://www.myjqueryplugins.com/jNotify for reference
    // TODO: this should be put into a helper class so it's not so long and cumbersome.
    function decodeMessage() {
        switch($this->msg_num) {
            //this is the standard template for a success notification.
            case 0: $msg = "jSuccess(\"Form submitted successfully.\",{autoHide : true, clickOverlay : false, MinWidth :1, TimeShown : 3000, ShowTimeEffect : 200, HideTimeEffect : 200, LongTrip :20, HorizontalPosition : 'left', VerticalPosition : 'top', ShowOverlay : false, ColorOverlay : '#000', OpacityOverlay : 0.3});";
                break;
            case 1: $msg = "jSuccess(\"Password changed successfully!\",{autoHide : true, clickOverlay : false, MinWidth :1, TimeShown : 3000, ShowTimeEffect : 200, HideTimeEffect : 200, LongTrip :20, HorizontalPosition : 'left', VerticalPosition : 'top', ShowOverlay : false, ColorOverlay : '#000', OpacityOverlay : 0.3});";
                break;
            case 2: $msg = "jError(\"Your new passwords did not match. Please try changing your password again.\",{autoHide : true,clickOverlay : false, MinWidth : 100, TimeShown : 4000, ShowTimeEffect : 200, HideTimeEffect : 200, LongTrip :20, HorizontalPosition : 'left', VerticalPosition : 'top', ShowOverlay : false, ColorOverlay : '#000', OpacityOverlay : 0.3});";
                break;
            case 3: $msg = "jError(\"The password you typed for your 'Current Password' did not match the password on file.Please try changing your password again.\",{autoHide : true,clickOverlay : false, MinWidth : 300, TimeShown : 4000, ShowTimeEffect : 200, HideTimeEffect : 200, LongTrip :20, HorizontalPosition : 'left', VerticalPosition : 'top', ShowOverlay : false, ColorOverlay : '#000', OpacityOverlay : 0.3});";
                break;
            case 4: $msg = "jError(\"The username/password combination is incorrect or you do not have permission to access ".$_SESSION['dcod_sys_short_name'].".\",{autoHide : true,clickOverlay : false, MinWidth : 300, TimeShown : 4000, ShowTimeEffect : 200, HideTimeEffect : 200, LongTrip :20, HorizontalPosition : 'left', VerticalPosition : 'top', ShowOverlay : false, ColorOverlay : '#000', OpacityOverlay : 0.3});";
                break;
            case 5: $msg = "jError(\"You do not have permission to log in to the system. If you should have permission and cannot log in, please contact your DCOD Administrator.\",{autoHide : true,clickOverlay : false, MinWidth : 300, TimeShown : 3000, ShowTimeEffect : 200, HideTimeEffect : 200, LongTrip :20, HorizontalPosition : 'left', VerticalPosition : 'top', ShowOverlay : false, ColorOverlay : '#000', OpacityOverlay : 0.3});";
                break;
            case 6: $msg = "jSuccess(\"Groups successfully changed.\",{autoHide : true, clickOverlay : false, MinWidth :1, TimeShown : 3000, ShowTimeEffect : 200, HideTimeEffect : 200, LongTrip :20, HorizontalPosition : 'left', VerticalPosition : 'top', ShowOverlay : false, ColorOverlay : '#000', OpacityOverlay : 0.3});";
                break;
            case 7: $msg = "jError(\"Error saving groups!\",{autoHide : false,clickOverlay : false, MinWidth : 300, TimeShown : 4000, ShowTimeEffect : 200, HideTimeEffect : 200, LongTrip :20, HorizontalPosition : 'left', VerticalPosition : 'top', ShowOverlay : false, ColorOverlay : '#000', OpacityOverlay : 0.3});";
                break;
            case 8: $msg = "jNotify(\"There are unused tags click <a href='unused_tags.php'><strong><u>here</u></strong></a> to look at them. To dismiss this message click on this notification.\",{autoHide : false, clickOverlay : true, MinWidth :1, TimeShown : 3000, ShowTimeEffect : 200, HideTimeEffect : 200, LongTrip :20, HorizontalPosition : 'left', VerticalPosition : 'top', ShowOverlay : false, ColorOverlay : '#000', OpacityOverlay : 0.3});";
                break;
            case 9: $msg = "jSuccess(\"Bookmark deleted successfully!\",{autoHide : true, clickOverlay : false, MinWidth :1, TimeShown : 3000, ShowTimeEffect : 200, HideTimeEffect : 200, LongTrip :20, HorizontalPosition : 'left', VerticalPosition : 'top', ShowOverlay : false, ColorOverlay : '#000', OpacityOverlay : 0.3});";
                break;
            case 10: $msg = "jSuccess(\"Bookmark created successfully!\",{autoHide : true, clickOverlay : false, MinWidth :1, TimeShown : 3000, ShowTimeEffect : 200, HideTimeEffect : 200, LongTrip :20, HorizontalPosition : 'left', VerticalPosition : 'top', ShowOverlay : false, ColorOverlay : '#000', OpacityOverlay : 0.3});";
                break;
            case 11: $msg = "jSuccess(\"Bookmark edited successfully!\",{autoHide : true, clickOverlay : false, MinWidth :1, TimeShown : 3000, ShowTimeEffect : 200, HideTimeEffect : 200, LongTrip :20, HorizontalPosition : 'left', VerticalPosition : 'top', ShowOverlay : false, ColorOverlay : '#000', OpacityOverlay : 0.3});";
                break;
            case 12: $msg = "jNotify(\"This url is already in use. Please enter a different one.\",{autoHide : false, clickOverlay : true, MinWidth :1, TimeShown : 5000, ShowTimeEffect : 200, HideTimeEffect : 200, LongTrip :20, HorizontalPosition : 'left', VerticalPosition : 'top', ShowOverlay : false, ColorOverlay : '#000', OpacityOverlay : 0.3});";
                break;
            case 13: $msg = "jSuccess(\"Successfully logged out.\",{autoHide : true, clickOverlay : true, MinWidth :1, TimeShown : 3000, ShowTimeEffect : 200, HideTimeEffect : 200, LongTrip :20, HorizontalPosition : 'left', VerticalPosition : 'top', ShowOverlay : false, ColorOverlay : '#000', OpacityOverlay : 0.3});";
                break;
            case 14: $msg = "jSuccess(\"Password changed successfully!\",{autoHide : true, clickOverlay : true, MinWidth :1, TimeShown : 3000, ShowTimeEffect : 200, HideTimeEffect : 200, LongTrip :20, HorizontalPosition : 'left', VerticalPosition : 'top', ShowOverlay : false, ColorOverlay : '#000', OpacityOverlay : 0.3});";
                break;
            case 15: $msg = "jError(\"Current password does not match.\",{autoHide : false,clickOverlay : false, MinWidth : 300, TimeShown : 3000, ShowTimeEffect : 200, HideTimeEffect : 200, LongTrip :20, HorizontalPosition : 'left', VerticalPosition : 'top', ShowOverlay : false, ColorOverlay : '#000', OpacityOverlay : 0.3});";
                break;
            case 16: $msg = "jSuccess(\"Development request submitted successfully.\",{autoHide : true, clickOverlay : false, MinWidth :1, TimeShown : 3000, ShowTimeEffect : 200, HideTimeEffect : 200, LongTrip :20, HorizontalPosition : 'left', VerticalPosition : 'top', ShowOverlay : false, ColorOverlay : '#000', OpacityOverlay : 0.3});";
                break;
            case 17: $msg = "jSuccess(\"Password reset successfully, check your email in a few minutes. If you do not receive your email shortly please contact your DCOD administrator to reset your password.\",{autoHide : false, clickOverlay : false, MinWidth :1, TimeShown : 3000, ShowTimeEffect : 200, HideTimeEffect : 200, LongTrip :20, HorizontalPosition : 'left', VerticalPosition : 'top', ShowOverlay : false, ColorOverlay : '#000', OpacityOverlay : 0.3});";
                break;
            case 18: $msg = "jError(\"Password reset failed.\",{autoHide : false,clickOverlay : false, MinWidth : 300, TimeShown : 3000, ShowTimeEffect : 200, HideTimeEffect : 200, LongTrip :20, HorizontalPosition : 'left', VerticalPosition : 'top', ShowOverlay : false, ColorOverlay : '#000', OpacityOverlay : 0.3});";
                break;
            case 19: $msg = "jError(\"Password reset email failed to send.\",{autoHide : false,clickOverlay : false, MinWidth : 300, TimeShown : 3000, ShowTimeEffect : 200, HideTimeEffect : 200, LongTrip :20, HorizontalPosition : 'left', VerticalPosition : 'top', ShowOverlay : false, ColorOverlay : '#000', OpacityOverlay : 0.3});";
                break;
            case 20: $msg = "jSuccess(\"User has been successfully added - with the default password of 'password'.\",{autoHide : false, clickOverlay : false, MinWidth :1, TimeShown : 3000, ShowTimeEffect : 200, HideTimeEffect : 200, LongTrip :20, HorizontalPosition : 'left', VerticalPosition : 'top', ShowOverlay : false, ColorOverlay : '#000', OpacityOverlay : 0.3});";
                break;
            case 21: $msg = "jError(\"Your database is not set up properly. Edit the install.php file and delete the two top lines to allow installation.\",{autoHide : false, clickOverlay : true, MinWidth :1, TimeShown : 3000, ShowTimeEffect : 200, HideTimeEffect : 200, LongTrip :20, HorizontalPosition : 'left', VerticalPosition : 'top', ShowOverlay : false, ColorOverlay : '#000', OpacityOverlay : 0.3});";
                break;
            case 22: $msg = "jNotify(\"You are using the default password. Please change your password before continuing.\",{autoHide : false, clickOverlay : true, MinWidth :1, TimeShown : 3000, ShowTimeEffect : 200, HideTimeEffect : 200, LongTrip :20, HorizontalPosition : 'left', VerticalPosition : 'top', ShowOverlay : false, ColorOverlay : '#000', OpacityOverlay : 0.3});";
                break;
            case 23: $msg = "jSuccess(\"Successfully reset hit counters.\",{autoHide : true, clickOverlay : false, MinWidth :1, TimeShown : 3000, ShowTimeEffect : 200, HideTimeEffect : 200, LongTrip :20, HorizontalPosition : 'left', VerticalPosition : 'top', ShowOverlay : false, ColorOverlay : '#000', OpacityOverlay : 0.3});";
                break;
            case 24: $msg = "jError(\"Failed to reset hit counters.\",{autoHide : false, clickOverlay : true, MinWidth :1, TimeShown : 3000, ShowTimeEffect : 200, HideTimeEffect : 200, LongTrip :20, HorizontalPosition : 'left', VerticalPosition : 'top', ShowOverlay : false, ColorOverlay : '#000', OpacityOverlay : 0.3});";
                break;
            case 25: $msg = "jError(\"You do not have permission to access the requested page.\",{autoHide : false, clickOverlay : true, MinWidth :1, TimeShown : 3000, ShowTimeEffect : 200, HideTimeEffect : 200, LongTrip :20, HorizontalPosition : 'left', VerticalPosition : 'top', ShowOverlay : false, ColorOverlay : '#000', OpacityOverlay : 0.3});";
                break;
            case 26: $msg = "jSuccess(\"Updated configuration successfully.\",{autoHide : true, clickOverlay : false, MinWidth :1, TimeShown : 3000, ShowTimeEffect : 200, HideTimeEffect : 200, LongTrip :20, HorizontalPosition : 'left', VerticalPosition : 'top', ShowOverlay : false, ColorOverlay : '#000', OpacityOverlay : 0.3});";
                break;
            case 27: $msg = "jError(\"Unable to update configuration.\",{autoHide : false, clickOverlay : true, MinWidth :1, TimeShown : 3000, ShowTimeEffect : 200, HideTimeEffect : 200, LongTrip :20, HorizontalPosition : 'left', VerticalPosition : 'top', ShowOverlay : false, ColorOverlay : '#000', OpacityOverlay : 0.3});";
                break;
            case 28: $msg = "jNotify(\"Your session has expired. Please log back in.\",{autoHide : true, clickOverlay : false, MinWidth :1, TimeShown : 3000, ShowTimeEffect : 200, HideTimeEffect : 200, LongTrip :20, HorizontalPosition : 'left', VerticalPosition : 'top', ShowOverlay : false, ColorOverlay : '#000', OpacityOverlay : 0.3});";
                break;
            default: $msg = "";
                break;
        }
        return $msg;
    }

    // This function builds the message box string using decodeMessage().
    
    function buildMsgBox() {

        if ($this->msg_num >= 0){
            echo '<script type="text/javascript">';
            echo $this->decodeMessage();
            echo '</script>';
        }
    }
    
    function __toString() {
        if($this->curPageName()!="login.php"&&$this->curPageName()!="install.php"){
        // If session has been started, show the box with session information.
        // If not, only show alerts.
        $search = "<td>
            


                        <form name='searchBox' action='search.php' method='GET'>
                            <input class='searchText' type='text' name='search' id='search' 
                            onfocus=\"if(this.value==this.defaultValue) this.value=''\";>
                            <select name='searchType' class='searchMenu'>
                                <option>Content</option>
                                <option>Tags</option>
                                <option>Url</option>
                            </select>
                            &nbsp;<input type='submit' value='Search' class='searchButton'>
                        </form>
                   </td>";
        if ($this->session_type >= 0) {
            /*
             * this section is used used for group control of top menu
             */
            $reportBug = ($_SESSION['user']->getGroupId()==="admin") ?
            				"" :
            				"";
            $menuString = "<div class='box' id='top' style='width:98.5%'>
                <table cellpadding='5' style='width:100%'>
                    <tr>
            
                        <td align='left'>
                        
                           
                           <a href='mainPage.php' class='homeLink'>
            <img class='homeLink' src='images/dcod_banner.png' height='55' width='365' title='Go to MAIN MENU' border=0 /></a>
                        </td>
            
            
            
                        
                        $search
                        <td align='right'>
                            ".$this->employee_full_name."<br/>
                            ".$this->switchSessionType()." 
                                
                                <small><i><a href='change_pass.php' class='link1'>change password</a></i> &bull; </small>
                                <small><i><a href='logout.php' class='link1'>sign out</a></i></small>
                        </td>
                    <tr>
                </table>
               
            </div>";
            //IMUS BAR TEMPORARILY REMOVED DUE TO JQUERY CONFLICTS
            //include '../IMUS/imus_bar.php';
            $msgBoxString = $this->buildMsgBox();
            $outString = $menuString.$msgBoxString;
        } else {
            $msgBoxString = $this->buildMsgBox();
            $outString = $msgBoxString;
        }
        return $outString;
    }else{
        $msgBoxString = $this->buildMsgBox();
        return "".$msgBoxString;
    }
    }
}
?>