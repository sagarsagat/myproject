<?php
session_start();
include("../connection.php");
if(isset($_GET['N_id'])) {
    $id = $_GET['N_id'];
    echo $id;
}

    /*$id = $_SESSION['user_id'];
    
    $query1 = "select * FROM file_details WHERE user_id = '$id'";
    $query = "DELETE FROM file_details WHERE user_id = '$id'";
    $result = mysqli_query($con, $query);
    echo $result;
    if($result) {
        
     
    header('Location:tc_dash.php');
    
    }else{
        echo "igyhcv";
    }*/

?>
