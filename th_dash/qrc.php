<?php 
session_start();

	include("../connection.php");
	include("../functions.php");

	$user_data = check_login($con);
    ad_check($_SESSION['role']);
    
    
?>
<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Notesify</title>
    <link rel="shortcut icon" href="../img/fav.ico" />
    <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">
    <link href="assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
    
    
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="active">
            
            <div class="sidebar-header">
            <a class="navbar-brand" >Notesify<span class="dot">.</span></a>
            </div>
            <ul class="list-unstyled components text-secondary">
                <li>
                    <a href="tc_dash.php"><i class="fas fa-home"></i> Dashboard</a>
                </li>
                <li>
                    <a href="forms.php"><i class="fas fa-file-alt"></i>Create Blog</a>
                </li>
                <li>
                    <a href="qrc.php"><i class="fas fa-file-alt"></i>QR Code Generator</a>
                </li>
                
            </ul>
               
        </nav>
        <div id="body" class="active">
            <!-- navbar navigation component -->
            <nav class="navbar navbar-expand-lg navbar-white bg-white">
                <button type="button" id="sidebarCollapse" class="btn btn-light">
                    <i class="fas fa-bars"></i><span></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ms-auto">
                        
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="#" id="nav2" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user"></i> <span><?php     echo  $_SESSION['un']; ?></span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-envelope"></i> Messages</a></li>
                                         
                                        <div class="dropdown-divider"></div>
                                        <li><a href="../logout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- end of navbar navigation -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 page-header">
                            <div class="page-pretitle">Overview</div>
                            <h2 class="page-title">QR Code List</h2>
                        </div>
                    </div>
                    
                    <div class="col-md-2"></div>
            <div class="col-md-8">
            
               
           
            <br>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Username</th>
                        <th>QR CODE</th>
                        <th>link</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                  
                   
                    $query = "select * from qr_d  ";

                    $result = mysqli_query($con,$query);
                if (mysqli_num_rows($result) > 0) {
                    $i=1;
                while($row = mysqli_fetch_assoc($result)){      

                    echo "<tr><td>".$i++."</td><td>{$row['user_name']}</td>
                    <td><img src='{$row['qr_path']}' width='50px' height='50px' ></td><td><button type='button' class='btn btn-primary' ><a href='../{$row['qr_path']}'>download</a></button></td><td><form action='d_u.php' method='POST' ><input

                    type='hidden' name='id' value=" . $row['user_id'] . " ><input type='submit' class='btn btn-sm btn-danger' name='submit' value='Delete'></form></td>
                    </tr> \n ";
                        
                 

                            }
                     } else {
                        echo ' <tr>
                        <th colspan="5"><center>No-Records</center> </th>
                        
                          </tr>';
                      }
                      
                  ?>
                </tbody>
            </table>
            <a href=""></a>
    </div>


                        
                        
                   
         
         


            

        </div>
    </div>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chartsjs/Chart.min.js"></script>
    <script src="assets/js/dashboard-charts.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
