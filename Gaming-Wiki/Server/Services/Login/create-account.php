<?php
require_once("../../DB/config.php");
    require_once("./login-service.php");
    $db = new DB();
    $db->connect();
    $userTable = new UserTable($db);
    if($_POST['password'] == $_POST['passwordr']) {
            $userTable->addUser($_POST['username'], $_POST['password'], $_POST['email'], $_POST['firstname'], $_POST['lastname']);
    } else {
        echo"password did not match.";
    }
?>
