<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_elearning";

if (isset($_POST['btnRegister'])) {



$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


  $name =  $_REQUEST['name'];
	$phone_number =  $_REQUEST['phone_number'];
	$email =  $_REQUEST['email'];

		function unique_code($limit)
{
  return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
}

	$refer_value = unique_code(8);

	$refer_id = strval($refer_value);



$sql = "INSERT INTO affiliate_id ( name, phone_number, email , refer_id )
VALUES ( '$name', '$phone_number', '$email' , '$refer_id' )";

if (mysqli_query($conn, $sql)) {
 // $last_id = mysqli_insert_id($conn);
  echo "Affiliate ID created successfully. <br> Your affiliate ID is: " . $refer_id;
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);




}



?>
