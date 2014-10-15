<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="My Style.css">
	</head>
	<body>
	<?php 
	$p = "Contact";
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

	<h2>Contact Form</h2>
<?php
// display form if user has not clicked submit
if (!isset($_POST["submit"])) {
  ?>
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
  From: <input type="text" name="from"><br><br>
  Subject: <input type="text" name="subject"><br><br>
  Message: <textarea rows="10" cols="40" name="message"></textarea><br><br>
  <center>
  <div id="cCaptcha">
  	<?php echo Securimage::getCaptchaHtml() ?>
  </div>
  </center>
  <input type="submit" name="submit" value="Submit Feedback">
  </form>
  <?php 
  session_start(); 
} else {    // the user has submitted the form
  // Check if the "from" input field is filled out
  if (isset($_POST["from"])) {
    $from = $_POST["from"]; // sender
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    // message lines should not exceed 70 characters (PHP rule), so wrap it
    $message = wordwrap($message, 70);
    // send mail
	date_default_timezone_set('UTC');
    $date = time();
	file_put_contents($date. "_" . $from .".txt", "van :" . "\t\t" . $from . PHP_EOL ."Onderwerp :". "\t" . $subject . PHP_EOL . "bericht :". PHP_EOL . PHP_EOL . $message);
    echo "Bedankt voor het contact opnemen!";
	
  }
}
?>
<br>
<br>
	<?php include '/footer.php';?>	
	</body>
</html>