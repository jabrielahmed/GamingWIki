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
 }
?>