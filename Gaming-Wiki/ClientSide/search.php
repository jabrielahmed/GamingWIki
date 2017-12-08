<?php
	require_once("../Server/Services/article-table.php");
	require_once("../Server/DB/config.php");
	$db = new DB();	
	$db->connect();
	$articleTable = new ArticleTable($db);
	$popTags = $articleTable->getPopTags();
	$articleList;
	if($_SERVER['REQUEST_METHOD'] === 'POST')
	{
		$search = isset($_POST['search']) ? $_POST['search'] : '';
		$tags = isset($_POST['userTags']) ? $_POST['userTags'] : '';
		$limit = isset($_POST['limit']) ? $_POST['limit'] : '10';
		$articleList = $articleTable->search($search, $tags, $limit);
	}
	else
	 	$articleList = null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>GamingWiki</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="search.css" />
 
</head>

<body onload="displayQuery()">
<?php 
		if(session_id() == '') {
			session_start();
			
		}
	?>
<?php require_once('./initHeader.php') ?>
<div id="main">
	<div id="wrapperOfSearch">
		<div id="popTag" ondrop="drop(event)" ondragover="allowDrop(event)">
			<?php print_r($popTags); ?>
		</div>
		<div id="dropTags">
			<form action='search.php' method='post' id="searchForm">
				<input type="text" name="search" id="search" col="5" />	
				<input type="button" id="submitOfSearch" value="Search" onclick="submitTags()"/>
				<input type="hidden" name="userTags" value="" id="commaSeperatedTags">
				<div id="userTag" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
			</form>
			<div id="wrapperOfAddTag">
				<input type="button" id="submitOfAdd" value="<--Add Tags" onclick="addTag()"/>
				<input type="text" name="addTag" id="addTag"/>
				<p>Enter a search tag. Examples:<br>guide, co-op, game:halo, genre:FPS, console:XBox</p>
			</div>
		</div>
	</div>
	<div id ="result">
		<?php print_r($articleList); ?>
	</div>
</div>
<?php require_once('./initFooter.php') ?>
</body>
	<script src = "login.js"></script>
	<script src = "search.js"></script>
</html>
