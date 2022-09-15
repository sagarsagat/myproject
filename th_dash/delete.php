<?php
session_start();
include("../connection.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
   $nid=$_POST['id'];
   $query = "DELETE FROM `file_details` WHERE  N_id='$nid'";
	mysqli_query($con, $query);
    header("Location: ./tc_dash.php");
	die;

}

?>
