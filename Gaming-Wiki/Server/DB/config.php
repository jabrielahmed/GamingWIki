<?php
    define("DB_HOST", "localhost");
    define("DB_NAME", "fischt77");
    define("DB_USER", "fischt77");
    define("DB_PASS", "tyler123");
    define("QUESTION_ACTIVE", 1);
    define("QUESTION_INACTIVE", 0);
    // require_once("../Services/game-table.php");
    class DB {
        private $dbh = null;

        function __construct() {
        }

        public function connect() {
            try {
            $this->dbh = new PDO("mysql:dbname=" . DB_NAME . ";host=" . DB_HOST,
                            DB_USER,
                            DB_PASS,
                            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
            } catch (PDOException $e) {
                echo"$e";
                exit();
            }
    }

    public function disconnect() {
        if(isset($this->dbh) && $this->dbh !== null){
            $this->dbh = null;
        }
    }
    /**
     * Executes a NonQuery type of SQL statement, i.e. DELETE, UPDATE, INSERT
     * @param query a string containing the SQL syntax
     * @param params (optional) an associative array containing column name => column value pairs
     * @return int number of rows affected on success, death on error
     */
    public function ExecuteNonQuery($query) {
        try {
            $stmt = $this->dbh->prepare($query);
            $stmt->execute();
        } catch (PDOexception $e) {
            // TODO: Actual error management
            die($e->getMessage());
        }
    }
    /**
     * Executes a Query type of SQL statement, i.e. SELECT
     * @param query a string containing the SQL syntax
     * @param params (optional) an associative array containing column name => column value pairs
     * @return array assocative array containing each record found
     */
    public function ExecuteQuery($query) {
        try {
            $stmt = $this->dbh->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOexception $e) {
            // TODO: Actual error management
            die($e->getMessage());
        }
    }

        
    }
    // $db = new DB();
    // $db->connect();
    // $game = new GameTable($db);
    // // $game->insert("dog", "not cat");
    // $game->get("mario");
   
?>