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
	

    <div id='signin-modal'>
        <div id='center-content'>
            <div>
                <h1 id='formheader'>
                    Sign in
                </h1>
                <form id='signinform'>
                    <label>Username:</label>
                    <input id='userNameInput' type='text' name='username'/>
                    <div class='spacing'></div>
                    <label>Password:</label>
                    <input id='passwordInput' type='password' name='password'>
                    <button class='formButton' id='signUp1'>Sign Up</button>
                    <button class='formButton' id='cancel'>Cancel</button>
                </form>
            </div>
        </div>
    </div>
    <!-- <div id='signup-model' class='modal'>
        <div class='sign-up-modal-content'></div>
    </div> -->


    <div id='signup-model' class='modal'>
        <div class='sign-up-modal-content'>
        <h1 id='formheader'>
            Create Account
        </h1>
        <form>
            <label>First name:</label>
            <input type='text' name='firstname' />
            <div class='spacing'></div>            
            <label>Last name:</label>
            <input type='text' name='lastname'>
            <div class='spacing'></div>
            <label>Username:</label>
            <input id='userNameInput' type='text' name='username'/>
            <div class='spacing'></div>
            <label>Password:</label>
            <input id='passwordInput' type='password' name='password'>
            <div class='spacing'></div>
            <label> Retype Password:</label>            
            <input id='passwordRenter' type='password' name='password'>
            <div class='spacing'></div>
            <button class='formButton' id='signUp1'>Sign Up</button>
            <button class='formButton' id='cancel'>Cancel</button>
        </form>
        </div>
    </div>
"
?>
