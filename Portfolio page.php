<!DOCTYPE html>
<html>
<head>
<title>portfolio</title>
<link rel="stylesheet" type="text/css" href="My Style.css">
</head>
<body>
		<?php
		if(isset($_COOKIE['uid'])){
		}
		else{
			header( 'Location: login.php' );
			}
			?>

<?php 
$p = "Portfolio";
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
				<h1>Portfolio</h1> 
			<br>
				Mijn naam is <b>Bas van Dijk</b> ik ben 17 jaar oud en doe de opleiding HBO ICT <br>
 
 
			<h2> CV </h2>
		<table border="10" style="width:30%">
			<tr>
				<td>naam:</td>
				<td>Bas van Dijk</td>		
			</tr>
			<tr>
				<td>adres:</td>
				<td>Hagedisberg 18</td>		
			</tr>
			<tr>
				<td>Postcode:</td>
				<td>4708HM - Roosendaal</td>		
			</tr>
			<tr>
				<td>Telefoon:</td>
				<td>0165-558810</td>		
			</tr>
			<tr>
				<td>E-mail:</td>
				<td>Bas.vdijk@hotmail.com</td>		
			</tr>
			<tr>
				<td>Geboorteplaats:</td>
				<td>Roosendaal</td>		
			</tr>
			<tr>
				<td>geboortedatum::</td>
				<td>10-03-1997</td>		
			</tr>
			<tr>
				<td>nationaliteit:</td>
				<td>Nederlands</td>		
			</tr>
		</table>
			<br>
  
		<h2>Vacatures</h2>
		<table border="10" style="width:40%">
			  <tr>
				<td>Huis aan huis experts in ICT en Multimedia</td>
				<td><a href="http://vacature.monsterboard.nl/Huis-aan-huis-expert-in-ICT-en-Multimedia-voor-diverse-serviceproviders-Vacature-Haarlem-Noord-Holland-Nederland-139218967.aspx">Klik hier</a</td>		
			  </tr>
			  <tr>
				<td>Junior ICT Consultant</td>
				<td><a href="http://vacature.monsterboard.nl/Junior-ICT-Consultant-Vacature-Eindhoven-Noord-Brabant-Nederland-137422771.aspx">Klik hier</a</td>		
			  </tr>
			  <tr>
				<td>Accountmanager Finance en een Accountmanager Techniek en/of ICT</td>
				<td><a href="http://vacature.monsterboard.nl/Accountmanager-Finance-en-een-Accountmanager-Techniek-en-of-ICT-Vacature-Leiden-Zuid-Holland-Nederland-139220744.aspx">Klik hier</a</td>		
			  </tr>
			<tr>
				<td>ICT Medewerker</td>
				<td><a href="http://vacature.monsterboard.nl/ICT-Medewerker-Vacature-WOERDEN-Utrecht-Nederland-139209154.aspx">Klik hier</a</td>		
			  </tr>
			  <tr>
				<td>Account Manager ICT</td>
				<td><a href="http://vacature.monsterboard.nl/Account-Manager-ICT-Vacature-Amersfoort-Utrecht-Nederland-139149149.aspx">Klik hier</a</td>		
			</tr>
		 </table>
		 <?php include '/footer.php';?>
</body>

</html>