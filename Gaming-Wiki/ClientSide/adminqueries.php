 <?php 
 class AdminTable {
    private $db;
    function __construct($d) {
        $this->db = $d;
    }
 /**
     * SQL for Removing a strategy from the DB
     */
    public function RemoveStrategy($gamename) {
       try {
            $query =  "DELETE FROM GameTable WHERE GameName = '$gameName' ";
           $this->db->ExecuteNonQuery($query);
        // return  $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            exit("Aborting: There was a database error when removing the strategy");
        }
    }
    
	 /**
     * SQL for Editing an Game from the DB
     */
    public function RemoveGame($gameName) {
       try {
		$query =  "DELETE FROM GameTable WHERE GameName = '$gameName' ";
		$this->db->ExecuteNonQuery($query);
		  } catch (PDOException $e) {
			  exit("Aborting: There was a database error when Editing the strategy");
		  }
    }
	/**
     * SQL for inserting a game into the DB
     */
    public function AddGame($gamename, $id) {
		   try {
					$query =  "INSERT INTO GameTable (GameName, Id) VALUES ('$gamename', $id)";
					$this->db->ExecuteNonQuery($query);
					echo"<script>alert('your Game has succesfully been added')</script>";
					;
		 } catch (PDOException $e) {
					 exit("Aborting: There was a database error when adding the strategy");
				}
    }
	 /**
     * SQL for RemoveAccount from the DB
     */
    public function RemoveAccount($username) {
			try {
					$query =  "DELETE FROM UserTable WHERE UserName = '$username' ";
					$this->db->ExecuteNonQuery($query);
					echo"<script>alert('your Account has succesfully been Removed')</script>";
			} catch (PDOException $e) {
			  exit("Aborting: There was a database error when Removing an Account");
		  }
    }
	public function Viewmetrics($articletitle){
		try {
		$query =  "SELECT ArticleTitle, Game, MAX(Votes) FROM ArticleTable GROUP BY game ";
		$this->db->ExecuteNonQuery($query);
			echo"<script>$query</script>";
			} catch (PDOException $e) {
			  exit("Aborting: There was a database error when veiwing the metrics");
		  }
	}
 }
	?>