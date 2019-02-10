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
	<div class="main-banner">
		<div class="banner-text">
			<h1>MOBILE</h1>
		</div>
		<div class="banner-image">
			<img id="bann" src="images/2.jpg">
		</div>
	</div>
<?php

	$district=$_POST['district'];
	$result = mysqli_query($conn,"SELECT * FROM technecians WHERE field='mobile' AND district='$district';");
	if (!$result) {
		die("Database query failed: " . mysqli_error($conn));
	}
?>
<?php
		echo "<table class=\"nametab\">
			<tr>
				<th>Name</th>
				<th>Address</th>
				<th>Contact No.</th>
			</tr>";
		
		if(isset($_POST['submit'])){
			while ($row = mysqli_fetch_array($result)) {
				echo "<tr>
						<td>{$row['name']}</td>
						<td>{$row['address']}</td>
						<td>{$row['phone']}</td>
					</tr>";  
			}
		}
		echo "</table>"; 
?>
<?php include("includes/footer.php"); ?>