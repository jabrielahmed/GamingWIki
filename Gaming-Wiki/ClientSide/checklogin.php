<?php
	session_start();
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
	mysql_connect("dhirar25", "saksham23","") ; 
	mysql_select_db("MY_db"); 
	$query = mysql_query("SELECT * from users WHERE username='$username'"); 
	$exists = mysql_num_rows($query); 
	$table_users = "";
	$table_password = "";
	if($exists > 0) 
	{
		while($row = mysql_fetch_assoc($query)) 
		{
			$table_users = $row['username']; 
			$table_password = $row['password']; 
		}
		if(($username == $table_users) && ($password == $table_password)) 
		{
				if($password == $table_password)
				{
					$_SESSION['user'] = $username; 
					header(" home.php"); 
				}
				
		}
		else
		{
			Print '<script>alert("Incorrect Password!");</script>'; 
			Print '<script>window.location.assign("login.php");</script>'; 
		}
	}
	else
	{
		Print '<script>alert("Incorrect Username!");</script>'; 
		Print '<script>window.location.assign("login.php");</script>'; 
	}
?>