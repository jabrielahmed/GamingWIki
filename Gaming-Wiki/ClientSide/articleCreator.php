<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title> GamingWiki</title>
	<link rel = "stylesheet" type = "text/css" href = "style.css"/>
	<link rel = "stylesheet" type = "text/css" href = "articleCreator.css"/>
</head>
<body>
	<?php 
		if(session_id() == '') {
			session_start();
		}
	?>
	
	<?php require_once('./initHeader.php') ?>
	<div id = "main">
	<table id = "table">
		<tr>
			<td class = "tableCell">
				<textarea rows = "1" id = "articleTitle" placeholder = "Title"></textarea>
				<textarea rows = "40" id = "textbox" placeholder = "HTML and Inline CSS here."></textarea>
				<textarea rows = "1" id = "gameTitle" placeholder = "Game Name"></textarea>
				<input type = "button" class = "previewButtons" onclick = "insertPreview()" value = "Insert Preview">
				<input type = "button" class = "previewButtons" value = "Submit Article">
				<textarea rows = "1" id = "tagTable" placeholder = "<genre:arcade> <console:xboxone> <boss guide>"></textarea>
			</td>
			<td class = "tableCell">
				<div id = "preview"></div>
			</td>
		</tr>
	</table>
	</div>
	<?php require_once('./initFooter.php') ?>
</body>
	<script src = "articleCreator.js"></script>
	<script src = "login.js"></script>
</html>
