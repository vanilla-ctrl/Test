
<!DOCTYPE html>
<html>
<head>
	 <!-- Required meta tags -->
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>User Attendance</title>
<!-- Required Links -->
<link rel="stylesheet" href="css\font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style.css">
	
	<style>
	#time{
		width:50%;
		margin:auto;
		font-family:clock;
		font-size:25px;
		
	}
	</style>
	
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
    <button class="btn btn-primary navbar-btn">Logout</button>
	</div>
</div>
  </div>
</nav>
<h1 style="text-align:center">STAFF ATTENDANCE SYSTEM</h1>
	<div class="container">
	<img src="profile.png"/>
		<form action=" " method="POST">
		<div class="form-input">
		<br><label for="shift">Shift:  </label>
  <select name="shift">
    <option value="Admin" <?php if (isset($role) && $role=="admin") echo "checked";?>>Shift 1</option>
    <option value="Developer">Shift 2</option>
    <option value="Tester">Shift 3</option>
   </select>
   <div class="form-input">
<div id="time">
</div><br>
<!-- <input onclick="change()" type="button" name="submit" value="Sign In" class="btn-login"/> -->
<button onclick="change()" type="button" name="submit" class="btn btn-primary btn-lg">Sign In</button>
<button onclick="change()" type="button" name="submit" class="btn btn-success btn-lg">Sign Out</button>
      </form>
	</div></div></div>
	<script>
	$(document).ready(function() {
		setInterval(function()
		{
			$('#time').load('time.php')
		}, 1000);
	})
	// function to change button value from signin to signout
	function change() // no ';' here
{
    if (this.value=="Sign In") this.value = "Sign Out";
    else this.value = "Sign In";
}
</script>
</body>
</html>