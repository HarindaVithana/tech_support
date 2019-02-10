<?php
	include('connection.php');

	$name = $_POST['name'];
	$mail = $_POST['mail'];
	$complain = $_POST['complain'];

	$query = "INSERT INTO complains(name, mail, complain) VALUES('$name', '$mail', '$complain')";
	if(mysqli_query($conn,$query)){?>
		<script type="text/javascript">
			alert("Complain Successfully Added");
			window.location.href = "../contact.php"
		</script>
	<?php } ?>