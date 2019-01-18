<?php
/* File Name: Tag.php
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
class Tag {
    /**A persistant conection to the database
     *
     * @var <Database> A datbase connection class
     */
    protected $db;
    /**The database id of the tag we are working with
     *
     * @var <int> Unique id of the tag
     */
    protected $id;
    /**The name of the tag
     *
     * @var <String> The name of the Tag
     */
    protected $name;
    /**Array of Bookmarks with this tag
     *
     * @var <Array> The array of bookmarks with this tag
     */
    protected $array;
    /**Stores the length of the Array of bookmarks.
     *
     * @var <int> The length of the Array of bookmarks
     */
    protected $arrayLength;

//Constructors
    /**The Default constructor,
     * used when creating new Tags.
     *
     */
    public function  __construct($db, $id = -1) {
    	$this->db = $db;
        $this->arrayLength = 0;
        $this->array = array();
        if (is_null($id)){
            $this->name = null;
            $this->array = array();
        } else {
            //get the name of the tag
            $sql = sprintf('SELECT name,b.z tagCount
                            FROM dcod_tag a,(SELECT count(tag_id) z FROM dcod_bookmark_tag WHERE tag_id="%s" GROUP BY tag_id) b
                            WHERE a.tag_id = "%s"
                            LIMIT 1',
                    $this->db->real_escape_string($id),
                    $this->db->real_escape_string($id));
            $query = $this->db->query($sql) or die($this->db->error);
            $resultArray = $query->fetch_array();

            $this->id           = $id;
            $this->name         = $resultArray['name'];
            $this-> arrayLength = $resultArray['tagCount'];
            // gets the array of bookmarks that go with this tag.

        }


    }

//Getters and Setters
    /**Returns the id of the tag.
     *
     * @return <int> returns the id of the tag.
     */
    public function getId() {
         return($this->id);
    }
    /**Changes the id to the id passed
     *
     * @param <int> $inId, the id to set the tag to
     */
    public function setId($inId){
        $this->id = $inId;
    }
    /**Returns the name of the tag.
     *
     * @return <String> The name of the Tag.
     */
    public function getName(){
        return($this->name);
    }
    /**Changes the name of the tag to the name passed
     *
     * @param <String> $inName, the name to give the tag
     */
    public function setName($inName){
        $this->name = $inName;
    }
    /**Returns the array of bookmarks associated with this tag.
     *
     * @return <array> Array of Bookmarks associated with this tag.
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

    /**updates the tag in the database with the information in the current tag
     *
     * @return <boolean> returns true if the update was successful
     */
    public function updateTag(){
         $sql = sprintf('UPDATE
                            dcod_tag
                        SET
                            name = "%s"
                        WHERE
                            tag_id  =  "%s"',
         		$this->db->real_escape_string($this->name),
         		$this->db->real_escape_string($this->id));
         $query = $this->db->query($sql)or die($this->db->error);

        return (bool) $query;
    }

//Additional Functions

    /** Creates a new tag
      *
      * @param <String> $tagName The name of the new Tag
      */
    public function createTag($tagName) {
        // Create tag in the database
        $sql = sprintf('INSERT INTO dcod_tag
                       (name)
                        VALUES ("%s")',
        		$this->db->real_escape_string($tagName));
        $query = $this->db->query($sql);

        // Set appropriate class variables
        $this->name = $tagName;
        $this->id   = $this->db->insert_id;

        // Return if the query executed properly or not
        return (bool) $query;
    }
    /**Creates an array of the associated bookmarks     
     *
     */
    public function getBookmarks(){

        $sql = sprintf('SELECT bookmark_id
                            FROM dcod_bookmark_tag
                            WHERE tag_id = "%s"
                            ',
        		$this->db->real_escape_string($this->id));
            $query = $this->db->query($sql);
            $i=0;
            while ($resultArray = $query->fetch_array()){
                $this->array[$i] = new Bookmark($this->db, $resultArray['bookmark_id']);                
                $i++;
            }

    }


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
        for ($i = 0; $i <= $this->arrayLength; $i++){
            if ($this->array[$i]->getId() == $bookmarkId)
               $return = $i;
         }
         return($return);
    }
    
    /**Adds a bookmark to the tag array if it is not in the tag already
     *
     * @param <bookmark> $inBookmark, the bookmark to add to the tag
     * @return <int> Returns 1 if successful, returns 0 if failed
     */
     
    public function addBookmark($inBookmark){
        //check for the bookmark in the array
        if($this->findBookmark($inBookmark) != -1)
            //bookmark is already associated with this tag
            return(0);
        else{
            //adds the bookmark and increments $arrayLength
            $this->array[$this->arrayLength] = $inBookmark;
            $this->arrayLength++;
            
            $sql = sprintf('INSERT INTO dcod_bookmark_tag
                       (bookmark_id,
                        tag_id)
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
                $this->array[$i] = $array[$i+1];
        }
        $arrayLength--;
        $sql = sprintf('DELETE FROM dcod_bookmark_tag
                        WHERE bookmark_id = %s
                        AND tag_id = %s
                        ',
        		$this->db->real_escape_string($bookmarkId),
        		$this->db->real_escape_string($this->id));
        $query = $this->db->query($sql);
        return(1);
    }

public function removeTag()
    {
        $sql=sprintf('DELETE from dcod_tag
                      WHERE tag_id=%s',
        		$this->db->real_escape_string($this->id));
        $query=$this->db->query($sql);
    }
public static function addNewTag($db, $name)
    {
        $sql=sprintf('INSERT INTO dcod_tag
                      (name)VALUES("%s")',
        		$db->real_escape_string($name));
        $db->query($sql) or die($db->error);
    }
}
?>