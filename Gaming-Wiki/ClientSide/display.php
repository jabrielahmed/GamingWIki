<?php
	require_once("../Server/Services/article-table.php");
	require_once("../Server/DB/config.php");
	$articleList;
	/*if($_SERVER['REQUEST_METHOD'] === 'POST')
	{	*/
		$db = new DB();	
		$db->connect();
		$articleTable = new ArticleTable($db);
		$article = $articleTable->getArticle($_POST['article']);
		
	/*}
	else
	{
	 	$article = null;
	}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title> GamingWiki</title>
<link rel="stylesheet" type="text/css" href="style.css" />

 
</head>
<?php require_once('./initHeader.php') ?>
<div id="main">
	
		
		<?php $html= $article[0]['HTML'];
		echo ($html); ?>
	
		
</div>
<?php require_once('./initFooter.php') ?>
</body>
	<script src = "./login/login.js"></script>
</html>
