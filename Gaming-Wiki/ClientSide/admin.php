<?php
require_once('./adminqueries.php')
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if(isset($_POST['removeStrategy'])){
		RemoveStrategy($gamename);
	}
	if(isset($_POST['removeGame'])){
		RemoveGame($gamename, $description);
	}
	if(isset($_POST['addGame'])){
		AddGame($gamename, $description)
	}
	if(isset($_POST['removeAccount'])){
		RemoveAccount($username, $password);
	}
	if(isset($_POST['veiwMetrics'])){
		
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
	<link rel="stylesheet" type="text/css" href="admin.css" />
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<?php require_once('./initHeader.php') ?>
	<div class="form" id="main">
		<table>
			<tr>
				<td id ="removestrategy">
					<h1>Remove Strategy</h1>
					<label> Strategy Name:</label>
					<form action='search.php' method='post'>
						<input type="Search" id="adminsearch" name="searchstrategy" size="12" value=""/>
					</form>	
					<label>Game Info:</label>
					<textarea rows="5" cols="50">
					</textarea>
					<form name="form" method="post">
						<input type="submit" name="RemoveStrategy" value="removeStrategy"/>
					</form>
				</td>
		
				<td class="form" id="removegame">
					<h1>Remove Game</h1>
					<label> Game Name:</label>
					<form action='search.php' method='post'>
						<input type="Search" id="adminsearch" name="searchgame" size="12" value=""/>
					</form>
					<form name="form" method="post">
						<input type="submit" name="RemoveGame" value="removeGame"/>
					</form>
				</td>
			</tr>
			<tr>
				<td id="removes">
					<h1>Add Game</h1>
					<label> Game Name:</label>	
					<form action='search.php' method='post'>
						<input type="Search" id="adminsearch" name="addgame" size="12" value=""/>
					</form>	
					<label> Game Info:</label>
					<textarea rows="5" cols="50"></textarea>
					<form name="form" method="post">
						<input type="submit" name="AddGame" value="addGame"/>
					</form>
				</td>
				<td id="removeaccount">
					<h1>Remove Account</h1>
					<label> Account Name:</label>
					<form action='search.php' method='post'>
						<input type="Search" id="adminsearch" name="removeaccount" size="12" value=""/>
					</form>	
					<form name="form" method="post">
						<input type="submit" name="RemoveAccount" value="removeAccount"/>
					</form>
					
				</td>
				<td id="veiwmetrics">
					<h1>Veiw Metrics</h1>
					<label> Search Tag:</label>
					<form action='search.php' method='post'>
						<input type="Search" id="adminsearch" name="removeaccount" size="12" value=""/>
					</form>	
					<form name="form" method="post">
						<input type="submit" name="Veiwmetrics" value="veiwMetrics"/>
					</form>
					<textarea rows="5" cols="50"></textarea>
				
				</td>
			</tr>	
		</table>
	</div>
	<?php require_once('./initFooter.php') ?>

 </body>
</html>