<?php
session_start();

if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $mobile = $_POST['edit_mobile'];
    $affiliate = $_POST['edit_affiliate'];


    $query = "UPDATE registration SET username='$username', email='$email', mobile='$mobile', affiliat='$affiliate' WHERE id = '$id' ";
    $query_run = mysqli($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Updated";
        header("registration.php");
    }
    else {
      $_SESSION['success'] = "Your Data is NOT Updated";
      header("registration.php");
    }
}
?>
