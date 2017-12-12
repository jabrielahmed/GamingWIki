<?php 
    require_once("../Server/Services/article-table.php");
    require_once("../Server/DB/config.php");
    $db = new DB();
    $db->connect();
    $articleTable = new ArticleTable($db);
    // $response = json_encode($_GET);
    $response = json_encode($articleTable->downvote($_GET['user'],$_GET['title']));
    echo "$response";
?>