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
			<h1>SOFTWARE</h1>
		</div>
		<div class="banner-image">
			<img id="bann" src="images/4.jpg">
		</div>
	</div>
	<p>Redoran is a certified company to repair, restore and optimize computer devices with Windows and Linux operating systems. We are internationally recognized experts in software solutions for PCs, Laptops and Workstations.We cover a wide area of software solutions including Operating system restore, Software repair, data recovery, networking problems.</p>
	<p> 
	If you are facing any kind of software difficulties simply contact us. We will provide you with best solutions and tips. With our help, the problems will be solved within few minutes. Also we will provide you with some friendly tips on how to keep your PC out of trouble and optimize it for the full performance.</p>
	<p>
	Usually any computer device faces difficulties once a while. A software failure or an update error is common among most PC users. Corrupted files, loss of data, network errors and security threats are also some of the main problems faced by the users. 
	</p>
	<p>Need support? Submit your problem</p>
	<form method="post" action="s2.php">
		Select your District <input type="text" name="district">
		<input type="submit" name="submit" value="Submit">
	</form>

</div>
<?php include("includes/footer.php"); ?>