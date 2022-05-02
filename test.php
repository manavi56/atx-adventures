<?php
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

		setcookie("email1", $_POST['email1'], time()+10,"/");
		setcookie("password1", $_POST['password1'], time()+10, "/");

		header("Location: bucket-list.html");
	}
}
/*}else{
	header("Location: bucket-list.html");
}*/
?>




