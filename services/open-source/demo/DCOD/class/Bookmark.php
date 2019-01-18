<?php
/* File Name: Bookmark.php
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
class Bookmark {
    /** A persistent connection to the database
      *
      * @var <Database> A database connection class
      */
    protected $db;
    /** The ID of the bookmark we are working with
      *
      * @var <int> Unique ID of the bookmark
      */
    protected $id;
    /** The bookmark name
      *
      * @var <String> The name of the bookmark
      */
    protected $name;
    /** The date the bookmark was originally entered into the DCOD system
      *
      * @var <date> The date the bookmark was created
      */
    protected $dateCreated;
    /** The URL of the bookmark
      *
      * @var <String> The URl of the bookmark
      */
    protected $url;
    /** Whether or not the bookmark is an invalid URL (i.e. PHPs file_exists
      * cannot reach the URL
      *
      * @var <boolean> True if it is valid, false if not
      */
    protected $invalidUL;
    /** If the bookmark is enabled or not
      *
      * @var <boolean> True if the bookmark is enabled, false if not
      */
    protected $enabled;
    /** The number of times the bookmark has been accessed
      *
      * @var <int> The number of hits on the bookmark
      */
    protected $numHits;
    /** A description of the bookmark
      *
      * @var <String> A short description of the bookmark
      */
    protected $description;

    /** Default constructor for the bookmark class
      *
      * @param <int> $id If an ID is sent to the constructor, information about
      *                  the bookmark is saved.  If not, no information is saved
      */
    public function __construct($db, $id = NULL) {
        $this->db = $db;
        if (!is_null($id)) {
            $sql = sprintf('SELECT *
                            FROM dcod_bookmark
                            WHERE bookmark_id = %s
                            LIMIT 1',
                    $this->db->real_escape_string($id));
            $query = $this->db->query($sql);
            $array = $query->fetch_array();

            $this->id           = $id;
            $this->name         = $array['name'];
            $this->dateCreated  = $array['date_created'];
            $this->url          = $array['url'];
            $this->invalidUrl   = $array['invalid_url'];
            $this->enabled      = $array['enabled'];
            $this->numHits      = $array['num_hits'];
            $this->description  = $array['description'];
        }
    }

    /** Function to create a new bookmark
      *
      * @param <String> $name The name of the bookmark
      * @param <String> $url The URL of the bookmark
      * @param <int> $enabled Whether or not the bookmark is enabled, 1 if
      *                       enabled, 0 if not
      * @param <String> $description A short description about the bookmark
      * @return <boolean> Returns true if the query was successfully executed,
      *                   false if not
      */
    public function createBookmark($name,    $url,
                                   $enabled, $description,
                                   $invalid, $user_id) {
        $sql = sprintf('INSERT INTO dcod_bookmark
                       (date_created,
                        name,
                        url,
                        enabled,
                        description,                        
                        invalid_url)
                        VALUES (NOW(),
                                "%s",
                                "%s",
                                "%s",
                                "%s",
                                "%s")',
        		$this->db->real_escape_string($name),
        		$this->db->real_escape_string($url),
        		$this->db->real_escape_string($enabled),
        		$this->db->real_escape_string($description),
        		$this->db->real_escape_string($invalid));
        $query = $this->db->query($sql);
        $this->id = $this->db->insert_id;

        if ((bool) $query) {
            $this->setName($name);
            $this->setUrl($url);
            $this->setEnabled($enabled);
            $this->setDescription($description);
            $this->setUserId($user_id);
        }

        return (bool) $query;
    }

    /** Returns the name of the bookmark
      *
      * @return <String> The bookmark name
      */
    public function getName() { return $this->name; }
    
    /** Sets the name for the bookmark
      *
      * @param <String> $name The new name for the bookmark
      */
    public function setName($name) { $this->name = $name; }

    /** Returns the ID of the current bookmark
      *
      * @return <int> Returns an integer representing the unique identifie of
      *               the current bookmark
      */
    public function getId() { return $this->id; }

    /** Returns the date the date the bookmark was entered into the system
      *
      * @return <date> A MySQL timestamp of the date the bookmark was created
      */
    public function getDateCreated() { return $dateCreated; }

    /** Gets the URL of the bookmark
      *
      * @return <String> The bookmark URL
      */
    public function getUrl() { return $this->url; }

    /** Sets the bookmark URL to a new URL
      *
      * @param <String> $url The new URL of the bookmark
      */
    public function setUrl($url) { $this->url = $url; }

    /** Gets whether or not the URL is a valid URL
      *
      * @return <boolean> True if the bookmark is valid, false if not
      */
    public function getInvalidUrl() { return $this->invalidUrl; }

    /** Gets whether or not the bookmark is enabled
      *
      * @return <boolean> True if enabled, false if not
      */
    public function getEnabled() { return $this->enabled; }

    /** Sets whether or not the bookmark is enabled
      *
      * @param <int> $enabled 1 if the bookmark is enabled, 0 if not
      */
    public function setEnabled($enabled) { $this->enabled = $enabled; }

    /** Gets the number of times the URL has been accessed
      *
      * @return <int> The number of accesses for the URL
      */
    public function getNumHits() { return $this->numHits; }

    /** Gets the description of the URL
      *
      * @return <String> The URL description
      */
    public function getDescription() { return $this->description; }

    /** Sets a new URL description
      *
      * @param <String> $description The new URL description
      */
    public function setDescription($description) { $this->description = $description; }

    /** Gets the user ID of the owner of the bookmark
      *
      * @return <String> The user ID of the bookmark owner
      */
    public function getUserId() { return $this->user_id; }

    /** Sets the user ID
      *
      * @param <type> $newuserId The new user ID to be set
      */
    public function setUserId($newUserId) { $this->user_id = $newUserId; }

    /** Returns a 2D array of all of the corresponding categories associated
      * with this bookmark
      *
      * @return <String[][]> A 2D array represnting all of the category names
      *                     and their IDs
      */
    public function getCategories() {
        $sql = sprintf('SELECT
                            c.category_id,
                            c.name
                        FROM
                            dcod_bookmark_category bc,
                            dcod_category c
                        WHERE
                            bc.category_id = c.category_id AND
                            bc.bookmark_id = %s',
                        $this->db->real_escape_string($this->id));
        $query = $this->db->query($sql);
        $outArray = array();
        $counter = 0;
        while ($array = $query->fetch_array()) {
            $outArray[$counter]['category_id'] = $array['category_id'];
            $outArray[$counter++]['name'] = $array['name'];
        }
        return $outArray;
    }

    /** Returns all of the tags associated with this bookmark
      *
      * @return <String[][]> Retusn a 2D array of all of the tag names and their
      *                      IDs
      */
    public function getTags() {
        $sql = sprintf('SELECT
                            t.tag_id,
                            t.name
                        FROM
                            dcod_bookmark_tag bt,
                            dcod_tag t
                        WHERE
                            bt.tag_id = t.tag_id AND
                            bt.bookmark_id = %s',
        		$this->db->real_escape_string($this->id));
        $query = $this->db->query($sql);

        $outArray = array();
        $counter = 0;
        while ($array = $query->fetch_array()) {
            $outArray[$counter]['tag_id'] = $array['tag_id'];
            $outArray[$counter++]['name'] = $array['name'];
        }

        return $outArray;
    }

    /** Returns whether or not the URL is a valid URL
      *
      * @param <String> $url If set, this method will test this URL, instead
      *                      of the URL for the bookmark
      * @return <boolean> True if a valid URL, false if not
      */
    public function isValidUrl($url = NULL) {
        return (is_null($url)) ?   (bool) !$this->invalidUrl:file_exists($url);
    }

    /** One ups a bookmark on hit counts
      *
      * @return <boolean> True if the query was successfully executed, false if
      *                   not
      */
    public function addHit() {
        $sql = sprintf('UPDATE dcod_bookmark
                        SET num_hits = num_hits + 1
                        WHERE bookmark_id = "%s"',
        		$this->db->real_escape_string($this->id));
        $query = $this->db->query($sql);

        return (bool) $query;
    }

    /** Adds a category to the bookmark
      *
      * @param <int> $categoryId The ID of the new category
      * @return <boolean> True if a successfuly query, false if not
      */
    public function addCategory($categoryId) {
        $sql = sprintf('INSERT INTO dcod_bookmark_category
                       (bookmark_id,
                        category_id)
                        VALUES ("%s",
                                "%s")',
        		$this->db->real_escape_string($this->id),
        		$this->db->real_escape_string($categoryId));
        $query = $this->db->query($sql);

        return (bool) $query;
    }

    /** Removes a category from the bookmark
     *
     * @param <bookmark> $bookmarkId The id of the bookmark to remove the category from
     * @param <category> $categoryId The id of the category object to be removed from the bookmark
     * @return <boolean> True if a successfuly query, false if not
     */
     public function removeCategory($bookmarkId, $categoryId) {
         $sql = sprintf('DELETE FROM dcod_bookmark_category
                         WHERE bookmark_id="%s" AND category_id="%s"',
         		$this->db->real_escape_string($bookmarkId),
         		$this->db->real_escape_string($categoryId));
        $query = $this->db->query($sql);

        return (bool) $query;
     }

    /** Adds a tag to the bookmark
      *
      * @param <int> $tagId The ID of the new tag
      * @return <boolean> True if successful query, false if not
      */
    public function addTag($tagId) {
        if (is_int($tagId)) {
            $sql = sprintf('INSERT INTO dcod_bookmark_tag
                           (bookmark_id,
                            tag_id)
                            VALUES ("%s",
                                    "%s")',
            		$this->db->real_escape_string($this->id),
            		$this->db->real_escape_string($tagId));
            $query = $this->db->query($sql);
        } else {
            $tag = new Tag($this->db);
            $tag->createTag($tagId);
        }

        return (bool) $query;
    }

    /** Removes a tag from the bookmark
     *
     * @param <bookmark> $inBookmark The bookmark to remove the tag from
     * @param <category> $inCategory The tag object to be removed from the bookmark
     * @return <boolean> True if a successfuly query, false if not
     */
     public function removeTag($bookmarkId, $tagId) {
         $sql = sprintf('DELETE FROM dcod_bookmark_tag
                         WHERE bookmark_id="%s" AND tag_id="%s"',
         		$this->db->real_escape_string($bookmarkId),
         		$this->db->real_escape_string($tagId));
        $query = $this->db->query($sql);

        return (bool) $query;
     }

    /** Updates the bookmark to the current set values stored in this class
      *
      * @return <boolean> True if a successful query, false if not
      */
    public function updateBookmark($invalid) {
        $sql = sprintf('UPDATE
                            dcod_bookmark
                        SET
                            name         = "%s",
                            url          = "%s",
                            invalid_url  = "%s",
                            enabled      = "%s",
                            description  = "%s"                            
                        WHERE
                            bookmark_id  =  %s',
        		$this->db->real_escape_string($this->name),
        		$this->db->real_escape_string($this->url),
        		$this->db->real_escape_string($invalid),
        		$this->db->real_escape_string($this->enabled),
        		$this->db->real_escape_string($this->description),
        		$this->db->real_escape_string($this->id));
        $query = $this->db->query($sql);

        return (bool) $query;
    }

    /** Marks the URL as an invalid URL
      *
      * @return <boolean> True if successful query, false if not
      */
    public function markInvalid() {
        $sql = sprintf('UPDATE dcod_bookmark
                        SET invalid_url = 1
                        WHERE bookmark_id = "%s"',
        		$this->db->real_escape_string($this->id));
        $query = $this->db->query($sql);

        return (bool) $query;
    }
    function __toString() {
        $outString="";
        $outString="The id is";
        $outString.=$this->id;
        $outString.="the name is";
        $outString.=$this->name;
        return $outString;
    }
}
?>
