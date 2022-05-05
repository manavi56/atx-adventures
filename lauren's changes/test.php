<?php
// put link to this in each tab html file
if (!isset($_COOKIE['email1']) && !isset($_COOKIE['password1'])){
	// go to login page, maybe force login?
	if (!isset($_POST['email1']) && !isset($_POST['password1'])){
		header("Location: login.html");
	}

	// go to login, after submit form, then validation stuff and comp w existing
	// if login successfully, then go to bucket list page 

	if (isset($_POST['email1']) && isset($_POST['password1'])){
		/* go through now and compare existing usernames and passwords then set cookies
	   	go to bucket list now, shows up when logged in*/
		$file = fopen("password.txt", "r");
		$pairs = []; 
		while (!feof($file)){
			$line = fgets($file);
			$full_cookie = explode(":", $line);
			$saved_username = $full_cookie[0];
			$saved_password = rtrim($full_cookie[1]);
			$pairs[$saved_username] = $saved_password;
		}
		fclose($file);
		$input_username = $_POST["username"];
		$input_password = $_POST["password"];
		if (array_key_exists($input_username, $pairs)){
			if ($input_password === $pairs[$input_username]){
				setcookie("email1", $_POST['email1'], time()+10,"/");
				//setcookie("password1", $_POST['password1'], time()+10, "/");
			}else{
				echo"<script>alert('Wrong Password')</script>";
			}
		}else{
			echo"<script>alert('Invalid Username')</script>";
		}
		header("Location: bucket-list.html");
	}
}
else{
	header("Location: bucket-list.html");
}
?>




