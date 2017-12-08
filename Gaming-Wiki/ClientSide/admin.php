<?php
require_once('../Server/DB/config.php');
require_once('./adminqueries.php');
$db = new DB();
$db->connect();
$adminTable = new AdminTable($db);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if(isset($_POST['removeStrategy'])){
		$adminTable->RemoveStrategy($_POST['removeStrategy']);
	}
	 if(isset($_POST['removeGame'])){
	$adminTable->RemoveGame($_POST['removeGame']);
	}
	 if(isset($_POST['addGame'],$_POST['addGame2'])){
		$adminTable->AddGame($_POST['addGame'],$_POST['addGame2']);
	}
	 if(isset($_POST['removeAccount'])){
		$adminTable->RemoveAccount($_POST['removeAccount']);
	}
	 if(isset($_POST['veiwMetrics'])){
		$adminTable->Viewmetrics($_POST['veiwMetrics']);
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
					<label> Strategy Name:</label>
					<form action='admin.php' method='post'>
						<input type="Search" id="adminsearch" name="removeStrategy" size="12" />
						<input type="submit" />
					</form>
				</td>
		
				<td class="form" id="removegame">
					<h1>Remove Game</h1>
					<label> Game Name:</label>
					<form action='admin.php' method='post'>
						<input type="Search" id="adminsearch" name="removeGame" size="12"/>				
						<input type="submit" />
					</form>
				</td>
			</tr>
			<tr>
				<td id="removes">
					<h1>Add Game</h1>
					<label> Game Name:</label>	
					<form action='admin.php' method='post'>
						<input type="Search" id="adminsearch" name="addGame" size="12" value=""/>
						<label> Game Info:</label>
						<textarea rows="5" cols="50" name="addgame2" ></textarea>
						<input type="submit" />
					</form>
				</td>
				<td id="removeaccount">
					<h1>Remove Account</h1>
					<label> Account Name:</label>
					<form action='admin.php' method='post'>
						<input type="Search" id="adminsearch" name="removeAccount" size="12" value=""/>
						<input type="submit" />
					</form>
				</td>
				<td id="veiwmetrics">
					<h1>Veiw Metrics</h1>
					<label> Search Tag:</label>
					<form action='admin.php' method='post'>
						<input type="Search" id="adminsearch" name="veiwMetrics" size="12" value=""/>
						<input type="submit" />
					</form>
					<textarea rows="5" cols="50"><?php echo $row['ArticleTitle'] ?></textarea>
				</td>
			</tr>	
		</table>
	</div>
	<?php require_once('./initFooter.php') ?>

 </body>
</html>