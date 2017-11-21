<?php
require_once("../../DB/config.php");
    require_once("./login-service.php");
    $thing =phpversion();
    echo"$thing";
    $db = new DB();
    $db->connect();
    $var = new UserTable($db);
    
    // $var->getTokenForUser($_GET['username'],$_GET['password']);
    $var->addUser($_GET['username'],$_GET['password']);
?>
