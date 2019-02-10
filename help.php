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
      <h1>Redoran Tech Support</h1>
    </div>
    <div class="navbar">
      <ul class="ul"> 
        <li ><a href="home.php">HOME</a></li>
        <li class="active"><a href="help.php">HELP</a></li>
        <li ><a href="contact.php">CONTACT</a></li>
        <li ><a href="home.php?logout='1'">LOG OUT</a></li>
      </ul>
    </div>
  </div>
</div>
</header>


<div class="main">
	<div class="content">
		<h2 class="head">Help</h2>
		<p>Thank you for Signing in with Redoran Tech support if you need any help regarding following topics simply click on the link.</p>
		<p>
			<a href="#GetHelp">+ Get help from a Technecian</a><br>
			<a href="#Complain">+ Complain about a service</a><br>
		</p>
		<h3><a name="GetHelp">Get help from a Technecian</a></h3>
		<p>If you need to contact any of the technecians regarding a problem follow these few steps to find a technecian closest to you. We provide the address and the telephone number of the technecian.</p>
		<ol>
			<p>1.Navigate to the <a href="home.php" target="_blank">home</a> page.<br>
			2.Select a feild out of Electrical, Software, Hardware and Mobile by simply clicking on the icon.<br>
			3.Enter your district in the field and press "submit" to proceed.<br>
			4.You will see a table with details of all the technecians in the area.<br> 
		</ol>
		<h3><a name="Complain">Complain about a service</a></h3>
		<p>If you have a complain or a problem with our services please contact us by simply clicking the <a href="contact.php">Contact us</a> on top menu. It will open a page where you can find our contact numbers or simply post a compalin by filling out the form.</p>
	</div>
</div>

<?php include("includes/footer.php"); ?>