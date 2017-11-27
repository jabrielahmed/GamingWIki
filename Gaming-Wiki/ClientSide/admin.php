<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="keywords" content="gamingwiki Admin Page" />
	<meta name="description" content="Gaming wiki Admin Page" />
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
					<select>
						<option name="strategy2">strategy3</option>
						<option name="strategy3">strategy4</option>
						<option name="strategy1">strategy2</option>
						<option name="strategy4">strategy1</option>
					</select>
					<label>Game Info:</label>
					<textarea rows="5" cols="50">
					</textarea>
					<button>Remove</button>
				</td>
				<td class="form" id="editgame">
						<h1>Edit Game</h1>
						<label> Game Name:</label>
						<select>
							<option name="game1">game1</option>
							<option name="game2">game2</option>
							<option name="game3">game3</option>
							<option name="game4">game4</option>
						</select>		
						<label> Game Info:</label>	
						<textarea rows="5" cols="50">	</textarea>
						<button>OK</button>
				</td>
				<td class="form" id="removegame">
					<h1>Remove Game</h1>
					<label> Game Name:</label>
					<input type="Search" id="adminsearch" name="searchquestions" size="12" />
					<button>Remove</button>
				</td>
			</tr>
			<tr>
				<td id="removes">
					<h1>Add Game</h1>
					<label> Game Name:</label>	
					<input type="Search" id="adminsearch" name="searchquestions" size="12" />
					<label> Game Info:</label>
					<textarea rows="5" cols="50"></textarea>
					<button>OK</button>
				</td>
				<td id="removeaccount">
					<h1>Remove Account</h1>
					<label> Account Name:</label>
					<input type="Search" id="adminsearch" name="searchquestions" size="12" />
					<button>Remove</button>
				</td>
			</tr>	
		</table>
	</div>
	<?php require_once('./initFooter.php') ?>
 </body>
</html>
