<?php 
	session_start();
	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['name'];
		 $user_email = $_POST['email'];
		$role=$_POST['role'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$hash=password_hash($password,PASSWORD_DEFAULT);
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,role,user_email,password) values ('$user_id','$user_name','$role','$user_email','$hash')";
			$ob=" username :".$user_name."\n password :".$password;
			$path=qr_g($ob);
			$q2="insert into qr_d (user_id,user_name,qr_path) values ('$user_id','$user_name','$path')";
			mysqli_query($con, $query);
			mysqli_query($con,$q2);
			header("Location: nav.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
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

<body id="gre_login">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<a class="navbar-brand " href="#" id="l_lo">Notesify<span class="dot">.</span></a>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Register</h1>
							<form method="POST" class="needs-validation" novalidate="" autocomplete="off">
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
								<label class="mb-2 text-muted" for="role">Role:</label>
								<select class="form-control" name="role" required>
  								<option value="">Choose one</option>
								  <option value="student">Student</option>
								  <option value="teacher">Teacher</option>
								</select>
									<div class="invalid-feedback">
										Please choose any one
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
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Already have an account? <a href="nav.php" class="text-dark">Login</a>
							</div>
						</div>
					</div>
					<div class="text-center mt-5 text-muted">
						Copyright &copy; 2022 &mdash; Notesify
					</div>
				</div>
			</div>
		</div>
	</section>
    <script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/app.js"></script>
	<script src="js/login.js"></script>
</body>
</html>	
