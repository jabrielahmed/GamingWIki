<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset="utf-8"/>
	<meta name="keywords" content = "gamingwiki index homepage signin signup "/>
	<meta name = "description" content = "Gaming wiki homepage"/>
	<title>GamingWiki</title>
	<link rel = "stylesheet" type = "text/css" href = "style.css" />
</head>
<body>
	<?php require_once('./initHeader.php') ?>
	<div id="main">
		<div id="wordcloud"></div>
		
	</div>
	<?php require_once('./initFooter.php')?>
</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src = "login.js"></script>
	<script src="../Dependencies/bower_components/jqcloud2/dist/jqcloud.min.js"></script>
	<link rel="stylesheet" href="../Dependencies/bower_components/jqcloud2/dist/jqcloud.min.css">
	<script src= "wordcloud.js"> </script>
</html>
