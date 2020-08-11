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
			<div class="row" style="padding-left:25px;">
				<table class="table" id="dataTable" width="100%" cellspacing="0">
		      <thead>
		        <tr>
							<th>Course Name</th>
							<th>Enroll Date</th>
							<th>End Date</th>
							<th>Action</th>
		        </tr>
		      </thead>
							<?php
							 $connection = mysqli_connect("localhost","root","","signup");
							 $query = "SELECT course_name,enroll_date,end_date FROM courses";
							 $query_run = mysqli_query($connection, $query);
              ?>

    <tbody >
      <?php
      if(mysqli_num_rows($query_run)>0)
      {
        while($row = mysqli_fetch_assoc($query_run))
        {
					?>
					<tr>
						<td > <?php echo $row['course_name']; ?></td>
						<td> <?php echo $row['enroll_date']; ?></td>
						<td> <?php echo $row['end_date']; ?></td>
						<td>
								<form action="register_edit.php" method="post">
										<input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
										<button type="submit" name="edit_btn" class="btn btn-success">Go to Course</button>
								</form>
						</td>
					<tr>
        <?php
			   }
      }
			else{
					echo 'No Record found';
				}
				?>
				<?php
				if(isset($_SESSION['success']) && $_SESSION['success'] !='')
				{
					echo '<h2> ' .$_SESSION['success'].' </h2>';
					unset($_SESSION['success']);
				}
				if(isset($_SESSION['status']) && $_SESSION['status'] !='')
				{
					echo '<h2> ' .$_SESSION['status'].' </h2>';
					unset($_SESSION['status']);
				}
				?>
    </tbody>
  	</table>
	</div>
		</div>
</body>
</html>
