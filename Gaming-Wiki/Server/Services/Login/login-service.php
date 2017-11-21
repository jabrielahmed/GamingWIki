<?php 
class UserTable {
    private $db;
    function __construct($d) {
        $this->db = $d;
    }

    /**
     * SQL for inserting an Game into the DB
     */
    public function addUser($userName, $password) {
        $query = "INSERT INTO UserTable (UserName, Password)
                  VALUES ('$userName', '$password')";
        $this->db->ExecuteNonQuery($query);
    }

    /**
     * SQL for Selecting a single Game record from the DB
     */
    public function getTokenForUser($gameName, $password) {
        echo"$gameName $password";
        $query = "SELECT * FROM UserTable WHERE UserName = '$gameName' AND Password ='$password' ";
        $var = $this->db->ExecuteQuery($query);
        print_r($var);
    }
}
?>