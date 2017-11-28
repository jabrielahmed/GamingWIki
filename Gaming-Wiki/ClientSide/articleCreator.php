<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title> GamingWiki</title>
	<link rel = "stylesheet" type = "text/css" href = "style.css"/>
	<link rel = "stylesheet" type = "text/css" href = "articleCreator.css"/>
</head>
<body>
	<?php require_once('./initHeader.php') ?>
	<div id = "main">
	<table id = "table">
		<tr>
			<td class = "tableCell">
				<textarea rows = "50" id = "textbox"></textarea>
				<input type = "button" id = "previewButton" onclick = "insertPreview()" value = "Insert Preview">
				<input type = "button" id = "submitButton" value = "Submit Article">
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
