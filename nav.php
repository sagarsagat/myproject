<?php 
	session_start();
	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		//something was posted
		$user_email = $_POST['email'];
		$password = $_POST['password'];
		
		if(!empty($user_email) && !empty($password) && !is_numeric($user_email) )
		{

			//read from database
			$query = "select * from users where user_email= '$user_email' limit 1";
			$result = mysqli_query($con, $query);
			
			if($result)

			{
				
				if($result && mysqli_num_rows($result) > 0)
				{
						
					$user_data = mysqli_fetch_assoc($result);
					$hash=$user_data['password'];
					
					if(password_verify($password,$hash))
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						$_SESSION['un'] = $user_data['user_name'];
						$_SESSION['role'] = $user_data['role'];
						$_SESSION["log"]="Logout";
						if($_SESSION['role'] == "admin"){
						header("Location: th_dash/tc_dash.php");
						die;
						}else if($_SESSION['role'] == "teacher"){
							header("Location: th_dash/i_dash.php");
							die;
							}
						else{
							header("Location: index.php");
						die;
						}
					}
				}
			}
			
			
			
		}else
		{
			echo "not validated!";
			
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
							<h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
							<form method="POST" class="needs-validation" novalidate="" autocomplete="off" action="">
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div>

								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted" for="password">Password</label>
										<a href="forgot.php" class="float-end">
											Forgot Password?
										</a>
									</div>
									<input id="password" type="password" class="form-control" name="password" required>
								    <div class="invalid-feedback">
								    	Password is required
							    	</div>
								</div>

								<div class="d-flex align-items-center">
									<div class="form-check">
										<input type="checkbox" name="remember" id="remember" class="form-check-input">
										<label for="remember" class="form-check-label">Remember Me</label>
									</div>
									<button type="submit" class="btn btn-primary ms-auto">
										Login 
									</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Don't have an account? <a href="register.php" class="text-dark">Create One</a>
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
	 
</body>
</html>
