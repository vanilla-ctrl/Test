<?php

?>
<!DOCTYPE html>
<html>
<head>
	 <!-- Required meta tags -->
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title> Login Staff</title>
<!-- Required Links -->
<link rel="stylesheet" href="css\font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style.css">
	</head>
<body>
<!-- ---------Navbar---------- -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">AIT Staff Attendance System</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Attendance</a></li>
	  <li><a href="#">Feeds</a></li>
	  <li><a href="#">People</a></li>
      <li><a href="#">Quick Links</a></li>
	</ul>
<div class="right" style="float:right;">
    <button class="btn btn-primary navbar-btn">SIGNUP</button>
	</div>
</div>
  </div>
</nav>
<h1 style="text-align:center">STAFF ATTENDANCE SYSTEM</h1>
	<div class="container">
	<img src="profile.png"/>
		<form action="logincheck.php" method="POST">
		    <div class="form-input">
				<input type="text" name="emp_id" placeholder="Enter Your Email ID"/>	
			</div>
			<div class="form-input">
				<input type="password" name="pass" placeholder="Enter the Password"/>
			</div>
			<a href="forgotPassword.php">Forgot password?</a><br>
			<input type="submit" name="submit" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>