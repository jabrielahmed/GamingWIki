<!DOCTYPE html>
<html>
<head>
</head>
    <body>
        <form action="test.php" method="POST">
            <input name="gameName" />
            <input type="submit" />
        </form>
<?php
require_once("./Services/game-table.php");
require_once("./DB/config.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db = new DB();
    $db->connect();
    $gameTable = new GameTable($db);
    $gameTable->get('mario');

    
}
?>
    </body>
</html>