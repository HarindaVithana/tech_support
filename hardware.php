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
			<h1>HARDWARE</h1>
		</div>
		<div class="banner-image">
			<img id="bann" src="images/1.jpg">
		</div>
	</div>
	<p>Are you facing difficulties with your computer hardware? Did your computer suddenly break down? Now you don’t have to unplug everything and a take it to a repairing store. With Redoran Online Technical Support Service you are just one click away from an easy solution. Redoran Online Technical Support offers 24*7 service for the users. We are internationally recognized experts in hardware solutions for PCs, Laptops and Workstations. Our hardware solutions include installing, replacing and repairing hardware devices such as RAMs, hard drives, CD/ DVD drives VGA cards etc.
	If you are facing any kind of  hardware difficulties simply contact us.
	</p>
	<p>Need support? Submit your problem</p>
	<form method="post" action="h2.php">
		Select your District: <input type="text" name="district">
		<input type="submit" name="submit" value="Submit">
	</form>

</div>
<?php include("includes/footer.php"); ?> 