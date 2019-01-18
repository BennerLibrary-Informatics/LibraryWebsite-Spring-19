<?php
/* File Name: CategoryList.php
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
class CategoryList {

    private $db;
    private $listString = "";
    public $outString="";


    public function __construct($db) {
        $this->db = $db;
        $this->email = false;
        $this->getCategories();
    }

    public function getCategories() {
        // The column to order by will always be one more than what is recieved
        $sql=sprintf('SELECT user_id,name FROM dcod_category');
        $query=$this->db->query($sql)or die($this->db->error);
        $this->outString .= '<div id="noshow" class="box"><br /><a onclick="csv()" style="cursor: pointer"><img src="images/excel.gif"alt="export as CSV" border=0 /></a>';
        $this->outString.= '<div class="boxTitle"><STRONG>Categories + Owners</STRONG></div>';
        $this->outString .= '<table class="tableD" style="width:100%">';
        $this->outString.="<tr><td>Category Owner</td><td>Name</td></tr>";
        print_r($query->fetch_array());
        while($results=$query->fetch_array())
        {
                $this->outString.='<tr class="tableE><td>';
                $user_id = $results['user_id'];
                $this->outString.=$user_id."</td>";
                $category=$results['name'];
                $this->outString.='<td>'.$category;
                $this->listString .= '</td></tr>';
        }
        $this->outString .= '</table></div>';
    }
        public function __toString() {
        return $this->outString;
    }

    private function createCSVList($resultSet) {
        if (file_exists("cat_list.csv"))
            unlink("cat_list.csv");
        $file = fopen("cat_list.csv", "w") or die("can't open");
        $csv_string = "\"Category Name\",\"Category Owner\"";
        $csv_string .= "\n";
        $var = 0;
        while ($results = $resultSet->fetch_array()) {
            $csv_string .= "\"".$results['name']."\",";
            $csv_string .= "\"".$results['user_id']."\",";
            if (++$var != $resultSet->num_rows)
                $csv_string .= "\n";
        }
        fwrite($file, $csv_string);
        fclose($file);
    }
}
?>