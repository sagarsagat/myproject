<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="img/fav.ico" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">

    <title>Notesify</title>
</head>

<body  >
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Notesify<span class="dot">.</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Department
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          
                              <a class="dropdown-item" href="#">Animation &amp; Multimedia</a>
                              <a class="dropdown-item" href="#">Biochemistry</a>   
                              <a class="dropdown-item" href="#">Biotechnology</a>   
                              <a class="dropdown-item" href="#">Botany &amp; Horticulture</a>   
                              <a class="dropdown-item" href="#">Chemistry</a>   
                              <a class="dropdown-item" href="#">Commerce &amp; Business Management</a>   
                              <a class="dropdown-item" href="BCA_department.php">Computer Science</a>   
                              <a class="dropdown-item" href="#">Economics</a>   
                              <a class="dropdown-item" href="#">Electronics</a>   
                              <a class="dropdown-item" href="#">English</a>   
                              <a class="dropdown-item" href="#">Environmental Studies</a>   
                              <a class="dropdown-item" href="#">Food Processing &amp; Engineering</a>   
                              <a class="dropdown-item" href="#">Geography</a>   
                              <a class="dropdown-item" href="#">Hindi</a>   
                              <a class="dropdown-item" href="#">History</a>   
                              <a class="dropdown-item" href="#">Journalism</a>   
                              <a class="dropdown-item" href="#">Kannada</a>   
                              <a class="dropdown-item" href="#">Mathematics</a>   
                              <a class="dropdown-item" href="#">Microbiology</a>   
                              <a class="dropdown-item" href="#">Physics</a>   
                              <a class="dropdown-item" href="#">Political Science</a>   
                              <a class="dropdown-item" href="#">Sanskrit</a>   
                              <a class="dropdown-item" href="#">Software Development</a>   
                              <a class="dropdown-item" href="#">Zoology</a>   
                              </div>
                      </li>
                    
                    
                      <a href="logout.php" class="btn btn-brand ms-lg-3"><?php     echo  $_SESSION['log'];?></a>
                        </div>
        </div>
    </nav>
    <table class="table table-success table-striped">
        <thead>
        <tr>
              <th colspan="5">Recent-Uploads :</th>
              
            </tr>
            <tr>
              <th scope="col">No.</th>
              <th scope="col"><div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Subject
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">DBMS</a></li>
                  <li><a class="dropdown-item" href="#">Java</a></li>
                  <li><a class="dropdown-item" href="#">C++</a></li>
                  <li><a class="dropdown-item" href="#">Web-design</a></li> 
                  <li><a class="dropdown-item" href="#">J2EE</a></li>
                </ul>
              </div></th>
              
              <th scope="col">Uploaded By</th>
              <th scope="col">LINK</th>
            </tr>
          </thead>
          <tbody>
            
            <?php 
            
	            $id = $_SESSION['user_id'];
	            $query = "select * from file_details ";

	            $result = mysqli_query($con,$query);
            if (mysqli_num_rows($result) > 0) {
              $i=1;
            while($row = mysqli_fetch_assoc($result)){
              
            echo "<tr><th>$i</th><th>{$row['subject']}</th><th>{$row['uploaded_by']}</th><th><a href='th_dash/{$row['file_path']}'>download</a></th></tr>\n ";
            $i=$i+1;    
          } } else {
                echo ' <tr>
                <th colspan="5"><center>No-Records</center> </th>
                
                  </tr><br><br><br><br><br><br><br><br>';
                  
              }
              ?>
              
              
                </tbody>
      </table>
    <footer>
        <div class="footer-top text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center">
                        <h4 class="navbar-brand">Notesify<span class="dot">.</span></h4>
                        <p>Smart way of education lead to best result. Notes Management system help maintain the softcopy notes in effective way</p>
                        <div class="col-auto social-icons">
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="#"><i class='bx bxl-instagram'></i></a>
                            <a href="#"><i class='bx bxl-pinterest'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <p class="mb-0">Copyright@2022. All rights Reserved</p>
        </div>
    </footer>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/app.js"></script>
</body>

</html>