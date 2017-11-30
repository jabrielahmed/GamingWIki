 <?php 
 
 /**
     * SQL for Removing a strategy from the DB
     */
    public function RemoveStrategy($gamename) {
       try {
    $query =  "SELECT * FROM UserTable WHERE UserName = '$gameName' ";
    $stmt = $db->prepare($query);
    $stmt->execute();
	
    return  $stmt->fetchAll(PDO::FETCH_ASSOC);
	
  } catch (PDOException $e) {
      db_disconnect();
      exit("Aborting: There was a database error when removing the strategy");
  }
}
	

    
	 /**
     * SQL for Editing an Game from the DB
     */
    public function RemoveGame($gamename, $description) {
       try {
    $query =  "SELECT * FROM GameTable WHERE GameName = '$gameName' ";
    $stmt = $db->prepare($query);
    $stmt->execute();
	
    return  $stmt->fetchAll(PDO::FETCH_ASSOC);
	
  } catch (PDOException $e) {
      db_disconnect();
      exit("Aborting: There was a database error when Editing the strategy");
  }
    }
	 /**
     * SQL for Editing an Game from the DB
     */
    public function AddGame($gamename, $description) {
       try {
    $query =  "INSERT INTO GameTable WHERE GameName = '$gameName' ";
    $stmt = $db->prepare($query);
    $stmt->execute();
	
    return  $stmt->fetchAll(PDO::FETCH_ASSOC);
	
  } catch (PDOException $e) {
      db_disconnect();
      exit("Aborting: There was a database error when Editing the strategy");
  }
    }
	 /**
     * SQL for RemoveAccount from the DB
     */
    public function RemoveAccount($username, $password) {
       try {
    $query =  "SELECT * FROM account WHERE account = '$username' ";
    $stmt = $db->prepare($query);
    $stmt->execute();
	
    return  $stmt->fetchAll(PDO::FETCH_ASSOC);
	
  } catch (PDOException $e) {
      db_disconnect();
      exit("Aborting: There was a database error when Removing an Account");
  }
    }
	?>