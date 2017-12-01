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
    public function insert($title, $author, $html, $gameName, $customTag) {
        $query = "INSERT INTO ArticleTable(ArticleTitle,Author,HTML,GameName,Custom,Votes,Voters) 
				VALUES ($title, $author, $html, $gameName, $customTag, 1, $author)";
        $this->db->ExecuteNonQuery($query);
    }

    /**
     * SQL for Selecting a single article record from the DB
     */
    public function getPopTags() {
        $query = "SELECT Custom FROM ArticleTable ORDER BY Votes DESC LIMIT 5";
        $stmt = $this->db->ExecuteQuery($query);       
        return $stmt;
    }
	
	public function search($search, $refineSearch)
	{
		$query = "SELECT * FROM ArticleTable WHERE Custom LIKE '%$search%'
											 OR GameName LIKE '%$search%'
											 OR ArticleTitle LIKE '%$search%'
											 ORDER BY Votes DESC
											 LIMIT 10";
        $stmt = $this->db->ExecuteQuery($query);       
        return $stmt;
	}
}

?>
