<?php include("includes/logout.php");?>
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
      <h1>Redoran Tech Support</h1>
    </div>
    <div class="navbar">
      <ul class="ul"> 
        <li class="active"><a href="home.php">HOME</a></li>
        <li ><a href="help.php">HELP</a></li>
        <li ><a href="contact.php">CONTACT</a></li>
        <li ><a href="home.php?logout='1'">LOG OUT</a></li>
      </ul>
    </div>
  </div>
</div>
</header>

<div class="content" align="center">
	<h3>Redoran tech will help you to find an expert to solve any kind of technical problem. To get help for you technical problem simply click on an icon. To get help in using the site click Help in top menu. If you have any complains click on Contact.</h3>
	<img class="menuimg" src="images/menu.jpg" alt="menu" usemap="#menumap">
	<map name="menumap">
		<area shape="circle" coords="200,200,200" href="mobile.php" title="Mobile">
		<area shape="circle" coords="200,600,200" href="software.php" title="Software">
		<area shape="circle" coords="800,200,200" href="electrical.php" title="Electrical">
		<area shape="circle" coords="800,600,200" href="hardware.php" title="Hardware">
</div>
<?php include("includes/footer.php") ?>