<?php
/* File Name: User.php
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
/**
 * This class will handle all associated tasks related to users.
 */
class User {
	/** Database connection for this class
	 *
	 */
	protected $db;
    /** A boolean value of whether or not valid user
      *
      * @var <Database> A database connection class
      */
    protected $valid_user;
     /** user_id
      *
      * @var <String> id of the user
      */
    protected $user_id;
     /** A String with group name
      *
      * @var <String> string containing the group name
      */
    protected $group_id;
     /** Whether or not user is an admin
      *
      * @var <Boolean> A boolean of true if is student else false
      */
    
    protected $name;
    protected $full_name;

    /** Default constructor for the user class
      * sets emp id, and runs through verifyUser
      */
    public function __construct($db, $emp)
        {
        	$this->db = $db;
            $this->user_id=$emp;
            $this->checkUserDetails();
        }

    /*
     * This function is essentially replaces the code from the old login_do pages.
     * returns a boolean value of true if they belong to one of the groups
     * returns boolean value of false if they don't
     */
    public function verifyUser($pass)
        {
            //Check if they exist in universal login. If so, this overrides DCOD specific users
            $universalSql = "SELECT passwd FROM employee WHERE emp_id = '".$this->user_id."'";
            $universalResult = $this->db->query($universalSql) or die($this->db->error);
            if($universalResult->num_rows > 0)
            {
            	$row = $universalResult->fetch_array();
                if($row['passwd'] == md5($pass))
                    return true;
                else
                    return false;
            }
            else
            {
                //If they're not part of universal login, check dcod users
                $stmtCred = sprintf("SELECT * FROM dcod_users WHERE user_id = '%s'",
                		$this->db->real_escape_string($this->user_id));
                $stmtCredResult = $this->db->query($stmtCred);
                $result = $stmtCredResult->fetch_array();

                // Compare the MD5 hashes of the two passwords to see if they're the same

                if ($result['user_id'] == $this->user_id && $result['passwd'] == md5($pass))
                {
                    if($result['administrator'] == 1 || $result['user'] == 1)
                        return true;
                    else
                        return false;
                }
                else
                    return false;
            }
        }
    /*
     * This function checks to see what group the user belongs to
     */
    private function checkUserDetails()
        {
            //Check if they exist in universal login. If so, this overrides DCOD specific users
            $universalSql = "SELECT emp_id FROM group_controls WHERE emp_id = '".$this->user_id."'";
            $universalResult = $this->db->query($universalSql) or die($this->db->error);
            if($universalResult->num_rows > 0)
            {
                $this->group_id=isset($_SESSION['group']) ? $_SESSION['group'] : "none";
                $nameSql = "SELECT pref_name, last_name FROM employee WHERE emp_id = '".$this->user_id."'";
                $nameResult = $this->db->query($nameSql) or die($this->db->error);
                $nameRow = $nameResult->fetch_array();
                $this->name = $nameRow['pref_name'];
                $this->full_name = $nameRow['pref_name']." ".$nameRow['last_name'];
            }
            else
            {
                $stmtCred = sprintf("SELECT * FROM dcod_users WHERE user_id = '%s'",
                		$this->db->real_escape_string($this->user_id));
                $stmtCredResult = $this->db->query($stmtCred);
                $result = $stmtCredResult->fetch_array();

                if($result['administrator'] == '1')
                    $this->group_id="admin";
                else
                    $this->group_id="normal";

                $this->name=current(explode(" ",$result['name']));
                $this->full_name=$result['name'];
            }
        }
    public function getUserId()
        {
            return $this->user_id;
        }

    public function getValidUser()
        {
            return $this->valid_user;
        }

    public function getGroupId()
        {
         return $this->group_id;
        }
    public function getName()
        {
            return $this->name;
        }
    public function getFullName()
        {
            return $this->full_name;
        }
    public function __toString()
        {
            $string="User: ";
            $string.=$this->user_id.'<br/>';
            if($this->isStudent==true)
               $string.="Supervisor ".$this->supervisor.'<br/>';
            $string.="Belongs to ".$this->group_id." group";
            return $string;
        }

}
?>