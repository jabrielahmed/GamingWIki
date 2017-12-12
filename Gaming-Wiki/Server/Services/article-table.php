<?php

/**
 * Service for dealing with the Article table
 */
class ArticleTable {
    private $db;
	function __construct($d)
	{
        $this->db = $d;
    }

    /**
     * SQL for inserting an article into the DB
     */
    public function insert($title, $author, $html, $game, $genre, $console, $customTag) {
        $query = "INSERT INTO ArticleTable (ArticleTitle,Author,HTML,Game,Genre,Console,Custom,Votes,Upvoters) 
				VALUES ('$title', '$author', '$html', '$game', '$genre', '$console', '$customTag', '1', '$author');";
        $this->db->ExecuteNonQuery($query);
    }
	
	public function RemoveArticle($articleID) {
		
    $query =  "DELETE * FROM ArticleTable WHERE Id = '$articleID' ";
    $this->db->ExecuteNonQuery($query);
  
 }
    /**
     * SQL for Selecting a single article record from the DB
     */
	public function getPopTags() 
	{
        $query = "SELECT Game, Genre, Custom FROM ArticleTable ORDER BY Votes DESC LIMIT 15";
        $stmt = $this->db->ExecuteQuery($query);
        return $stmt;
    }
	public function upvote($articleId, $userName)
	{
		$userName = ", ".$userName;
		$query= "UPDATE ArticleTable SET Upvoters = CONCAT(UpVoters, '$userName')  WHERE Id = $articleId";
		$stmt = $this->db->ExecuteNonQuery($query);
		$query= "UPDATE ArticleTable SET Votes = Votes + 1  WHERE Id = $articleId";
		$stmt = $this->db->ExecuteNonQuery($query);
	}
	public function search($search, $refineSearch, $limit)
	{
		$index;
		$game;
		$gameQuery = "";
		$genre;
		$genreQuery = "";
		$console;
		$consoleQuery = "";
		$custom;
		$customQuery = "";
		$tag;
		$customSeperated = "";
		
		$index = strpos($refineSearch, "game:");
		if($index !== false){
			$tag = substr($refineSearch, $index + 5);
			$index = strpos($tag, ",");
			$game = trim(substr($tag, 0, $index));
			$gameQuery = " AND Game = '$game'";
		}
		
		$index = strpos($refineSearch, "genre:");
		if($index !== false){
			$tag = substr($refineSearch, $index + 6);
			$index = strpos($tag, ",");
			$genre = trim(substr($tag, 0, $index));
			$genreQuery = " AND Genre = '$genre'";
		}
		
		$index = strpos($refineSearch, "console:");
		if($index !== false){
			$tag = substr($refineSearch, $index + 8);
			$index = strpos($tag, ",");
			$console = trim(substr($tag, 0, $index));
			$consoleQuery = " AND Console = '$console'";
		}
		
		$query = "SELECT ArticleTitle, Author, Game, Genre, Console, Custom, Votes, Id
				FROM ArticleTable
				WHERE (ArticleTitle LIKE '%$search%'
				OR Game LIKE '%$search%'
				OR Genre LIKE '%$search%'
				OR Console LIKE '%$search%'
				OR Custom LIKE '%$search%')";
		$query .= $gameQuery;
		$query .= $genreQuery;
		$query .= $consoleQuery;
		
		$index = strpos($refineSearch, "custom:");
		while($index !== false){
			$refineSearch = substr($refineSearch, $index + 7);
			$index = strpos($refineSearch, ",");
			$custom = trim(substr($refineSearch, 0, $index));
			$query .= " AND Custom LIKE '%$custom%'";
			$index = strpos($refineSearch, "custom:");
		}
		
		$query .= " ORDER BY Votes DESC LIMIT ".$limit;
        $stmt = $this->db->ExecuteQuery($query);       
        return $stmt;
	}
	
	public function getArticle($search)
	{
		$query = "SELECT HTML, Author, ArticleTitle, Upvoters, Downvoters
				FROM ArticleTable
				WHERE Id = ".$search."
				LIMIT 1";
		$stmt = $this->db->ExecuteQuery($query);
		return $stmt;
	}
	
	public function getAll()
	{
		$query = "SELECT *
				FROM ArticleTable";				
		$stmt = $this->db->ExecuteQuery($query);
		return $stmt;
	}
	
	public function getArticleByName($username)
	{
		$query = "SELECT ArticleTitle,Id
				FROM ArticleTable
				WHERE Author = '$username'";
		$stmt = $this->db->ExecuteQuery($query);
		return $stmt;
	}
}
?>
