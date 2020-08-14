<?php
session_start();
error_reporting(0);
include("db_connect.php");
if(isset($_POST['login']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
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
			#echo "Login Successful";
			?>
			<script>
				location.replace("welcome.php");
			</script>
			<?php 
		}
		else
		{
			$_SESSION['action1']="*Invalid password";
			echo "<meta http-equiv='refresh' content='5;url=login.php'>";
		}
	}
	else
	{
		$_SESSION['action1']="*Invalid Email"; 
		echo "<meta http-equiv='refresh' content='5;url=login.php'>";
	}
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

    <title>Login</title>
    <link href="css/login_signup/bootstrap.css" rel="stylesheet">
    <link href="css/login_signup/font-awesome.css" rel="stylesheet" />
    <link href="css/login_signup/style6.css" rel="stylesheet">
    <link href="css/login_signup/style-responsive.css" rel="stylesheet">
  </head>

  <body>
	  <div id="login-page">
	  	<div class="container">
      
	  	
		      <form class="form-login" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
		        <h2 class="form-login-heading">User Sign In</h2>
                  <p style="color:#F00; padding-top:20px;" align="center">
                    <?php echo $_SESSION['action1'];?><?php echo $_SESSION['action1']="";?></p>
		        <div class="login-wrap">
		            <input type="email" name="email" class="form-control" placeholder="E-mail" autofocus="" required>
		            <br>
		            <input type="password" name="password" class="form-control" placeholder="Password" required><br >
		            <input  name="login" class="btn btn-theme btn-block" type="submit" value="Login">
					<div style="margin-top:10px;">
							<p>Forgot Password don't worry <a href="recover_email.php">Click here</a><p>
					</div>
					<div>
							<p>Don't have an account? <a href="signup.php">Signup Now</a><p>
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
