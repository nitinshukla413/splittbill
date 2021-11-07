<html>
<Doctype!html>
<head>
<title>Register</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script>
function ViewPass()
{
	if(document.getElementById("pwd").type=='text')
	{document.getElementById("pwd").type='password';}
	else
	{document.getElementById("pwd").type='text';}
}
</script>
<style>
form
{
	padding:3%;
	margin-left:200px;	
}
p
{
 padding-left:340px;
 color:red;
}
</style>
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
<label>Email Id</label><br><input type=text name='uid' placeholder="Enter Email"  class="form-control"><br>
<label>Name</label><br><input type=text name='name' placeholder="Enter Name" class="form-control"><br>
<label>Password</label><br><input type=password name='pwd' placeholder="Enter Password" class="form-control" id="pwd"><br>
<input type=checkbox onclick='ViewPass()'> Show Password <br><br>
<button type=submit class="btn btn-primary">Signup</button> 
</form>
</div>
</body>
</html>
<?php
session_start();
if(isset($_POST['uid']))
{
$uid=$_POST['uid'];
$name=$_POST["name"];
$pwd=$_POST['pwd'];


include("myconnection.php");
$r=$con->query("insert into userDetail values ('$uid', '$name', '$pwd')");
header("location:login.php");
$con->close();
}

?>