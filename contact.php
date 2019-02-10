
<?php include("server.php");?>
<?php session_start(); ?>
<?php
if(empty($_SESSION["logged"])){
  
   header("Location: index.php");
}
include('logout.php');

?>


<?php include("includes/connection.php"); ?>
<link rel="stylesheet" type="text/css" href="css/public.css">


<header>
<div class="main">
  <div class="topnav">
    <div class="nametxt">
      <h1>Redoran Tech Support</h1><!-- heading -->
    </div>
    <div class="navbar">
      <ul class="ul"> <!-- navigation bar -->
        <li ><a href="home.php">HOME</a></li>
        <li ><a href="help.php">HELP</a></li>
        <li class="active"><a href="contact.php">CONTACT</a></li>
        <li ><a href="home.php?logout='1'">LOG OUT</a></li>
      </ul>
    </div>
  </div>
</div>
</header>

<div class="main">
	<div class="content">
		<h2 class="head">Contact us</h2>
		<p>Contact us if you have any problems regarding our services</p>
		<div class="cont-box">
			<img src="images/call.png" height="100px" width="300px">
			<h3>
				Telephone: 0710112568<br>
				E-mail: redorantech@gmail.com
			</h3>
		</div>
		<div class="comp-box">
			<img src="images/contact.png" height="100px" width="300px">
			<form method="POST" id="complain" action="includes/complains.inc.php">
				<h3>Name: </h3><br>
				<input type="text" name="name" required><br>
				<h3>E-mail: </h3><br>
				<input type="text" name="mail" required><br>
				<h3>Compalin: </h3><br>
				<textarea rows="4" cols="50" name="complain"></textarea>
				<input type="submit" name="submit">
			</form>
		</div>
	</div>
</div>

<?php include("includes/footer.php"); ?>