<div class="headerbg">
	</div>
		<div class="logo">
			<img src="images/logo.jpg" alt="Site logo">
		</div>
		<div id="loginbox">
		<?php
		if(isset($_COOKIE['uid'])){
			$user = $_COOKIE['uid'];
			echo 'Ingelogd als: ';
			echo $user;
			echo ' ';
			echo '<a href="logout.php">Logout</a>';
		}
		else{
			echo '<a href="login.php">Login</a>';
			}
			?>
		</div>
		<center>
		<div class="menuplace">
			<p>
					<br>
					<div class="menuhover">
<?php
switch ($p) {
  case "Home":
    echo '<a id="aHome" href="home.php" class="menucurrent">Home</a>';
	echo '<a id="aPortfolio" href="Portfolio page.php" class="menubox">Portfolio</a>';
	echo '<a id="aTechniek" href="techniek page.php" class="menubox">Techniek</a>';
	echo '<a id="aAnimatie" href="animatie.php" class="menubox">Animatie</a>';
    break;
  case "Portfolio":
	echo '<a id="aHome" href="home.php" class="menubox">Home</a>';
    echo '<a id="aPortfolio" href="Portfolio page.php" class="menucurrent">Portfolio</a>';
	echo '<a id="aTechniek" href="techniek page.php" class="menubox">Techniek</a>';
	echo '<a id="aAnimatie" href="animatie.php" class="menubox">Animatie</a>';
    break;
  case "Techniek":
	echo '<a id="aHome" href="home.php" class="menubox">Home</a>';
	echo '<a id="aPortfolio" href="Portfolio page.php" class="menubox">Portfolio</a>';
    echo '<a id="aTechniek" href="techniek page.php" class="menucurrent">Techniek</a>';
	echo '<a id="aAnimatie" href="animatie.php" class="menubox">Animatie</a>';
    break;
  case "Animatie";
	echo '<a id="aHome" href="home.php" class="menubox">Home</a>';
	echo '<a id="aPortfolio" href="Portfolio page.php" class="menubox">Portfolio</a>';
	echo '<a id="aTechniek" href="techniek page.php" class="menubox">Techniek</a>';
	echo '<a id="aAnimatie" href="animatie.php" class="menucurrent">Animatie</a>';
	break;
  default:
	echo '<a id="aHome" href="home.php" class="menubox">Home</a>';
	echo '<a id="aPortfolio" href="Portfolio page.php" class="menubox">Portfolio</a>';
	echo '<a id="aTechniek" href="techniek page.php" class="menubox">Techniek</a>';
	echo '<a id="aAnimatie" href="animatie.php" class="menubox">Animatie</a>';
}
?>
</div>
				
					
					
					
					
				
		</div>
			<center>
				<div class="block">
			</center>
				</div>
			</p>