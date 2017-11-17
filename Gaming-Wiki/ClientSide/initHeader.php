<?php echo"
	<header>
	<table>
	<tr>
		<td>
			<a href = 'home.php'>
				<img src = 'gamingwiki.png' alt = 'Gamingwiki Logo' id = 'gamingwiki'/>
			</a>
			<a href = 'https://www.wikipedia.org/'>
				<img src = 'wikipedia.png' alt = 'Wikipedia Logo' id = 'wikipedia'>
			</a>
		</td>
		<td>
			<form action = 'search.php' method = 'post'>
				<input type = 'text' id = 'search' placeholder = 'Search our Site'>
			</form>
		</td>
		<td>
			<input type = 'submit' id = 'signup' value = 'Sign Up'>
			<input type = 'submit' id = 'signin' value = 'Sign In'>
		</td>
	</tr>
	</table>
	</header>
"
?>
