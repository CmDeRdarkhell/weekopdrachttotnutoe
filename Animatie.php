<!DOCTYPE html>
<html>
	<head>
		<title>Animatie</title>
		<link rel="stylesheet" type="text/css" href="My Style.css">
	</head>
	<body  onload="start()">
	<?php 
	$p = "Animatie";
	include '/header.php'; 
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
			<audio autoplay loop>
				<source src="/weekopdracht%201.3/music/Sandstorm.mp3">
			</audio>
			<img id=kappa src="images/kappa.png" alt="kappa">
			<script src="animatie.js" type="text/javascript"> </script>	
			<?php include '/footer.php';?>
			
	</body>
</html>