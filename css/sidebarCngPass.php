


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Total users</title>
	<link href="css/course/bootstrap.min.css" rel="stylesheet">
	<link href="css/course/font-awesome.min.css" rel="stylesheet">
	<link href="css/course/styles.css" rel="stylesheet">

	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>

<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>StockUpWorld </span>Change Password</a>
				<ul class="nav navbar-top-links navbar-right">

							</li>
						</ul>
					</li>
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
		<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $_SESSION['username'];?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
		</div>
		<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li class="active"><a href=""><em class="fa fa-key">&nbsp;</em>Change Password</a></li>
				
		</ul>
	</div><!--/.sidebar-->
</body>
</html>
