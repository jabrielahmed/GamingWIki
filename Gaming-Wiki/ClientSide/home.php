<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="keywords" content="gamingwiki index homepage signin signup " />
<meta name="description" content="Gaming wiki homepage" />
<title> GamingWiki</title>
<link rel="stylesheet" type="text/css" href="style.css" />
 
</head>
<?php require_once('./initHeader.php') ?>
<div id="main">
     <?php require_once('./login/sign-up/signup.html') ?>
     <?php require_once('./login/sign-in/signin.html') ?> 
</div>
<?php require_once('./initFooter.php') ?>
<script src="./login/login.js"> </script>

