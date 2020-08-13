<?php 
session_start();
include('css/sidebarCngPass.php');

if(!isset($_SESSION['username']))
{
	header('location: index.php');
}

include 'db_connect.php';

	if(isset($_POST['submit']))
	{
		$email = $_POST['email'];
		$old_pass = $_POST['old_pass'];
		$new_password = $_POST['new_password'];
		$new_cfmpassword =$_POST['new_cfmpassword'];

		$pass = password_hash($new_password, PASSWORD_BCRYPT);
		$cpass = password_hash($new_cfmpassword, PASSWORD_BCRYPT);

		$emailquery = "select * from registration where email='$email'";
		$query = mysqli_query($con,$emailquery);

		$email_pass = mysqli_fetch_assoc($query);
		$db_pass = $email_pass["password"];
		$pass_decode = password_verify($old_pass, $db_pass);

#if(isset($_POST['submit']))
		#{
				if($pass_decode)
				{
					if($new_password == $new_cfmpassword)
					{
					$updatequery = "update registration set password='$pass', cpassword='$cpass' where email='$email'";

					$iquery = mysqli_query($con, $updatequery);

					if($iquery)
					{
						?>
						<script>
							alert("Updated Successful");
						</script>
						<?php
						#header('location: login.php');
					}
					else
					{

						?>
						<script>
							alert(" not Updated");
						</script>
						<?php
					}
					}
				}
				else
				{
					echo "password are not matching";
				}
			
		#}
		#else
		#{
		#	echo "Invalid Email";
		#}
	}

?>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Change Password</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Change Password</h1>
			</div>
		</div><!--/.row-->

		<div class="panel panel-container" style="padding:20px;">
			<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST" >
						<fieldset>
							
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="" required>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Old Password" name="old_pass" type="password" autofocus="" required>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="New Password" name="new_password" type="password" autofocus="" required>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Conform New Password" name="new_cfmpassword" type="password" value="" required>
							</div>

							<input type="submit" name="submit" class="btn btn-primary" value="Change Password">
							<!--<div>
								<p>Have an account? <a href="login.php">Login</a><p>
							</div>-->
							<!--<a type="submit" name="submit" class="btn btn-primary">Login</a>--></fieldset>
					</form>
		</div>
</body>
</html>