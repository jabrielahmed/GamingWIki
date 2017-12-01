<?php 
    require_once("../Server/Services/game-table.php");
    require_once("../Server/DB/config.php");
    $db = new DB();
    $db->connect();
    $gameTable = new GameTable($db);
    $response = $gameTable->getAll();
    $response = json_encode($response);
    echo"$response";
?>