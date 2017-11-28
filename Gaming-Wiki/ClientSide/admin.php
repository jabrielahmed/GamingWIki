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
					<input type="Search" id="adminsearch" name="searchstrategy" size="12" value=""/>
					<label>Game Info:</label>
					<textarea rows="5" cols="50">
					</textarea>
					<button>Remove</button>
				</td>
		
				<td class="form" id="removegame">
					<h1>Remove Game</h1>
					<label> Game Name:</label>
					<input type="Search" id="adminsearch" name="searchgame" size="12" value=""/>
					<button>Remove</button>
				</td>
			</tr>
			<tr>
				<td id="removes">
					<h1>Add Game</h1>
					<label> Game Name:</label>	
					<input type="Search" id="adminsearch" name="addgame" size="12" value=""/>
					<label> Game Info:</label>
					<textarea rows="5" cols="50"></textarea>
					<button>OK</button>
				</td>
				<td id="removeaccount">
					<h1>Remove Account</h1>
					<label> Account Name:</label>
					<input type="Search" id="adminsearch" name="removeaccount" size="12" value=""/>
					<button>Remove</button>
				</td>
				<td id="veiwmetrics">
					<h1>Veiw Metrics</h1>
					<label> Search Tag:</label>
					<input type="Search" id="adminsearch" name="removeaccount" size="12" value=""/>
					<button>Veiw Metrics</button>
					<textarea rows="5" cols="50"></textarea>
				
				</td>
			</tr>	
		</table>
	</div>
	<?php require_once('./initFooter.php') ?>

 </body>
</html>
