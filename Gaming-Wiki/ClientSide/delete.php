<?php
	session_start(); 
	if($_SESSION['user']){ 
	}
	else{
		header("index.php"); 
	}
	if($_SERVER['REQUEST_METHOD'] == "GET")
	{
		mysql_connect("localhost", "root","") ; 
		mysql_select_db("MY_db") ; 
		$id = $_GET['id'];
		mysql_query("DELETE FROM list WHERE id='$id'");
		header("home.php");
	}
?>