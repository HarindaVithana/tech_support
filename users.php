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
            <li><a href="admin.php">EDIT</a></li>
            <li><a href="technecians.php">TECHNECIANS</a></li>
            <li class="active"><a href="users.php">USERS</a></li>
            <li><a href="complains.php">COMPLAINS</a></li>
            <li><a href="home.php?logout='1'">LOGOUT</a></li>
      	</ul>
  </div>
</div>
</div>
</header>
<br>
<?php

	$result = mysqli_query($conn,"SELECT * FROM users;");
	if (!$result) {
		die("Database query failed: " . mysqli_error($conn));
	}
?>
<?php
		echo "<table class=\"nametab\">
			<tr>
				<th>User Id</th>
				<th>First name</th>
				<th>Last name</th>
				<th>E-mail</th>
				<th>Username</th>		
			</tr>";
		// 4. Use returned data
			while ($row = mysqli_fetch_array($result)) {
				echo "<tr>
						<td>{$row['user_id']}</td>
						<td>{$row['user_first']}</td>
						<td>{$row['user_last']}</td>
						<td>{$row['user_email']}</td>
						<td>{$row['user_uid']}</td>
					</tr>";  
			}

		echo "</table>"; 
?>
<?php include("includes/footer.php"); ?>