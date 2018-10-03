<?php
session_start();
require_once 'token.php';

$_SESSION["logeduser"] = '';


	if(isset($_POST['username']) && isset($_POST['password']))
	
	{

 	if($_POST['username'] == "admin" && $_POST['password']=="password")
	
	{

			$_SESSION["logeduser"] = $_POST['username'];			
			$token = Token::generate_token(session_id());
			setcookie("id", session_id());
			setcookie("token", $token);
	        header('Location: control.php');
			header('Location: ./control.php');
	}
  else
  {
    echo "<script>alert('Check username and password');</script>";
    echo "<noscript>Check username and password</noscript>";
  }
}


 
?>

<html>

	<head>
		<meta charset="UTF-8">
		<title>Login Page</title>
		<link rel="stylesheet" href="style.css">
	</head>

<body>
	<div id="home">
	<center>
	</br><Legend><text class="textprop-heading">Admin
Login
</text></legend></br>
<form method ="post">
	<text class="textprop-field">Username:</text><input
type="text" name="username" class="textbox"></br></br>
  	<text class="textprop-field">Password:</text><input
type="password" name="password" class="textbox"><br></br>
<input class="form-btn" type="submit" value="Login" />
<input class="form-btn" type="reset" value="Reset" />
</form>
		</center>
		</div>
</body>
</html>


