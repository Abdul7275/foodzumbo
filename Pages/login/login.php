<?php
//include config
require_once('includes/config.php');

//check if already logged in move to home page
if( $user->is_logged_in() ){ header('Location: index.php'); } 

//process login form if submitted
if(isset($_POST['submit'])){

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if($user->login($username,$password)){ 
		$_SESSION['username'] = $username;
		header('Location: ../../index.html');
		exit;
	
	} else {
		$error[] = 'Wrong username or password or your account has not been activated.';
	}

}//end if submit

//define page title
$title = 'Login';

//include header template
require('layout/header.php'); 
?>

<html >
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Foodzumbo order food with Foodzumbo">
  <meta name="keywords" content="Foodzumbo order food with Foodzumbo">
  <meta name="author" content="Foodzumbo order food with Foodzumbo">
    <title>Login/Signup..!!</title>
    
    
    <link rel="stylesheet" href="../../CSS/Login/reset.css">
    <link rel='stylesheet prefetch' href='../../fonts/fonts.otf'>
    <link rel='stylesheet prefetch' href='../../CSS/login.css'>
    <link rel="stylesheet" href="../../CSS/Login/style.css">   

    <style>
    	.error{
    		color: Red;
    	}
    </style>
  </head>

  <body>

<div class="pen-title">
  <h1>Please Login </h1><span><a href='../../index.html'>Home</a>
</span></div>

<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    <div class="tooltip">Click Me</div>
  </div>
  <div class="form">
    <h2>Login to your account</h2>
    <form role="form" method="post" action="" autocomplete="off">

    	<?php
				//check for any errors
				if(isset($error)){
					foreach($error as $error){
						echo '<p class="error">'.$error.'</p>';
					}
				}

				if(isset($_GET['action'])){

					//check the action
					switch ($_GET['action']) {
						case 'active':
							echo "<h2 class='error'>Your account is now active you may now log in.</h2>";
							break;
						case 'reset':
							echo "<h2 class='error'>Please check your inbox for a reset link.</h2>";
							break;
						case 'resetAccount':
							echo "<h2 class='error'>Password changed, you may now login.</h2>";
							break;
					}

				}

				
				?>


				<div class="form-group">
				</br>
					<input type="text" name="username" id="username" class="form-control input-lg" placeholder="User Name" value="<?php if(isset($error)){ echo $_POST['username']; } ?>" tabindex="1">
				</div>

				<div class="form-group">
					<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="3">
				</div>
				<div><input type="submit" name="submit" value="Login" class="btn btn-primary btn-block btn-lg" tabindex="5"></div>
				<div>
				 <a href='reset.php'>Forgot your Password?</a>
				 </div>
				 </form>
	  </div>

	<?php 
//include header template
require('layout/footer.php'); 
?>
</body>
</html>
