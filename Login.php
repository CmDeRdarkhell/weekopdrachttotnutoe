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
				$str = file_get_contents('Login.json');
				$json = json_decode($str, true); 
				
			  ?>
			  
			<form name="input" action="login.php" method="post">
				Username: <input type="text" name="user">
				Password: <input type="password" name="password">
				<input type="submit" value="Submit">
			</form>
		
	<?php
		if (isset($_POST['user'])) {
			$uid = $_POST['user'];
			$pwd = $_POST['password'];
			$password = $json["$uid"]["password"];
			
			if (!$pwd == ""  && $pwd == $password) {
					setcookie('uid',$_POST['user']);
					header( 'Location: home.php' ) ;
			}
			else{
				echo "<script type='text/javascript'>alert('Verkeerde username of wachtwoord');</script>";
			}
		}
	?>
			  
			  
	<?php include '/footer.php';?>	
	</body>
</html>