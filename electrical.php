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
			<h1>ELECTRICAL</h1>
		</div>
		<div class="banner-image">
			<img id="bann" src="images/3.jpg" height="300px">
		</div>
	</div>
	<p>Our electrical appliances section will provide you services related to general household electrical appliances. We provide service for Washing Machines, TVs, Ovens, Fans or any other household electrical appliances. Either service or repair we will provide the best support.  </p>
	<p>Need support? Submit your problem</p>
	<form method="post" action="e2.php">
		Select your District <input type="text" name="district">
		<input type="submit" name="submit" value="Submit">
	</form>

</div>
<?php include("includes/footer.php"); ?>