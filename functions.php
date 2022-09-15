<?php

use LDAP\Result;

function check_login($con)
{

	if(isset($_SESSION['user_id']))
	{

		$id = $_SESSION['user_id'];
		$query = "select * from users where user_id = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}else{

	
	header("Location: nav.php");
	die;
	}
}

function random_num($length)
{

	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) { 
		# code...

		$text .= rand(0,9);
	}

	return $text;
}

function ad_check($role){
	if($role != "admin"){
		header("Location: ../index.php");
	die;
	}

}
function tc_check($role){
	if($role != "teacher"){
		header("Location: ../index.php");
	die;
	}

}

