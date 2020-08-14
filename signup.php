<?php
session_start();
if(isset($_SESSION['username']))
{
	header('location: welcome.php');
}


?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>SignUp</title>
    <link href="css/login_signup/bootstrap.css" rel="stylesheet">
    <link href="css/login_signup/font-awesome.css" rel="stylesheet" />
    <link href="css/login_signup/style6.css" rel="stylesheet">
    <link href="css/login_signup/style-responsive.css" rel="stylesheet">
  </head>

  <body>
  <?php

include 'db_connect.php';

	if(isset($_POST['signup']))
	{
		$username = mysqli_real_escape_string($con, $_POST['username']);
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
		$password = mysqli_real_escape_string($con, $_POST['password']);
		$cfmpassword = mysqli_real_escape_string($con, $_POST['cfmpassword']);
		$affiliate = mysqli_real_escape_string($con, $_POST['affiliate']);

		$pass = password_hash($password, PASSWORD_BCRYPT);
		$cpass = password_hash($cfmpassword, PASSWORD_BCRYPT);

		$emailquery = "select * from registration where email='$email' ";
		$query = mysqli_query($con,$emailquery);

		$emailcount = mysqli_num_rows($query);

		if($emailcount>0)
		{
			$_SESSION['action1']="*Email Aleady Exist";
			if("meta http-equiv='refresh'")
			{
				echo "<meta http-equiv='refresh' content='5;url=signup.php'>";
			}
		}
		else
		{
			if($password === $cfmpassword)
			{
				$insertquery = "insert into registration(username,email,mobile,password,cpassword,affiliate)
				values('$username','$email','$mobile','$pass','$cpass','$affiliate')";

				$iquery = mysqli_query($con, $insertquery);

				if($iquery)
				{
					?>
						<script>
							alert("Inserted Successful");
						</script>
					<?php
					header('location: login.php');
				}else
				{

					?>
					<?php
					$_SESSION['action1']="*Not Inserted";
					echo "<meta http-equiv='refresh' content='5;url=signup.php'>";
				}
			}
			else
			{
				$_SESSION['action1']="*Both password should be same";
				echo "<meta http-equiv='refresh' content='5;url=signup.php'>";
			}
		}
	}

?>
  
  
  
  
  
	  <div id="login-page" style="margin-bottom:50px;">
	  	<div class="container">
      
	  	
		      <form class="form-login" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
		        <h2 class="form-login-heading">User Sign up</h2>
                  <p style="color:#F00; padding-top:20px;" align="center">
                    <?php echo $_SESSION['action1'];?><?php echo $_SESSION['action1']="";?></p>
		        <div class="login-wrap">
					<input type="text" name="username" class="form-control" placeholder="Enter Full Name" autofocus="" required>
		            <br>
		            <input type="email" name="email" class="form-control" placeholder="E-mail" autofocus="" required>
		            <br>
					<input type="text" name="mobile" class="form-control" placeholder="Mobile no." autofocus="" required>
		            <br>
		            <input type="password" name="password" class="form-control" placeholder="Password" required><br >
					<input type="password" name="cfmpassword" class="form-control" placeholder="Confirm Password" required><br >
					<input type="text" name="affiliate" class="form-control" placeholder="Affiliate" ><br >
		            <input  name="signup" class="btn btn-theme btn-block" type="submit" value="SignUp">
					<div style="margin-top:10px;">
						<p>Have an account? <a href="login.php">Login Now</a><p>
					</div>
		         
		        </div>
		      </form>	  	
	  	
	  	</div>
	  </div>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
