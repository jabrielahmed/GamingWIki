<?php
require_once('../Server/DB/config.php');
require_once("../Server/Services/game-table.php");	
require_once("../Server/Services/console-table.php");
require_once("../Server/Services/genre-table.php");
require_once("../Server/Services/user-table.php");
require_once("../Server/Services/article-table.php");

	$db = new DB();	
	$db->connect();
	$genreTable = new GenreTable($db);
	$gameTable = new GameTable($db);
	$consoleTable = new ConsoleTable($db);
	$userTable = new UserTable($db);
	$articleTable = new ArticleTable($db);	
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if(isset($_POST['articleId'])){
		$articleTable->RemoveArticle($_POST['articleId']);
	}
	 if(isset($_POST['removeGame'])){
	$gameTable->RemoveGame($_POST['removeGame']);
	}
	 if(isset($_POST['addGame']) || isset ($_POST['addGame2'])){
		$gameTable->insert($_POST['addGame'],$_POST['addGame2']);
	}
	 if(isset($_POST['removeAccount'])){
		$userTable->RemoveAccount($_POST['removeAccount']);
	}
	 if(isset($_POST['veiwMetrics'])){
		$metrics = $articleTable->Viewmetrics($_POST['veiwMetrics']);		
	}
	

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="keywords" content="gamingwiki index homepage signin signup" />
	<meta name="description" content="Gaming wiki homepage" />
	<title> GamingWiki</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="stylesheet" type="text/css" href="admin.css" />
</head>
<body>
	<?php require_once('./initHeader.php') ?>
	<div class="form" id="main">
		<table>
			<tr>
				<td id ="removestrategy">
					<h1>Remove Strategy</h1>
					<label> Enter Article ID</label>
					<form action='admin.php' method='post'>
						<input type="text" id="adminsearch1" name="articleId" size="12"  />
						<input type="submit" />
					</form>
				</td>
		
				<td class="form" id="removegame">
					<h1>Remove Game</h1>
					<label> Enter Game Name:</label>
					<form action='admin.php' method='post'>
						<input type="text" id="adminsearch2" name="removeGame" size="12"  />				
						<input type="submit" />
					</form>
				</td>
			</tr>
			<tr>
				<td id="removes">
					<h1>Add Game</h1>
					<label> Enter Game Name:</label>	
					<form action='admin.php' method='post'>
						<input type="text" id="adminsearch3" name="addGame" size="12" />
						<label> Enter Game Info:</label>
						<textarea rows="5" cols="50" name="addGame2" id ="addGame2" ></textarea>
						<input type="submit" />
					</form>
				</td>
				<td id="removeaccount">
					<h1>Remove Account</h1>
					<label> Enter Account Name:</label>
					<form action='admin.php' method='post'>
						<input type="text" id="adminsearch4" name="removeAccount" size="12" />
						<input type="submit" />
					</form>
				</td>
				<td id="veiwmetrics">
					<h1>Veiw Metrics</h1>
					<label> Search Tag:</label>
					<form action='admin.php' method='post'>
						<input type="text" id="adminsearch5" name="veiwMetrics" size="12" />
						<input type="submit" />
					</form>
					<textarea rows="5" cols="50" ><?php 
					if(isset ($metrics)){
					echo " ArticleTitle = ";
					foreach ($metrics as $row){
						echo $row['ArticleTitle'];
						echo ",";
					}
					echo " Game = ";
					foreach ($metrics as $row){
							echo $row['Game'];
							echo ",";
					}
					echo "Votes = ";
					foreach ($metrics as $row){
							echo $row['Votes'];
							echo ",";
					} 
					}?></textarea>
				</td>
			</tr>	
		</table>
	</div>
	<?php require_once('./initFooter.php') ?>

 </body> 
 <script src = "login.js"></script>
</html>
