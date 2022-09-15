<?php 
session_start();

	include("../connection.php");
	include("../functions.php");

	$user_data = check_login($con);
    
    


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
                    <a href="i_dash.php"><i class="fas fa-home"></i> Dashboard</a>
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
                        <h3>Blog</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">Upload <div></div></div>
                                <div class="card-body">
                                
                                    <form accept-charset="utf-8" method="POST" action="upload.php" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="nn" class="form-label">Name of topic</label>
                                            <input type="text" name="nn" placeholder="Notes" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
								        <label class="mb-2 text-muted" for="sub">Subject:</label>
								        <select class="form-control" name="sub" required>
  								        <option value="">Choose one</option>
								        <option value="DBMS">DBMS</option>
								        <option value="C++">C++</option>
                                        <option value="Java">Java</option>
                                        <option value="HTML">HTML</option>
								        </select>
									        <div class="invalid-feedback">
										Please choose any one
									    </div>
								        </div>
                                        <div class="mb-3">
                                            <label for="dc" class="form-label">Description</label>
                                            <input type="text" name="dc" placeholder="Detailed-Description" class="form-control" required>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <input type="submit" class="btn btn-primary" name="uploadBtn" value="Submit">
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
