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
<head>
<meta charset="utf-8"/>
<title>GamingWiki</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="search.css" />
 
</head>
<?php require_once('./initHeader.php') ?>
<body onload="displayQuery()">
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
				<p>Add a search tag to find only the things that matter to you!</p>
				<input type="button" class="submitOfAdd" value="<<Add Game<<" onclick="addGameTag()"/>
				<input type="text" class="addTag" id="addGameTag"/><br>
				<input type="button" class="submitOfAdd" value="<<Add Genre<<" onclick="addGenreTag()"/>
				<input type="text" class="addTag" id="addGenreTag"/><br>
				<input type="button" class="submitOfAdd" value="<<Add Console<<" onclick="addConsoleTag()"/>
				<input type="text" class="addTag" id="addConsoleTag"/><br>
				<input type="button" class="submitOfAdd" value="<<Add Custom<<" onclick="addCustomTag()"/>
				<input type="text" class="addTag" id="addCustomTag"/>
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
