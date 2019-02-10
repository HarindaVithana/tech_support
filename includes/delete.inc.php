<?php
	include ('connection.php');
	$name=$_POST['name'];
	$query = "DELETE  FROM technecians WHERE name ='$name';";
	$result2 = mysqli_query($conn,$query);
    if (!$result2){
?>
		<script type="text/javascript">
			alert("Error Occured!");
			window.location.href = "../admin.php";
		</script>;
<?php
	exit(); 
    }
    else {
?>
	<script type="text/javascript">
		alert("Successfully deleted!");
		window.location.href = "../admin.php";
	</script>";
<?php
    }
?>