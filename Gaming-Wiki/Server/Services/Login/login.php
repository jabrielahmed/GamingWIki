<?php
require_once("../../DB/config.php");
    require_once("./login-service.php");
    echo"login test";
    $db = new DB();
    $db->connect();
    $var = new UserTable($db);
    print_r($_GET);
    // $var->getTokenForUser($_GET['username'],$_GET['password']);
    $var->addUser($_GET['username'],$_GET['password']);
?>