<?php
	include "connect.php";

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		// username and password sent from form 
		
		$email = mysqli_real_escape_string($con,$_POST['email']);
		$password = mysqli_real_escape_string($con,$_POST['password']); 
		
		$sql = "SELECT * FROM `users` WHERE email = '$email' and password = '$password'";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$active = $row['active'];
		
		$count = mysqli_num_rows($result);
		
		// If result matched $myusername and $mypassword, table row must be 1 row
		  
		if($count == 1) {
		   session_register('email');
		   $_SESSION['email'] = $email;
		   
		   header("location: /LibrarySystem/Library_Management_System/MainPage/main.html");
		}else {
		   echo "Your Login Name or Password is invalid";
		}
	 }
?>