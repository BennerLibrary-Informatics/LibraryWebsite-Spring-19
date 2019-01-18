<?php
/* File Name: Category.php
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
class category {
    /**A persistant conection to the database
     *
     * @var <Database> A datbase connection class
     */
    protected $db;
    /**The database id of the category we are working with
     *
     * @var <int) Unique id of the category
     */
    protected $id;
    /**The name of the category
     *
     * @var <String> The name of the category
     */
    protected $name;
    /**The description of the category
     *
     * @var <String> the category description
     */
    protected $description;
    /**The owner of the category
     *
     * @var <String> The user_id of the owner
     */
    protected $user_id;
    /**Notes on the particular category, may be if more than one person 
     * administrates the category.
     *
     * @var <string> 
     */
    protected $notes;
    /**Array of Bookmarks with this category
     *
     * @var <Array> The array of bookmarks with this category
     */
    protected $array;
    /**Stores the length of the Array of bookmarks.
     *
     * @var <int> The length of the Array of bookmarks
     */
    protected $arrayLength;

//Constructors
    /**The Default constructor,
     * used when creating new categorys.
     *
     */
    public function  __construct($db, $id = -1) {
        $this->db = $db;
        $this->arrayLength = 0;
        if (is_null($id)){
            $this->name = null;
            $this->array = array();
        } else {
            //get the name of the category
			$sql = sprintf('SELECT a.name,a.description,a.user_id,a.notes 
                            FROM dcod_category a
                            WHERE a.category_id = "%s"
                            LIMIT 1',
                    $this->db->real_escape_string($id),
                    $this->db->real_escape_string($id));
			$query = $this->db->query($sql);
			$resultArray = $query->fetch_array();

            $this->id           = $id;
            $this->name         = $resultArray['name'];
            $this->description  = $resultArray['description'];
            $this->user_id       = $resultArray['user_id'];
            $this->notes        = $resultArray['notes'];
            $sql=sprintf('SELECT count(category_id) z FROM dcod_bookmark_category WHERE category_id="%s" GROUP BY category_id',
            		$this->db->real_escape_string($id));
            $query=$this->db->query($sql);
            $result=$query->fetch_array();
            $this-> arrayLength = $result['z'];
            
        }
    }

//Getters and Setters
    /**Returns the id of the category.
     *
     * @return <int> returns the id of the category.
     */
    public function getId() {
         return($this->id);
    }
    /**Changes the id to the id passed
     *
     * @param <int> $inId, the id to set the category to
     */
    public function setId($inId){
        $this->id = $inId;
    }
    /**Returns the name of the category.
     *
     * @return <String> The name of the category.
     */
    public function getName(){
        return($this->name);
    }
    /**Changes the name of the category to the name passed
     *
     * @param <String> $inName, the name to give the category
     */
    public function setName($inName){
        $this->name = $inName;
    }
    /**returns the category description
     *
     * @return <String> the category description
     */
    public function getDescription(){
        return($this->description);
    }
    /** sets the category description to the passed description
     *
     * @param <String> $inDescription, the description to set the category description to
     */
    public function setDescription($inDescription){
        $this->description = $inDescription;
    }
    /*
     * Returns the notes
     * @return <String> the category notes
     */
    public function getNotes(){
        return($this->notes);
    }
    /**Sets the category notes to the passed in string $newNotes
     * 
     * @param <String> $newNotes
     */
    public function setNotes($newNotes){
        $this->notes=$newNotes;
    }
    /** returns the owner of this category
     *
     * @return <String> Returns the user_id of the owner of this category
     */
    public function getUserId(){
        return($this->user_id);
    }
    /** sets the user for this category
     *
     * @param <String> $user_id The new user ID of this category
     */
    public function setUserId($user_id){
        $this->user_id = $user_id;
    }
    /**Returns the array of bookmarks associated with this category.
     *
     * @return <array> Array of Bookmarks associated with this category.
     */
    public function getArray(){
        return($this->array);
    }
    /**Changes the Array of bookmarks to the passed Array of bookmarks
     *
     * @param <Array> $inArray, the array to change this array to.
     */
    public function setArray($inArray){
        $this->array = $inArray;
    }
    /**Returns the length of the array of bookmarks
     *
     * @return <int> Length of the array.
     */
    public function getArrayLength(){
        return($this->arrayLength);
    }
    /**Changes the Array Length to the number passed
     *
     * @param <int> $inArrayLength, number to set the array length to
     */
    public function setArrayLength($inArrayLength){
        $this->arrayLength = $inArrayLength;
    }

    public function getBookmarks(){
                    // gets the array of bookmarks that go with this category
            $sql = sprintf('SELECT bookmark_id
                            FROM dcod_bookmark_category
                            WHERE category_id = "%s"
                            ',
            		$this->db->real_escape_string($this->id));
            $query = $this->db->query($sql);
            $i=0;
            while ($resultArray = $query->fetch_array()){
                $this->array[$i] = $resultArray['bookmark_id'];
                $i++;
            }

    }

    public function updateCategory(){
         $sql = sprintf('UPDATE
                            dcod_category
                        SET
                            name = "%s",
                            description = "%s",
							user_id = "%s",
							notes = "%s"
						WHERE
                            category_id  =  "%s"',
         		$this->db->real_escape_string($this->name),
         		$this->db->real_escape_string($this->description),
         		$this->db->real_escape_string($this->user_id),
         		$this->db->real_escape_string($this->notes),
         		$this->db->real_escape_string($this->id));
         $query = $this->db->query($sql);
        return (bool) $query;
    }
//Additional Functions

    /**Searches the array for a specific bookmark
     *
     * @param <bookmark> $inBookmark, the bookmark to look for.
     * @return <int> Returns -1 if the bookmark is not found, otherwise it
     *               returns the index of the bookmark.
     */
    public function findBookmark($inBookmark){
        $bookmarkId = $inBookmark->getId();
        $return = -1;
        //search through the
        echo "find bookmark<br/>";
        for ($i = 0; $i < $this->arrayLength; $i++){
            echo "i: ".$i;
            echo "<pre>";
            print_r($this->array);
            echo "</pre>";
            if ($this->array[$i] == $bookmarkId) //each array element contains a bookmark id rather than a bookmark object
               $return = $this->array[$i];
         }
         return($return);
    }

    /**Adds a bookmark to the category array if it is not in the category already
     *
     * @param <bookmark> $inBookmark, the bookmark to add to the category
     * @return <int> Returns 1 if successful, returns 0 if failed
     */

    public function addBookmark($inBookmark){
        //check for the bookmark in the array
        if($this->findBookmark($inBookmark) != -1)
            return(0);
        else{
            //adds the bookmark and increments $arrayLength
            $this->array[$this->arrayLength] = $inBookmark;
            $this->arrayLength++;

            $sql = sprintf('INSERT INTO dcod_bookmark_category
                       (bookmark_id,
                        category_id)
                        VALUES (%s,
                                %s)',
            		$this->db->real_escape_string($inBookmark->getId()),
            		$this->db->real_escape_string($this->getId()));
            $query = $this->db->query($sql) or die($this->db->error);
            return(1);
        }
    }
    /**Removes a passed bookmark from the array
     *
     * @param <Bookmark> $inBookmark, the bookmark to remove
     * @return <int> Returns 1 if successful, returns 0 if failed
     */
    public function removeBookmark($inBookmark){
        $index = findBookmark($inBookmark);
        if($index == -1)
            return(0);
        else{
            $bookmarkId = $this->array[$index]->getId();
            for($i = $index; $i <= $this->arrayLength;$i++)
                $array[$i] = $array[$i+1];
        }
        $this->arrayLength--;
        $sql = sprintf('DELETE FROM dcod_bookmark_category
                        WHERE bookmark_id = %s
                        AND category_id = %s
                        ',
        		$this->db->real_escape_string($bookmarkId),
        		$this->db->real_escape_string($this->id));
        $query = $db->query($sql);
        return(1);
    }
    public function removeCategory()
    {
        $sql=sprintf('DELETE FROM dcod_category
                      WHERE category_id=%s',
        		$this->db->real_escape_string($this->id));
        $this->db->query($sql)or die($this->db->error);
        
        $sql=sprintf('DELETE FROM dcod_bookmark_category
                      WHERE category_id=%s',
        		$this->db->real_escape_string($this->id));
        $this->db->query($sql)or die($this->db->error);
    }
    /**This function adds a quick category w/o owner or notes
     * 
     * @param <String> $name is the name of the category
     * @param <String> $description is what the category is
     */
    public function addNewCategory($name,$description)
    {
        $sql=sprintf('INSERT INTO dcod_category
                      (name, description)VALUES("%s","%s")',
        		$this->db->real_escape_string($name),
        		$this->db->real_escape_string($description));
        $this->db->query($sql)or die($this->db->error);
    }
    /** This function adds a complete new category as opposed to the abbreviated 
     * quick version above.
     * 
     * @param <String> $name is the name of the category
     * @param <String> $description is what the category is
     * @param <String> $owner is who manages the category and associated bookmarks
     * @param <String> $notes is any additional information that is needed about the cat
     */
    public function addFullNewCategory($name,$description,$owner,$notes)
    {
        $sql=sprintf('INSERT INTO dcod_category
(name,description,user_id,notes)VALUES("%s","%s","%s","%s")',
        		$this->db->real_escape_string($name),
        		$this->db->real_escape_string($description),
        		$this->db->real_escape_string($owner),
        		$this->db->real_escape_string($notes));
        $this->db->query($sql) or die($this->db->error);
    }
}
?>