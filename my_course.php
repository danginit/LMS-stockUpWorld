<?php 
session_start();
include('css/sidebar.php');

/*if(!isset($_SESSION['login']))
{
	header('location: adminLogin.php');
}*/


?>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Course</h1>
			</div>
		</div><!--/.row-->

		<div class="panel panel-container">
			
		</div>
</body>
</html>
