<html>
<Doctype!html>
<head>
<title>Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
form
{
	padding:3%;
	margin-left:200px;	
}
button>a,button>a:hover
{
	text-decoration:none;
	color:white;
}
</style>
<script>
function ViewPass()
{
	if(document.getElementById("pwd").type=='text')
	{document.getElementById("pwd").type='password';}
	else
	{document.getElementById("pwd").type='text';}
}
</script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item"><a class='nav-link' href="index.php" style=color:white>Home</a></li>
	<li class="nav-item"><a class='nav-link' href="register.php" style=color:white>Sign Up</a></li>
	<li class="nav-item"><a class='nav-link' href="login.php" style=color:white>Sign In</a></li>
	<li class="nav-item"><a class='nav-link' href="logout.php" style=color:white>Logout</a></li>
  </ul>
</nav>
<div class="container "  >
<form method=post style=width:700px >
<label>Email Id</label><br><input type=email name='uid' placeholder="Enter Email"  class="form-control"><br>
<label>Password</label><br><input type=password name='pwd' id='pwd' placeholder="Enter Password" class="form-control" ><br>
<input type=checkbox onclick='ViewPass()'> Show Password 
<a href="#" style=float:right>Forgot password?</a><br>
<p style=float:right>Don't have an account?<a href="register.php"  > Sign up</a></p><br>
<br>
<button type=submit class="btn btn-primary">Login</button>
</form>
</div>
</body>
</html>
<?php
session_start();
if(isset($_POST['uid']))
{$uid=$_POST['uid'];
$pwd=$_POST['pwd'];
include("myconnection.php");
$r=$con->query("select * from userDetail where EmailID='$uid' && Password='$pwd'");
if($row=$r->fetch_assoc())
{	
$_SESSION["uid"]=$row['EmailID'];
$_SESSION["pwd"]=$row['Password'];
header("location:home.php");
}
else
{
	echo "<p>Invalid User_id/password</p>";
}
$con->close();
}

?>