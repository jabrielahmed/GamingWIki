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
		<?php 
			if(isset($_SESSION['user'])) {
				// var_dump($_SESSION);
				
				// $sess = $_SESSION['user'];
				// echo"$sess";
			}
		?>
		<div id="wordcloud"></div>
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
			if(isset($response[0])) {
				if(isset($response[0]['IsAdmin'])) {
					if($response[0]['IsAdmin']) {
						$_SESSION['timeout'] = time();
						$_SESSION['user'] = 'admin';
						header("Refresh:0");
					} else {
						$_SESSION['timeout'] = time();
						$userName = $response[0]['UserName'];
						$_SESSION['user'] = $userName;
						header("Refresh:0");
					}
					echo"<script>alert('login successful')</script>";
				}
			} else {
					echo"<script>alert('Username or password is invalid.')</script>";				
			}
		}
		if(isset($_POST['logout'])) {
			session_destroy();
			header("Refresh:0");
		}
		?>
	</div>
	<?php require_once('./initFooter.php')?>
</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src = "login.js"></script>
	<script src="../Dependencies/bower_components/jqcloud2/dist/jqcloud.min.js"></script>
	<link rel="stylesheet" href="../Dependencies/bower_components/jqcloud2/dist/jqcloud.min.css">
	<script src= "wordcloud.js"> </script>
</html>
