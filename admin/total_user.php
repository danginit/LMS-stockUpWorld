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
							<th>Id</th>
		          <th>Name</th>
		          <th>Email</th>
							<th>Mobile</th>
							<th>Affiliate</th>
							<th>EDIT</th>
							<th>DELETE</th>
		        </tr>
		      </thread>
							<?php
							 $connection = mysqli_connect("localhost","root","","signup");
							 $query = "SELECT id,username,email,mobile,affiliate FROM registration";
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
						<td> <?php echo $row['id']; ?></td>
						<td> <?php echo $row['username']; ?></td>
						<td> <?php echo $row['email']; ?></td>
						<td> <?php echo $row['mobile']; ?></td>
						<td> <?php echo $row['affiliate']; ?></td>
						<td>
								<form action="register_edit.php" method="post">
										<input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
									<a href="register_edit.php?edit=<?php echo $row['id'];?>">	<button type="submit" name="edit_btn" class="btn btn-success">EDIT</button></a>
								<form>
						</td>
						<td>
								<button type="submit"class="btn btn-danger">DELETE</button>
						</td>
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
