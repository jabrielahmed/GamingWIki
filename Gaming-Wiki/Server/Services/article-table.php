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
    public function insert($title, $author, $html, $game, $customTag) {
        $query = "INSERT INTO ArticleTable(ArticleTitle,Author,HTML,Game,Custom,Votes,Voters) 
				VALUES ($title, $author, $html, $game, $customTag, 1, $author)";
        $this->db->ExecuteNonQuery($query);
    }

    /**
     * SQL for Selecting a single article record from the DB
     */
    public function getPopTags() {
        $query = "SELECT Game FROM ArticleTable ORDER BY Votes DESC LIMIT 5";
        $stmt = $this->db->ExecuteQuery($query);
        return $stmt;
    }
	
	public function search($search, $refineSearch, $limit)
	{
		$query = "SELECT ArticleTitle, Author, Game, Genre, Console, Custom, Votes, Id
				FROM ArticleTable
				WHERE Custom LIKE '%$search%'
				OR Game LIKE '%$search%'
				OR ArticleTitle LIKE '%$search%'
				ORDER BY Votes DESC
				LIMIT " . $limit;
        $stmt = $this->db->ExecuteQuery($query);       
        return $stmt;
	}
}

?>
