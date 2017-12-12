 <?php 
 class UserTable {
    private $db;
    function __construct($d) {
        $this->db = $d;
    }
	
	 public function getAll($username) {
        $query = "SELECT * FROM  UserTable WHERE UserName = '$username'";
        $response = $this->db->ExecuteQuery($query);
        return $response;
    }
	
	public function RemoveAccount($username) {
		
    $query =  "DELETE FROM UserTable WHERE UserName = '$username' ";
    $this->db->ExecuteNonQuery($query);
	}
 }
?>