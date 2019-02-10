<?php
	include ('connection.php');

	if (isset($_POST['update'])){ 
        $name=$_POST['name'];
        $field=$_POST['field'];
        $address=$_POST['address'];
        $phone=$_POST['phone'];
        $district=$_POST['district'];

        $query = "UPDATE technecians SET field = '$field', address = '$address', phone = '$phone', district = $district WHERE name='$name';";
        $result = mysqli_query($conn,$query);
        if (!$result){
?>
        <script type="text/javascript">
            alert("Error Occured!");
            window.location.href = "../admin.php";
        </script>
<?php    
        }
        else{
?>
        <script type="text/javascript">
            alert("Successfully updated!");
            window.location.href = "../admin.php";
        </script>
<?php  
        }
    }

    
?>