<?php
	require('connect.php');
	session_start();
    
	if(isset($_POST['email'])) {
		
		$email = mysqli_real_escape_string($con, $email);
		$password = mysqli_real_escape_string($con, $email);	

		$query = "SELECT * FROM `users` WHERE Email='$email' AND Password='".md5($password)."'";
		$result = mysqli_query($con, $query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
			if($rows == 1) {
				$_SESSION['email'] = $email;
				header("location: /MainPage/main.html");
			}else{
				echo "Error";
			}
	}
?>