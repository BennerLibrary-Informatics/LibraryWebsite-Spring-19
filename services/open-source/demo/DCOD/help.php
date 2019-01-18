<html>
<head>
<?php
if(!isset($_GET['id']) || $_GET['id'] < 0 || $_GET['id'] > 19)
{
?>
    <script type="text/javascript">window.close();</script>
<?php
}
else
{
    //Display text is broken into 3 segments so the layout can be modified easily
    $helpID = $_GET['id'];
    switch($helpID)
    {
        case 0:
            $head = "Administrator Name";
            $txt = "The full name of the person who will maintain DCOD.";
            $example = "John Doe";
            break;
        case 1:
            $head = "Administrator Email";
            $txt = "The email address of the person who will maintain DCOD.";
            $example = "jdoe@email.com";
            break;
        case 2:
            $head = "Administrator Username";
            $txt = "The login username for the person who will maintain DCOD.";
            $example = "jdoe";
            break;
        case 3:
            $head = "Administrator Password";
            $txt = "The password for the person who will maintain DCOD.";
            $example = "thisIs4Pass";
            break;
        case 4:
            $head = "Database Name";
            $txt = "The name of an existing Database where DCOD tables should be stored.";
            $example = "dcod_db";
            break;
        case 5:
            $head = "Database Host";
            $txt = "The host of the existing MySQL database. Can be either a url or IP address. You can find this on the site where the database is hosted.";
            $example = "13.29.4.196";
            break;
        case 6:
            $head = "Database Username";
            $txt = "The MySQL database user used to connect. You can find this on the site where the database is hosted.";
            $example = "root";
            break;
        case 7:
            $head = "Database Password";
            $txt = "The password for the MySQL user in the specified database. You can find this on the site where the database is hosted.";
            $example = "dbPa55";
            break;
        case 8:
            $head = "System Name";
            $txt = "The full name for this system.";
            $example = "Dynamic Content On Demand";
            break;
        case 9:
            $head = "System Short Name";
            $txt = "A shortened name for this system.";
            $example = "DCOD";
            break;
        case 10:
            $head = "System Description";
            $txt = "A description of what this system does. Can be left blank.";
            $example = "Bookmarking and mini-content management system";
            break;
        case 11:
            $head = "System Admin";
            $txt = "The name displayed when DCOD sends out emails.";
            $example = "Library Informatics";
            break;
        case 12:
            $head = "System Email";
            $txt = "The email address DCOD should send system related emails to.";
            $example = "library@change.me";
            break;
        case 13:
            $head = "System Domain";
            $txt = "The domain which DCOD is hosted on. This should include the http:// and www (if applicable), then the domain name with no slash after it.";
            $example = "If the DCOD folder is at \"http://www.mysite.com/test/new/dcod\", this would be \"http://www.mysite.com\"";
            break;
        case 14:
            $head = "System Root";
            $txt = "The path from the domain to the sub-directory DCOD is hosted in.";
            $example = "If the DCOD folder is at \"http://www.mysite.com/test/new/dcod\", this would be \"/test/new/dcod\"";
            break;
        case 15:
            $head = "Institution Long Name";
            $txt = "The full name of the institution DCOD is used by. Can be left blank.";
            $example = "Benner Library & Resource Center";
            break;
        case 16:
            $head = "Institution Short Name";
            $txt = "A shortened nickname for the institution DCOD is used by. Can be left blank.";
            $example = "Benner Library";
            break;
        case 17:
            $head = "Campus Long Name";
            $txt = "The full campus name where DCOD is used. Can be left blank.";
            $example = "Olivet Nazarene University";
            break;
        case 18:
            $head = "Campus Short Name";
            $txt = "A shortened nickname for the campus name where DCOD is used. Can be left blank.";
            $example = "Olivet";
            break;
        case 19:
            $head = "Campus Initials";
            $txt = "The initials of the campus where DCOD is used. Can be left blank.";
            $example = "ONU";
            break;
        default:
            $head = "";
            $txt = "";
            $example = "";
    }
}
?>
<style>
    body {
        background-image:url('images/gradient_squares4.png');
    }
</style>
</head>
<body>
    <strong>
    <?php echo $head; ?>
    </strong><br />
    <?php echo $txt,"<br /><br /><i>Example: ",$example,"</i>"; ?>
</body>
</html>