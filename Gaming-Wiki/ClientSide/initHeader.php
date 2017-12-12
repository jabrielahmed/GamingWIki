<?php
if(session_id() == '') {
		session_start();
    }
    
echo"
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
		</td>
        <td>";
            
    if(isset($_SESSION['user'])) {
        echo"
        <div class='flexbox'>
            <form action = 'search.php' method = 'post'>
                <input type = 'text' id = 'search' name= 'search' placeholder = 'Search our Site'>
            </form>
            <form action='./articleCreator.php'>
                <input id='create-article-button' type='submit' value='Create Article' />
            </form>";
            if($_SESSION['user'] === 'admin') {
                echo"<form action='./admin.php'><input id='view-account-button' type='submit' value='View Account'/></form>";
            } else {
                echo"<form action='./account.php'><input id='view-account-button' type='submit' value='View Account'/></form>";                
            } 
            echo"       
            <form id='logoutform' method='POST' action='./home.php'>
                <input type='submit' id='logout' name='logout' value='Log Out' />
            </form>
        </div>        
            ";        
    } else {
        echo"
        <div class='flexbox'>
        <form action = 'search.php' method = 'post'>
        <input type = 'text' id = 'search' name= 'search' placeholder = 'Search our Site'>
        </form>
        <input type = 'submit' id = 'signup' value = 'Sign Up'>
        <input type = 'submit' id = 'signin' value = 'Sign In'>
        </div>";
    }    
    $fileName = basename($_SERVER['PHP_SELF']);    
	echo "
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
                <form id='signinform' action='./$fileName' method='POST'>
                    <label>Username:</label>
                    <input id='userNameInput' type='text' name='username' required/>
                    <div class='spacing'></div>
                    <label>Password:</label>
                    <input id='passwordInput' type='password' name='password' required />
                    <input type='hidden' name='login' value='true' />
                    <br />
                    <button class='formButton' id='signUp1'>Sign In</button>
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
        <form method='POST'  action='./$fileName'>
            <label>First name:</label>
            <input type='text' name='firstname' required />
            <div class='spacing'></div>            
            <label>Last name:</label>
            <input type='text' name='lastname' required />
            <div class='spacing'></div>
            <label>Email:</label>
            <input type='email' name='email' required />
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
";

	if(isset($_SESSION['timeout']) && time() - $_SESSION['timeout'] > 1800) {
		$_SESSION = array();
		echo"<script>alert('your session has timed out')</script>";
	}
?>
<?php
			require_once(realpath(dirname(__FILE__)."/../Server/DB/config.php"));
			require_once(realpath(dirname(__FILE__)."/../Server/Services/Login/login-service.php"));
			$db = new DB();
			$db->connect();
			$loginTable = new LoginTable($db);
		if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
				if($_POST['password'] == $_POST['passwordr']) {
					$loginTable->addUser($_POST['username'], $_POST['password'], $_POST['email'], $_POST['firstname'], $_POST['lastname']);
				} 
		}
		if(isset($_POST['login'])) {
			$response = $loginTable->userLogin($_POST['username'], $_POST['password']);
			if(isset($response[0])) {
				if(isset($response[0]['IsAdmin'])) {
					if($response[0]['IsAdmin']) {
						$_SESSION['timeout'] = time();
						$_SESSION['user'] = 'admin';
						header("Refresh:0");
					} else {
						$_SESSION['timeout'] = time();
						$userName = $response[0]['UserName'];
						$_SESSION['user'] = $userName;
						header("Refresh:0");
					}
					echo"<script>alert('login successful')</script>";
				}
			} else {
					echo"<script>alert('Username or password is invalid.')</script>";				
			}
		}
		if(isset($_POST['logout'])) {
			session_destroy();
			header("Refresh:0");
		}
		?>
