<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="keywords" content="gamingwiki index homepage signin signup " />
<meta name="description" content="Gaming wiki homepage" />
<title> GamingWiki</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="admin.css" />
 
</head>
 <body>
<?php require_once('./initHeader.php') ?>
<div id="main">
	<table>
		<tr>
			<td>
				<div id ="removestrategy">
				<h1>Remove Strategy</h1>
					<label> Strategy Name:</label>
							<select>
								  <option value="strategy1">strategy1</option>
								  <option value="strategy1">strategy2</option>
								  <option value="strategy1">strategy3</option>
								  <option value="strategy1">strategy4</option>
						</select>
				<label>Game Info:</label><textarea rows="5" cols="50">

					</textarea>
					 <button type="button">Remove</button>
				</div>
			</td>
			<td>
					<div id="editgame">
								<h1>Edit Game</h1>
								<label> Game Name:</label>
								<select>
								  <option value="game1">game1</option>
								  <option value="game2">game2</option>
								  <option value="game3">game3</option>
								  <option value="game4">game4</option>
						</select>
								
								
							<label> Game Info:</label>	<textarea rows="5" cols="50">	</textarea>
								<button type="button">OK</button>
					</div>
			</td>
			<td>
					<div id="removegame">
							<h1>Remove Game</h1>
							<label> Game Name:</label>	<input type="Search" id="adminsearch" name="searchquestions" size="12"
						 value=""/>
						 <button type="button">Remove</button>
							
					</div>
			</td>
		</tr>
		
			
		
			
		<tr id="removes">
			<td>
					<div id="addgame">
							<h1>Add Game</h1>
							<label> Game Name:</label>	<input type="Search" id="adminsearch" name="searchquestions" size="12"
						 value=""/>
							<label> Game Info:</label><textarea rows="5" cols="50"></textarea>
							<button type="button">OK</button>
					</div>
			</td>
			
			<td>
					<div id="removeaccount">
							<h1>Remove Account</h1>
								<label> Account Name:</label><input type="Search" id="adminsearch" name="searchquestions" size="12"
								 value=""/>
								 <button type="button">Remove</button>
				
					</div>
			</td>
		</tr>	
			
	</table>
	</div>
<?php require_once('./initFooter.php') ?>

 </body>
</html>