<?php
if (!isset($_COOKIE['userid']) && !isset($_COOKIE['password'])){
	// go to login page, maybe force login?
	header("Location: login.html");
}
	// go to login, after submit form, then validation stuff and comp w existing
	// if login successfully, then go to bucket list page 


if (isset($_POST['userid']) && isset($_POST['password'])){
	/* go through now and compare existing usernames and passwords then set cookies
	   go to bucket list now, shows up when logged in*/
	header("Location: bucket-list.html");
	}
else{
}

?>