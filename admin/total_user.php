<?php include('sidebar/sidebar.php');?>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Total User</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Total User</h1>
			</div>
		</div><!--/.row-->

		<div class="panel panel-container">
			<div class="row">
				<table class="table" id="dataTable" width="100%" cellspacing="0">
		      <thread>
		        <tr>
		          <th>Name</th>
		          <th>Mobile no</th>
		        </tr>
		      </thread>
							<?php
							 $connection = mysqli_connect("localhost","root","","signup");
							 $query = "SELECT Fname,MobileNo FROM tblstudent";
							 $query_run = mysqli_query($connection, $query);
              ?>

    <tbody>
      <?php
      if(mysqli_num_rows($query_run)>0)
      {
        while($row = mysqli_fetch_assoc($query_run))
        {
					?>
					<tr>
						<td> <?php echo $row['Fname']; ?></td>
						<td> <?php echo $row['MobileNo']; ?></td>
					<tr>
        <?php
			   }
      }
			else{
					echo 'No Record found';
				}
				?>
    </tbody>
  	</table>
	</div>
</div>
</div>

</body>
</html>
