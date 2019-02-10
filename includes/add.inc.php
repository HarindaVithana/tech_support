<?php
    include ('connection.php');

    if (isset($_POST['add'])){ 
        $name=$_POST['name'];
        $field=$_POST['field'];
        $address=$_POST['address'];
        $phone=$_POST['phone'];
        $district=$_POST['district'];

        $sql1 = "INSERT INTO technecians(name,field,address,phone,district)  VALUES ('$name','$field','$address','$phone','$district');";
        $result2 = mysqli_query($conn,$sql1);
        if (!$result2){
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
            alert("Successfully added!");
            window.location.href = "../admin.php";
        </script>
<?php  
        }
    }
?>
