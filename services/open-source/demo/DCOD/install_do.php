<?php
/* File Name: install_do.php
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
/*
 * Create the Database file
 */
$host=$_REQUEST['database_host'];
$name=$_REQUEST['database_name'];
$user=$_REQUEST['database_username'];
$pass=$_REQUEST['database_password'];
?>

<html>
    <head>
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script type="text/javascript">

            $(document).ready(function(){

            createDB();
            
            });
            function createDB(){
                $.ajax({
                    type: "POST",
                    url:  "create_db.php",
                    data: {
                        host:  "<?php echo $host; ?>",
                        dbname:"<?php echo $name; ?>",
                        dbuser:"<?php echo $user; ?>",
                        dbpass:"<?php if(strlen($pass)) echo $pass; ?>"
                    },
                    success: function(data) {
                        createTables();
                    }
                });
            }
            function createTables(){
                $.ajax({
                    type:   "POST",
                    url:    "create_tables.php",
                    data: {
                        email:"<?php echo $_REQUEST['admin_email']; ?>",
                        name:"<?php echo $_REQUEST['admin_name']; ?>",
                        pass:"<?php echo $_REQUEST['admin_pass']; ?>",
                        user:"<?php echo $_REQUEST['admin_username']; ?>",
                        sys_name:"<?php echo $_REQUEST['sys_name']; ?>",
                        sys_short_name:"<?php echo $_REQUEST['sys_short_name']; ?>",
                        sys_description:"<?php echo $_REQUEST['sys_description']; ?>",
                        sys_admin:"<?php echo $_REQUEST['sys_admin']; ?>",
                        sys_email:"<?php echo $_REQUEST['sys_email']; ?>",
                        sys_domain:"<?php echo $_REQUEST['sys_domain']; ?>",
                        sys_root:"<?php echo $_REQUEST['sys_root']; ?>",
                        inst_long_name:"<?php echo $_REQUEST['inst_long_name']; ?>",
                        inst_short_name:"<?php echo $_REQUEST['inst_short_name']; ?>",
                        campus_name_long:"<?php echo $_REQUEST['campus_name_long']; ?>",
                        campus_name_short:"<?php echo $_REQUEST['campus_name_short']; ?>",
                        campus_initials:"<?php echo $_REQUEST['campus_initials']; ?>"
                    },
                    success: function(data) {
                        window.location="login.php";
                    }
                });
            }
            
        </script>            
    </head>
    <body>
        
    </body>
</html>