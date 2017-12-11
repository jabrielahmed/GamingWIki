<?php 
    require_once("../Server/Services/article-table.php");
    require_once("../Server/DB/config.php");
    $db = new DB();
    $db->connect();
    $articleTable = new ArticleTable($db);
    $response = $articleTable->getAll();
    $response = json_encode($response);
    echo"$response";
?>