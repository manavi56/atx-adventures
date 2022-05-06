<!DOCTYPE html>

<html lang="en">

<head>
   <title>ATX Adventures Contact Page</title>
   <meta charset="UTF-8">
   <meta name="description" content="Coding up the basics of our website's contact page">
   <meta name="author" content="Snigdha Pakala, Stuti Gupta, Lauren Perry, Manavi Shah">
   <link rel="stylesheet" href="nav-bar.css">
   <link rel="stylesheet" href="contact.css">
   <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.0.min.js"> </script>
   <script src="contact.js" defer></script>
</head> 

<body>


   <div class = "logo"><a href="home.html"><img id = "logo" src="media/logo.png" alt="picture of logo" width="360" height="360"></a></div>
   <br><br><br>
   <div class="topnav">
      <ul>
         <li><a class = "headers" href="home.html">Home</a></li>
         <li><a class = "headers" href="login.php">Login</a></li>
         <li><a class = "headers" href="recommendations.html">Recommendations</a></li>
         <li><a class = "headers" href="bucket_login.php">Bucket List</a></li>
         <li><a class = "active headers" href="contact.html">Contact</a></li>
      </ul>
   </div>
	<h1 id="title"><b>Contact Us</b></h1>

	<div id="main">
	<p>
	<img id="picture" src="media/austin_motel.jpg" alt="Picture of Austin motel sign" width=37% height=37%>
	</p>
	
<p id="above-form">
	We love hearing from y'all! Any questions, responses to articles, or ideas for posts 	are welcome. Tell us all about your next Austin Adventure right here!
</p>

<!--now onto the contact form, will need to add an action and stuff-->
<div id="form">
<div id = "ajax_div">
<!-- <form id="form1" method="post" action="contact2.php"> -->
<form id="form1">
<?php
$message = "Thank you for submitting";
error_reporting(E_ALL);
ini_set("display_errors", "on");
print <<<FORM
	
	<label for="name1" style="font-size:14pt">Name:</label><br>
	<input type="text" id="name1" name="name1" required><br>
	<div id="name_error"></div>
	<label for="email1" style="font-size:14pt">Email:</label><br>
	<input type="email" id="email1" name="email1" required><br>
	<div id="email_error"></div>
	<label for="subject" style="font-size:14pt">Subject Line:</label><br>
	<input type="text" id="subject" name="subject" required><br>
	<div id="subject_error"></div>
	<label for="message" style="font-size:14pt">Your Message:</label><br>
	<textarea name="message" id="message" rows="10" cols=30" required></textarea><br>
	<div id="message_error"></div>
	<button id="submit">Send</button>
	<input type="reset" id="reset1" onclick="reset_form()" value="Reset"/>
	
FORM;
?>

</form>
</div>
</div>
<style>
#ajax_div{
	font-size:14pt;
    font-family: myFirstFont;
    src: url('GlacialIndifference-Regular.otf');
}
</style>
<script type="text/javascript">
$(document).ready(function(){
	$('#form1').submit(function(){
		$.post("contact-mail.php", $("#form1").serialize(), function(data){
			//$('#ajax_div').css("font-weight" : "bold");
			$('#ajax_div').text(data);
			//$('#ajax_div').css("font-weight" : "bold");
			//alert(data);
		});
		return false;
	});
});
</script>

<br><br>
<div id="about">
<h1> Who We Are</h1>
<p id="about-text">
We are a group of Austin college students dedicated to showcasing the best our city has to offer. As students at UT Austin, we have often struggled with wanting to explore something new in the city without knowing where to begin, so we started this website to find some hidden gems about our city that we didn't know existed ourselves!
</p>

<br><br>
</div>
</div>

</body>
</html>