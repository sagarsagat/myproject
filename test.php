
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Add Student</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>
        

        <div class="col-md-2"></div>
            <div class="col-md-8">
            <h1>QR Code List</h1>
            <br>   
           
            <br>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Parking Name</th>
                        <th>QR CODE</th>
                      
                    </tr>
                </thead>
                <tbody>
                  <?php
                    include("connection.php");
                    include("functions.php");
                   
                    $query = "select * from qr_d  ";

                    $result = mysqli_query($con,$query);
                if (mysqli_num_rows($result) > 0) {
             
                while($row = mysqli_fetch_assoc($result)){      

                    echo "<tr><th>1</th><th>{$row['user_id']}</th><th>{$row['user_name']}</th>
                    <th> {$row['qr_path']}</th><th><img src='{$row['qr_path']}' width='50px' height='50px' ></th><th><button type='button' class='btn btn-primary' ><a href='{$row['qr_path']}'>download</a></button></th>
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