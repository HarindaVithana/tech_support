<?php session_start(); ?>
<?php include("includes/connection.php"); ?>

<div class="main">
	<section>
		<div class="loghead">
			<font color="white"><h2>Create a New Account</h2>
			<h3>It's free and always will be</h3></font>
		</div>
		<div>
			<form class="signup-form" action="includes/signup.inc.php" method="POST">
				<input type="text" name="first" placeholder="Firstname" required><br><br>
				<input type="text" name="last" placeholder="Lastname" required><br><br>
				<input type="email" name="email" placeholder="E-mail" required><br><br>
				<input type="text" name="uid" placeholder="Username" required><br><br>
				<input type="password" name="pwd" placeholder="Password" required><br><br>
				<button type="submit" name="submit">Register</button>
				<button type="cancel" name="reset">Reset</button>
			</form>
		</div>
	</section>
</div>
