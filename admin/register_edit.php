<?php 
session_start();
include('sidebar/sidebar.php');?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="#">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Edit User</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Edit User</h1>
    </div>
  </div><!--/.row-->

  <?php

  $connection = mysqli_connect("localhost","root","","signup");
  if(isset($_POST['edit_btn']))
  {
	 $id = $_POST['edit_id'];
     $query = "SELECT * FROM registration where Id='$id'";
     $query_run = mysqli_query($connection, $query);

	foreach($query_run as $row)
	{
						
?>

  <div class="panel panel-container">
    <div class="row">
      <table class="table" id="dataTable" width="100%" cellspacing="0">
        <div style="padding-left:35%;">
        	<div class="row" >
        		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-4" >
        			<div class="login-panel panel panel-default" >
        				<div class="panel-body" >
						
        					<form action="code.php" method="POST" >
							
        						<fieldset>
        							<div class="form-group">
        								<input class="form-control" value="<?php echo $row['username']?>" name="edit_username" type="text" autofocus="" required>
        							</div>
        							<div class="form-group">
        								<input class="form-control" value="<?php echo $row['email']?>" name="email" type="edit_email" autofocus="" required>
        							</div>
        							<div class="form-group">
        								<input class="form-control" value="<?php echo $row['mobile']?>" name="mobile" type="edit_mobile" autofocus="" required>
        							</div>
        							<div class="form-group">
        								<input class="form-control" value="<?php echo $row['affiliate']?>" name="edit_affiliate" type="text" autofocus="">
        							</div>

        							<input type="submit" name="" class="btn btn-primary" value="Cancel">
                      <input type="submit" name="updatebtn" class="btn btn-primary" value="Update">

                   </form>
                  <?php
                      }
                     }?>
        			  </div>
                </div>
                </div>
        			</div>
        		</div><!-- /.col-->
        	</div><!-- /.row -->
