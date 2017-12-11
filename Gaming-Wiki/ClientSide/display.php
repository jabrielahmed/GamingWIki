<?php
	require_once("../Server/Services/article-table.php");
	require_once("../Server/DB/config.php");
	$article;
	$db = new DB();	
		$db->connect();
		$articleTable = new ArticleTable($db);
		$articleTable->upvote(1, "bob");
	
	if($_SERVER['REQUEST_METHOD'] === 'POST')
	{
		$db = new DB();	
		$db->connect();
		$articleTable = new ArticleTable($db);
		$article = $articleTable->getArticle($_POST['article']);
	}
	else
	{
	 	$article = null;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>GamingWiki</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="display.css" />
</head>
	<?php require_once('./initHeader.php') ?>
<div id="main">
	<table>
		<tr>
			<td>
				<?php echo $article[0]['ArticleTitle']; ?>
			</td>
			<td>
				By: <?php echo $article[0]['Author']; ?>
			</td>
			<td>
				<img id="upvote" src="upvote.png" height=20 width=20 onclick="upvote()">
				<img id="downvote" src="downvote.png" height=20 width=20 onclick="downvote()">
			</td>
		</tr>
	</table>
	<?php echo $article[0]['HTML']; ?>
</div>
	<?php require_once('./initFooter.php') ?>
</body>
	<script src = "login.js"></script>
	<script src = "display.js"></script>
</html>
