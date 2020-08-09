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
	<title>signup</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles4.css" rel="stylesheet">
</head>
<body>



<?php

include 'db_connect.php';

	if(isset($_POST['submit']))
	{
		$email = mysqli_real_escape_string($con, $_POST['email']);
		
		$emailquery = "select * from registration where email='$email' ";
		$query = mysqli_query($con,$emailquery);
		
		$emailcount = mysqli_num_rows($query);
		
		if($emailcount)
		{
			$userdata= mysqli_fetch_array($query);
			$username=$userdata['username'];
			
			$subject = "Password Reset";
			$body = "Hi, $username. Click here too reset your password 
			http://localhost/academics/reset_password.php?token='eAfdhydfshsgRkhf'";
			$sender_email="From:niteshdangi80@gmail.com";
			if(mail($email,$subject,$body,$sender_email))
			{
				$_SESSION['username'] = "check your mail to reset your password $email";
				header('location:login.php');
				
			}
			else
			{
				echo "Email sending failed....";
			}
		}
		else
		{
			echo "No email found";
		}
	}

?>
<div style="padding-left:35%;">
	<div class="row" >
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-4" >
			<div class="login-panel panel panel-default" >
				<div><h2 style="text-align:center;">Recover Your Account</h2></div>
				<div class="panel-body" >
					<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST" >
						<fieldset>
							
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="" required>
							</div>
							
							<input type="submit" name="submit" class="btn btn-primary" value="Send mail">
							<div style="margin-top:10px;">
								<p>Have an account? <a href="login.php">Login Now</a><p>
							</div>
							<!--<div>
								<p>Have an account? <a href="login.php">Login</a><p>
							</div>-->
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
