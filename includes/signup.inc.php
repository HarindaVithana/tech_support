<?php

if (isset($_POST['submit'])){
	include("connection.php"); 

	$first=$_POST['first'];
	$last=$_POST['last'];
	$email=$_POST['email'];
	$uid=$_POST['uid'];
	$pwd=$_POST['pwd'];

	$sql="SELECT*FROM users WHERE user_uid='$uid'";
	$result=mysqli_query($conn,$sql);
	$resultCheck=mysqli_num_rows($result);
	if ($resultCheck>0) { 
?>
		<script type="text/javascript">
			alert("This username is taken");
			window.location.href = "../signup.php";
		</script>
<?php				
		exit();
	} 
	else{//insert the user into the database
		$sql="INSERT INTO users(user_first, user_last,user_email, user_uid,user_pwd) VALUES('$first','$last','$email','$uid','$pwd');";
		$result=mysqli_query($conn,$sql);
		if (!$result) {
?>
			<script type="text/javascript">
				alert("Error occured");
				window.location.href = "../signup.php";
			</script>
<?php
		}
		else{
?>
			<script type="text/javascript">
				alert("Registered Successfully");
				window.location.href = "../signup.php";
			</script>
<?php
		}
	}
}				
