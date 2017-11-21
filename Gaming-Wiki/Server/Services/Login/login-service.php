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
        try {
            // $hash = password_hash($password);
            $hash = crypt($password,'$2y$12$$');
        } catch(Exception $e){
            echo "$e";
        }
        $query = "INSERT INTO UserTable (UserName, Password)
                  VALUES ('$userName', '$hash')";
                  
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
