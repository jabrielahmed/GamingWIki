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
			This is where the popular tags listed. Where user drag the tags.
			<ul id="popList">
				<li>Moba</li>
				<li>FPS</li>
				<li>RTS</li>
			</ul>
		</div>
		<div id="dropTags">
			<form action='search.php' method='post'>
				<input type="text" name="rSearch" id="rSearch" col="5" />								
			</form>
			<form method='post'>
				<input type="submit" name="submitOfSearch" id="submitOfSearch" value="Search" />
			</form>
			<div id="yourTag">
				This is where user drop the tags.
			</div>
			<div id="wrapperOfAddTag">
				<form method="post">
					
					<input type="submit" name="submitOfAdd" id="submitOfAdd" value="<--Add Tags" />
					<input type="text" name="addTag" id="addTag" />						
				</form>
			</div>
		</div>
	</div>
	<div id ="result">
	This part should be done with php code. will do after the query information is done.<br/>
		<a href= "foo1.html" class="resultList"> How to find all the treasure(Data base) </a> <br/>
		<a href= "foo2.html" class="resultList"> How to find all the treasure1 </a><br/>
		<a href= "foo3.html" class="resultList"> How to find all the treasure2 </a><br/>
		<a href= "foo4.html" class="resultList"> How to find all the treasure3 </a><br/>
	</div>
</div>
<?php require_once('./initFooter.php') ?>

