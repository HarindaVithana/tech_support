<?php session_start(); ?>
<?php
    include('includes/connection.php');
    include("includes/logout.php");

if(empty($_SESSION["logged"])){
   header("Location: index.php");
}
?>

<link rel="stylesheet" type="text/css" href="css/public.css">
<header>
    <div class="main">
        <div class="topnav">
            <div class="nametxt">
                <h1>Redoran Tech Support</h1>
            </div>
            <div class="navbar">
                <ul class="ul"> 
                    <li class="active"><a href="admin.php">EDIT</a></li>
                    <li><a href="technecians.php">TECHNECIANS</a></li>
                    <li><a href="users.php">USERS</a></li>
                    <li><a href="complains.php">COMPLAINS</a></li>
                    <li><a href="home.php?logout='1'">LOGOUT</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

<center>
    <div class="delform">
    <form action="includes/delete.inc.php" method="POST" name="delete">
        <table style="line-height: 20px;">
            <tr>
                <td>Enter Name to delete: </td><td><input type="text" name="name" required></td>
            </tr>
        </table> 
        <button type="submit" name="delete">Delete technician</button>
    </form>
    </div>
    <div class="addform">
    <form method="POST" name="add">
        <table style="line-height: 20px;">
            <tr>
                <td>Enter Name to add or update:</td><td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <td>Enter field to add or update:</td><td><input type="text" name="field" required></td>
            </tr>
            <tr>
                <td>Enter address to add or update:</td><td><input type="text" name="address" required></td>
            </tr>
            <tr>
                <td>Enter phone to add or update:</td><td><input type="text" name="phone" required></td>
            </tr>
            <tr>
                <td>Enter district to add or update:</td><td><input type="text" name="district" required></td>
            </tr>
        </table>
        <br>
        <button type="submit" name="add" formaction="includes/add.inc.php">Add new technician</button>
        <button type="submit" name="update" formaction="includes/update.inc.php">Update info</button>               
    </form>
    </div>
</center>

<?php $mysqli_close = mysqli_close($conn); ?>