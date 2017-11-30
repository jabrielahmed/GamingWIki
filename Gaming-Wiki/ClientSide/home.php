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
	<?php session_start();?>
	<?php require_once('./initHeader.php') ?>
	<div id="main">
		<img src = "wordcloud.jpg" alt = "Pacman" id = "pacman"/>
		<?php
			require_once("../Server/DB/config.php");
			require_once("../Server/Services/Login/login-service.php");
			$db = new DB();
			$db->connect();
			$userTable = new UserTable($db);
		if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
				if($_POST['password'] == $_POST['passwordr']) {
					$userTable->addUser($_POST['username'], $_POST['password'], $_POST['email'], $_POST['firstname'], $_POST['lastname']);
					
				} 
		}
		if(isset($_POST['login'])) {
			$response = $userTable->userLogin($_POST['username'], $_POST['password']);
			print_r($response);
			if(isset($response[0])) {
				if(isset($response[0]['IsAdmin'])) {
					if($response[0]['IsAdmin']) {
						$_SESSION['user'] = 'admin';
					} else {
						$_SESSION['user'] = 'user';
					}
					echo"<script>alert('login successful')</script>";
				}
			} else {
					echo"<script>alert('Username or password is invalid.')</script>";
				
			}
		}
		?>
	</div>
	<?php require_once('./initFooter.php')?>
</body>
	<script src = "login.js"></script>
</html>
