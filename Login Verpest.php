<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="My Style.css">
	</head>
	<body>
	<?php 
	$p = "Login";
	include '/header.php';
	require 'securimage/securimage.php';	
	?>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
	<?php
			  $doc = new DOMDocument();
			  $doc->load( 'Login.xml' );
			  
			  $logins = $doc->getElementsByTagName( "user" );
			  foreach( $logins as $user )
			  {
			  $usernames = $user->getElementsByTagName( "username" );
			  $username = $usernames->item(0)->nodeValue;

			  $passwords = $user->getElementsByTagName( "password" );
			  $password = $passwords->item(0)->nodeValue;
			  
			  echo "$username - $password";
			  }
	?>		

		<form name="input" action="login.php" method="post">
			Username: <input type="text" name="user">
			Password: <input type="password" name="pwd">
			<input type="submit" value="Submit">
		</form>
		
	<?php
		if (isset($_POST['user'])) {
			$uid = $_POST['user'];
			$pwd = $_POST['pwd'];
			
			if ($uid == $username && $pwd == $password) {
					setcookie('uid',$_POST['user']);
					header( 'Location: home.php' ) ;
			}
			else{
				echo "<script type='text/javascript'>alert('Verkeerde username of wachtwoord');</script>";
			}
		}
	?>

			
			<br>
			<br>
	<?php include '/footer.php';?>	
	</body>
</html>