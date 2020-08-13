<?php
include_once('db_connect.php');

if(isset($_POST['delete_btn']))
  {
	 $id = $_POST['delete_id'];
     $query = "DELETE from registration where Id='$id'";
     $query_run = mysqli_query($con, $query);
	 echo "<meta http-equiv='refresh' content='0;url=total_user.php'>";
  }
?>