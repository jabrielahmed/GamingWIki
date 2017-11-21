<?php

/**
 * Service for dealing with the Article table
 */
class ArticleTable {
    private $db;
    function __construct($d) {
        $this->db = $d;
    }

    /**
     * SQL for inserting an article into the DB
     */
    public function insert($title, $html, $gameName, $customTag) {
        $query = "INSERT INTO INSERT INTO ArticleTable(Title,HTML,GameName,CustomTag) 
				VALUES ($title, $html, $gameName, $customTag)";
        $this->db->ExecuteNonQuery($query);
    }

    /**
     * SQL for Selecting a single article record from the DB
     */
    /*public function get($gameName) {
        echo"$gameName";
        $query = "SELECT * FROM GameTable WHERE GameName = '$gameName' ";
        $var = $this->db->ExecuteQuery($query);
        print_r($var);
        return $var;
    }*/
}

?>