<?php session_start(); ?>
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
            <li><a href="users.php">USERS</a></li>
            <li class="active"><a href="complains.php">COMPLAINS</a></li>
            <li><a href="home.php?logout='1'">LOGOUT</a></li>
      </ul>
  </div>
</div>
</div>
</header>
<br>
<?php

	$result = mysqli_query($conn,"SELECT * FROM complains;");
	if (!$result) {
		die("Database query failed: " . mysqli_error($conn));
	}
?>
<?php
		echo "<table class=\"nametab\">
			<tr>
				<th>Name</th>
				<th>E-mail</th>
				<th>Complain</th>
			</tr>";

			while ($row = mysqli_fetch_array($result)) {
				echo "<tr>
						<td>{$row['name']}</td>
						<td>{$row['mail']}</td>
						<td>{$row['complain']}</td>
					</tr>";  
			}
		echo "</table>"; 
?>
<?php include("includes/footer.php"); ?>