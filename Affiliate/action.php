<?php 

if (isset($_POST['btnRegister'])) {

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_elearning";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


    $name =         $_POST['name'];
    $phone_number = $_POST['phone_number'];
    $email =        $_POST['email'];
  

    

$sql = "INSERT INTO affiliate_id ( name, phone_number, email)
VALUES ( 'name', 'phone_number', 'email')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

  
    message("Your now succefully registered. You can login now!","success");
    redirect("affiliate.php");

}



?> 