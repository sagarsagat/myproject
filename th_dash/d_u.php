<?php
session_start();
include("../connection.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
   $nid=$_POST['id'];
   $query = "DELETE FROM `users` WHERE  user_id='$nid'";
   $query1 = "DELETE FROM `qr_d` WHERE  user_id='$nid'";
	mysqli_query($con, $query);
    mysqli_query($con, $query1);
    header("Location: ./qrc.php");
	die;

}

?>
