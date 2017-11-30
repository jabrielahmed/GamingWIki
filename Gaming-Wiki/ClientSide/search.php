<?php
	if($_SERVER['REQUEST_METHOD'] === 'POST')
	{		
		$popTags = getPopTags();
		foreach($popTags as $popTags) {
      		"{$popTags['UserTag']}";
		$articleList = search(_POST['userTag'], _POST['rSearch']);
	}
	else
	{
		$phpTags = null;
	 	$articleList = null;
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
			This is where the popular tags listed. Where user drag the tags.
			<?php echo $popTags ?>
		</div>
		<div id="dropTags">
			<form action='search.php' method='post'>
				<input type="text" name="rSearch" id="rSearch" col="5" />								
			</form>
			<form method='post'>
				<input type="submit" name="submitOfSearch" id="submitOfSearch" value="Search" />
			</form>
			<div id="userTag">
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
		<form action="display.php" method="post">
			<select>
				
				<?php arsort($articleList);
					foreach($articleList as $articleList)
						echo "<option value= '$articleList['Title']'> $articleList['Title']</option>"
					?>
			</select>
		</form>		
	</div>
</div>
<?php require_once('./initFooter.php') ?>
</body>
	<script src = "./login/login.js"></script>
</html>
