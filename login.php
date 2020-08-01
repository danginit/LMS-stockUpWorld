<?php
session_start();
if(isset($_SESSION['username']))
{
	header('location: welcome.php');
}


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles4.css" rel="stylesheet">
</head>
<body>



<?php

include 'db_connect.php';

if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$email_search = "select * from registration where email='$email'";
	$query = mysqli_query($con,$email_search);
	$email_count = mysqli_num_rows($query);
	
	if($email_count)
	{ 
		$email_pass = mysqli_fetch_assoc($query);
		$db_pass = $email_pass['password'];
		
		$_SESSION['username'] = $email_pass['username'];
		$pass_decode = password_verify($password, $db_pass);
		
		if($pass_decode)
		{
			echo "Login Successful";
			?>
			<script>
				location.replace("welcome.php");
			</script>
			<?php 
		}
		else
		{
			echo "Password Incorrect";
		}
	}
	else
	{
		echo "Invalid Email";
	}
}

?>
<div style="padding-left:35%;">
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="" required>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="" required>
							</div>
							<input type="submit" name="submit" class="btn btn-primary" value="Login">
							<div>
								<p>Don't have an account? <a href="signup.php">Signup Now</a><p>
							</div>
							<!--<a type="submit" name="submit" class="btn btn-primary">Login</a>--></fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
</div>	

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
