<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
    ad_check($_SESSION['role']);
    
    
?>
<!doctype html>

<html lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="./img/fav.ico" />
        <title>Notesify</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    </head>
<body>

            <!-- end of navbar navigation -->

        <div class="col-md-2"></div>
            <div class="col-md-8">
            <h1>QR Code List</h1>
            <br>   
           
            <br>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Username</th>
                        <th>QR CODE</th>
                        <th>link</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                  
                   
                    $query = "select * from qr_d  ";

                    $result = mysqli_query($con,$query);
                if (mysqli_num_rows($result) > 0) {
                    $i=1;
                while($row = mysqli_fetch_assoc($result)){      

                    echo "<tr><th>".$i++."</th><th>{$row['user_name']}</th>
                    <th><img src='{$row['qr_path']}' width='50px' height='50px' ></th><th><button type='button' class='btn btn-primary' ><a href='{$row['qr_path']}'>download</a></button></th>
                    </tr> \n ";

                 

                            }
                     } 
                    echo '';  
                  ?>
                </tbody>
            </table>
            <a href=""></a>
    </div>          
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>