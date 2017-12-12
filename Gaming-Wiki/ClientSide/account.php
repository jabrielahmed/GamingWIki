<?php
require_once("../Server/DB/config.php");
require_once("../Server/Services/user-table.php");
require_once("../Server/Services/article-table.php");
if(session_id() == '') {
	session_start();
}
$db = new DB();
$db->connect();
$usertable = new UserTable($db);
$username = $_SESSION['user'];
$userdata= $usertable->getAll($username);
$articleTable = new ArticleTable($db);
$article = $articleTable->getArticleByName($username);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="keywords" content="UserAccount" />
	<meta name="description" content="Gaming wiki homepage" />
	<title> GamingWiki</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<?php require_once('./initHeader.php') ?>
	<p>
		Name:  <?php echo $userdata[0]['FirstName'].",".$userdata[0]['LastName'];?></br>
		
		Email: <?php echo $userdata[0]['Email']; ?></br>
		UserName: <?php echo $userdata[0]['UserName']; ?>
	</p>
	<p id="articleList">
	<?php	foreach ($article as $row){
			echo $row['ArticleTitle'];
			echo ",";
			echo $row['Id'];
			echo ",";
			} 
			?>
	</p>
	<?php require_once('./initFooter.php') ?>

 </body>
 <script src = "login.js"></script>
</html>