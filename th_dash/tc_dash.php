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
                            <h2 class="page-title">Dashboard</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3"><a href="th_form.php">
                            <div class="card" >
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M384 352v64c0 17.67-14.33 32-32 32H96c-17.67 0-32-14.33-32-32v-64c0-17.67-14.33-32-32-32s-32 14.33-32 32v64c0 53.02 42.98 96 96 96h256c53.02 0 96-42.98 96-96v-64c0-17.67-14.33-32-32-32S384 334.3 384 352zM201.4 9.375l-128 128c-12.51 12.51-12.49 32.76 0 45.25c12.5 12.5 32.75 12.5 45.25 0L192 109.3V320c0 17.69 14.31 32 32 32s32-14.31 32-32V109.3l73.38 73.38c12.5 12.5 32.75 12.5 45.25 0s12.5-32.75 0-45.25l-128-128C234.1-3.125 213.9-3.125 201.4 9.375z"/></svg>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail">
                                                <p class="detail-subtitle">Upload</p>
                                                

                                                <span class="number">PDF</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="fas fa-calendar"></i>  Theory notes
                                        </div>
                                    </div>
                                </div>
                            </div></a>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3"><a href="pr_form.php">
                            <div class="card"  >
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M384 352v64c0 17.67-14.33 32-32 32H96c-17.67 0-32-14.33-32-32v-64c0-17.67-14.33-32-32-32s-32 14.33-32 32v64c0 53.02 42.98 96 96 96h256c53.02 0 96-42.98 96-96v-64c0-17.67-14.33-32-32-32S384 334.3 384 352zM201.4 9.375l-128 128c-12.51 12.51-12.49 32.76 0 45.25c12.5 12.5 32.75 12.5 45.25 0L192 109.3V320c0 17.69 14.31 32 32 32s32-14.31 32-32V109.3l73.38 73.38c12.5 12.5 32.75 12.5 45.25 0s12.5-32.75 0-45.25l-128-128C234.1-3.125 213.9-3.125 201.4 9.375z"/></svg>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail">
                                                <p class="detail-subtitle">Upload</p>
                                                

                                                <span class="number">PDF</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="fas fa-calendar"></i>  Pratical notes
                                        </div>
                                    </div>
                                </div>
                            </div></a>
                        </div>
                        
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3"><a href="vd_form.php">
                            <div class="card" >
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M384 352v64c0 17.67-14.33 32-32 32H96c-17.67 0-32-14.33-32-32v-64c0-17.67-14.33-32-32-32s-32 14.33-32 32v64c0 53.02 42.98 96 96 96h256c53.02 0 96-42.98 96-96v-64c0-17.67-14.33-32-32-32S384 334.3 384 352zM201.4 9.375l-128 128c-12.51 12.51-12.49 32.76 0 45.25c12.5 12.5 32.75 12.5 45.25 0L192 109.3V320c0 17.69 14.31 32 32 32s32-14.31 32-32V109.3l73.38 73.38c12.5 12.5 32.75 12.5 45.25 0s12.5-32.75 0-45.25l-128-128C234.1-3.125 213.9-3.125 201.4 9.375z"/></svg>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail">
                                                <p class="detail-subtitle">Upload</p>
                                                

                                                <span class="number">Video</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="fas fa-calendar"></i>  Video tutorials
                                        </div>
                                    </div>
                                </div>
                            </div></a>
                        </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 mt-3"><a href="">
                            <div class="card"  >
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M211.2 96C211.2 131.3 182.5 160 147.2 160C111.9 160 83.2 131.3 83.2 96C83.2 60.65 111.9 32 147.2 32C182.5 32 211.2 60.65 211.2 96zM32 256C32 220.7 60.65 192 96 192H192C204.2 192 215.7 195.4 225.4 201.4C188.2 216.5 159.8 248.6 149.6 288H64C46.33 288 32 273.7 32 256V256zM415.9 200.6C425.3 195.1 436.3 192 448 192H544C579.3 192 608 220.7 608 256C608 273.7 593.7 288 576 288H493.6C483.2 247.9 453.1 215.4 415.9 200.6zM391.2 226.4C423.3 233.8 449.3 257.3 460.1 288C463.7 298 465.6 308.8 465.6 320C465.6 337.7 451.3 352 433.6 352H209.6C191.9 352 177.6 337.7 177.6 320C177.6 308.8 179.5 298 183.1 288C193.6 258.3 218.3 235.2 249.1 227.1C256.1 225.1 265.1 224 273.6 224H369.6C377 224 384.3 224.8 391.2 226.4zM563.2 96C563.2 131.3 534.5 160 499.2 160C463.9 160 435.2 131.3 435.2 96C435.2 60.65 463.9 32 499.2 32C534.5 32 563.2 60.65 563.2 96zM241.6 112C241.6 67.82 277.4 32 321.6 32C365.8 32 401.6 67.82 401.6 112C401.6 156.2 365.8 192 321.6 192C277.4 192 241.6 156.2 241.6 112zM608 416C625.7 416 640 430.3 640 448C640 465.7 625.7 480 608 480H32C14.33 480 0 465.7 0 448C0 430.3 14.33 416 32 416H608z"/></svg>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail">
                                                <p class="detail-subtitle">Schedule live</p>
                                                <span class="number">Live</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="fas fa-envelope-open-text"></i> Schedule live classes
                                        </div>
                                    </div>
                                </div>
                            </div></a>
                        </div>
                    </div>
         <div class="content">
            <table class="table table-success table-striped">
            <thead>
            <tr>
              <th colspan="5">Recent-Uploads :</th>
              
            </tr>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Subject</th>
              <th scope="col">time</th>
              <th scope="col">Uploaded By</th>
              <th scope="col">LINK</th>
            </tr>
            </thead>
            <tbody>
            
            <?php 
            
	            $id = $_SESSION['user_id'];
	            $query = "select * from file_details where user_id= '$id' ";

	            $result = mysqli_query($con,$query);
            if (mysqli_num_rows($result) > 0) {
		 
            while($row = mysqli_fetch_assoc($result)){
                
            echo "<tr><th>1</th><th>{$row['subject']}</th><th>{$row['date']}</th><th>{$row['uploaded_by']}</th><th>
            </th></tr>\n ";
              } } else {
                echo ' <tr>
                <th colspan="5"><center>No-Records</center> </th>
                
                  </tr>';
              }
              ?>
              
              
                </tbody>
            </table>
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
