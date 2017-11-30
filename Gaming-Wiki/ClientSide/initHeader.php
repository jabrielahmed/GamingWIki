<?php echo"
	<div id = 'navBar'>
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
	</div>

    <div id='signin-modal' class = 'modal'>
        <div id='center-content'>
            <div class='center-form'>
                <h1 id='formnavBar'>
                    Sign in
                </h1>
                <form id='signinform' action='../ClientSide/home.php' method='POST'>
                    <label>Username:</label>
                    <input id='userNameInput' type='text' name='username' required/>
                    <div class='spacing'></div>
                    <label>Password:</label>
                    <input id='passwordInput' type='password' name='password' required />
                    <input type='hidden' name='login' value='true' />
                    <br />
                    <button class='formButton' id='signUp1'>Sign Up</button>
                    <input type='button' id='cancel1' class='cancel' value='Cancel'>
                </form>
            </div>
        </div>
    </div>

    <div id='signup-modal' class='modal'>
        <div class='sign-up-modal-content'>
        <h1 id='formnavBar'>
            Create Account
        </h1>
        <form method='POST'  action='../ClientSide/home.php'>
            <label>First name:</label>
            <input type='text' name='firstname' required />
            <div class='spacing'></div>            
            <label>Last name:</label>
            <input type='text' name='lastname' required />
            <div class='spacing'></div>
            <label>Email:</label>
            <input type='text' name='email' required />
            <div class='spacing'></div>
            <label>Username:</label>
            <input id='userNameInput' type='text' name='username' required />
            <div class='spacing'></div>
            <label>Password:</label>
            <input id='passwordInput' type='password' name='password' required />
            <div class='spacing'></div>
            <label> Retype Password:</label>            
            <input id='passwordRenter' type='password' name='passwordr' required />
            <div class='spacing'></div>
            <input type='submit' class='formButton' id='signUp1' required />
            <input type='button' value='cancel' id ='cancel' class='cancel' required />
        </form>
        </div>
    </div>
"
?>
