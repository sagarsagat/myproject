<?php 
session_start();

	include("../connection.php");
	include("../functions.php");

	$user_data = check_login($con);
    ad_check($_SESSION['role']);
    
    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['name'];
		 $user_email = $_POST['email'];
		
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$hash=password_hash($password,PASSWORD_DEFAULT);
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,role,user_email,password) values ('$user_id','$user_name','teacher','$user_email','$hash')";
			$ob=" username :".$user_name."\n User_email:".$user_email."\n password :".$password;
			$path=qr_g($ob);
			$q2="insert into qr_d (user_id,user_name,qr_path) values ('$user_id','$user_name','$path')";
            mysqli_query($con, $query);
            mysqli_query($con,$q2);
			header("Location: tc_dash.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}

    
function qr_g($na){
	include('../phpqrcode/qrlib.php');
	$path="";
	$file=$path.uniqid().".png";
	$ps=10;
	$fs=10;
	$ec='L';
	QRcode::png($na,$file,$ec,$ps,$fs);
	return $file;

}
    

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
                                    <i class="fas fa-user"></i> <span><?php     echo  $_SESSION['un'];?></span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-envelope"></i> Messages</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="../logout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- end of navbar navigation  -->
            <div class="content">
                <div class="container">
                    <div class="page-title">
                        <h3>Teacher Account</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">Create account <div></div></div>
                                <div class="card-body">
                                
                                    <form accept-charset="utf-8" method="POST" action="" enctype="multipart/form-data">
                                    
                                    
                                    <div class="mb-3">
									<label class="mb-2 text-muted" for="name">Name</label>
									<input id="name" type="text" class="form-control" name="name" value="" required autofocus>
									<div class="invalid-feedback">
										Name is required	
									</div>
								</div>

								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" value="" required>
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div>
								

								<div class="mb-3">
									<label class="mb-2 text-muted" for="password">Password</label>
									<input id="password" type="password" class="form-control" name="password" required>
								    <div class="invalid-feedback">
								    	Password is required
							    	</div>
								</div>

								<p class="form-text text-muted mb-3">
									By registering you agree with our terms and condition.
								</p>

								<div class="align-items-center d-flex">
									<button type="submit" class="btn btn-primary ms-auto" >
										Register	
									</button>
								</div>
							                                  </form>
    
    
                                </div>
                            </div>
                        </div>
                        
                        
                               
                        
                        
                    </div>
                </div>
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

<?php

    ?>