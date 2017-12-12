<?php 
class UserTable {
    private $db;
    function __construct($d) {
        $this->db = $d;
    }

    /**
     * SQL for inserting a game into the DB
     */
    public function addUser($userName, $password, $email, $firstName, $lastName) {
        try {
            $hash = crypt($password,'$2y$12$$');
            $query = "INSERT INTO UserTable (UserName, Password, Email, FirstName, LastName, IsAdmin)
                      VALUES ('$userName', '$hash', '$email', '$firstName', '$lastName', 0)";
            $this->db->ExecuteNonQuery($query);
            echo"<script>alert('your account has succesfully been added')</script>";
        } catch(Exception $e){
            echo"<script>Something went wrong with adding your account</script>";
        }
    }
    /**
     * gets a user
     */
    public function getUser($userName) {
        try {
            $query = "SELECT * FROM UserTable WHERE UserName = '$userName'";
            $this->db->ExecuteQuery($query);
        } catch(Exception $e) {
            echo "$e";
        }
    }
    public function userLogin($userName, $password) {
        try {
            $hash = crypt($password,'$2y$12$$');
            $query = "SELECT * FROM UserTable WHERE UserName = '$userName' AND Password = '$hash'";
            $response = $this->db->ExecuteQuery($query);
            return $response;
        } catch (Exception $e) {
            echo"$e";
        }
    }
    

    /**
     * SQL for Selecting a single Game record from the DB
     */
    public function getGame($gameName, $password) {
        $query = "SELECT * FROM UserTable WHERE UserName = '$gameName' AND Password ='$password' ";
        $var = $this->db->ExecuteQuery($query);
        // print_r($var);
    }
}
?>
