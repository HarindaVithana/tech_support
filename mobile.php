<?php include("server.php");?>
<?php session_start(); ?>
<?php
if(empty($_SESSION["logged"])){
  
   header("Location: index.php");
}
include('logout.php');

?>


<?php include("includes/connection.php"); ?>
<?php include("includes/header.php"); ?>
<div>
	<div class="main-banner">
		<div class="banner-text">
			<h1>MOBILE</h1>
		</div>
		<div class="banner-image">
			<img id="bann" src="images/2.jpg">
		</div>
	</div>
	<p>As Redoran we know mobile devices are very much important you. That’s why we made a mobile section specially to help you in a problems related to mobile phones, tablets, smart watches etc. We supply services for Android, IOS and Microsoft devices. Software failure, software upgrade, battery related problems and overheating are most common problems with mobile phones and tablets. We will provide a trustworthy service, so that you won’t miss a single notification.</p>
	<p>Need support? Submit your problem</p>
	<form method="post" action="m2.php">
		Select your District <input type="text" name="district">
		<input type="submit" name="submit" value="Submit">
	</form>

</div>
<?php include("includes/footer.php"); ?>