<?php
	require_once("../Server/Services/article-table.php");
	require_once("../Server/DB/config.php");
	$popTag;
	$articleList;
	if($_SERVER['REQUEST_METHOD'] === 'POST')
	{	
		$db = new DB();	
		$db->connect();
		$articleTable = new ArticleTable($db);
		$popTags = $articleTable->getPopTags();
		$articleList = $articleTable->search($_POST['search'], 'empty');
	}
	else
	{
	 	$articleList = null;
		$db = new DB();	
		$db->connect();
		$articleTable = new ArticleTable($db);
		$popTags = $articleTable->getPopTags();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title> GamingWiki</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="search.css" />
 
</head>
<?php require_once('./initHeader.php') ?>
<div id="main">
	<div id="wrapperOfSearch">
		<div id="popTag">
		<?php print_r($popTags); ?>
		</div>
		<div id="dropTags">
			<form action='search.php' method='post'>
				<input type="text" name="search" id="search" col="5" />	
				<input type="button" id="submitOfSearch" value="Search" onclick="submitWithTags()"/>
				<input type="hidden" name="userTags" value="" id="commaSeperatedTags">
				<div id="userTag"></div>
			</form>
			<div id="wrapperOfAddTag">
				<input type="button" id="submitOfAdd" value="<--Add Tags" onclick="addTag()"/>
				<input type="text" name="addTag" id="addTag" />
			</div>
		</div>
	</div>
	<div id ="result">
		<?php print_r($articleList); ?>
	</div>
</div>
<?php require_once('./initFooter.php') ?>
</body>
	<script src = "./login/login.js"></script>
	<script src = "search.js"></script>
</html>
