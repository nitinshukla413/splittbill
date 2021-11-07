<html>
<doctype!html>
<head>
<title>Home page</title>
<link rel="stylesheet" href="../CSS/css/bootstrap.min.css">

<style>

.col-1 {width: 6.67%;}
.col-2 {width: 13.34%;}
.col-3 {width: 20.01%;}
.col-4 {width: 26.68%;}
.col-5 {width: 33.35%;}
.col-6 {width: 40.02%;}
.col-7 {width: 46.69%;}
.col-8 {width: 53.36%;}
.col-9 {width: 60.03%;}
.col-10 {width: 66.7%;}
.col-11 {width: 73.37%;}
.col-12 {width: 80.04%;}
.col-13 {width: 86.71%;}
.col-14 {width: 93.38%;}
.col-15 {width: 100%;}

 [class*="col-"] {

  float: left;
  border: 1px solid red;
}


* {
  box-sizing: border-box;
}

.category{
  padding-left:3.335%;
  padding-right:3.335%;
}

.category>img{
	height:5rem;
	width:5rem;
}

</style>
</head>
<body >

<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <ul class="navbar-nav col-15">
    <li class="nav-item "><a class='nav-link' href="index.php" style=color:white>Home</a></li>
	<li class="nav-item "><a class='nav-link' href="Cart.php" style=color:white>My Cart</a></li>
	<li class="nav-item "><a class='nav-link' href="MyOrders.php" style=color:white>My Orders</a></li>
	<li class="nav-item "><a class='nav-link' href="register.php" style=color:white>Create Account</a></li>
	<li class="nav-item "><a class='nav-link' href="login.php" style=color:white>Login</a></li>
	<li class="nav-item"><a class='nav-link' href="logout.php" style=color:white>Logout</a></li>	
	<li class="nav-item"><a class='nav-link' href="#" id='userid' style=color:white></a></li>
  </ul>
  <div class="nav-item col-4"  style=float:left>
	<div class="input-group mb-3 " >
  		<input type="text" class="form-control" placeholder="Search for products, brands and more">
  		<div class="input-group-append">
    	<button class="btn btn-light" type="submit" style=margin-left:0.3rem>Go</button>
  		</div>
	</div>
</div>
</nav>
<div class="border border-top-0 border-right-0 border-left-0 col-15" style=padding-top:1rem; >
<span class='category col-2' style=margin-left:3.5%><img src='../images/mobiles.jpg'></span>
<span class='category col-2'><img src='../images/fashion.jpg'></span>
<span class='category col-2'><img src='../images/Electronics.jpg'></span>
<span class='category col-2'><img src='../images/home.jpg'></span>
<span class='category col-2 '><img src='../images/Applainces.jpg'></span>
<span class='category col-2'><img src='../images/Furniture.jpg'></span>
<span class='category col-2'><img src='../images/Groccery.jpg'></span>
<div><span class='col-2' style=margin-left:3.5%;text-align:center;  >Mobiles</span>
<span class='col-2' style=text-align:center; >Fashion</span>
<span class='col-2' style=text-align:center; >Electronics</span>
<span class='col-2' style=text-align:center; >Home</span></div>
<span class='col-2' style=text-align:center; >Appliances</span>
<span class='col-2' style=text-align:center;>Furniture</span>
<span class='col-2' style=text-align:center; >Groccery</span></div>

</div>
</body>
</html>

<div class="container">
<?php

echo "<script> function DisplayUser(a){	document.GetElementbyID('userid').innerHTML=a;}</script>";

session_start();
if(isset($_SESSION["uid"]))
{DisplayUser($_SESSION['uid']);}
include("myconnection.php");
$r=$con->query("select * from product;");
echo "<br><br><table class=' table table-hover'><th></th><th>Product ID</th><th>Name</th><th>Description</th><th>Category</th><th>Brand</th><th>Price</th><th>Available Quantity</th>";
while($row=$r->fetch_assoc())
{
	echo "<tr><td>";
	echo "<img src='../images/$row[Prod_Image]' style=width:100px class=mx-auto><br><button class='bg-success' style=margin-top:5px ><a href='proddetails.php?prod_id=$row[Prod_ID]' class='details'>View Details</a></button></td>";
	echo "<td>$row[Prod_ID]</td>";
	echo "<td>$row[Prod_Name]</td>";
	echo "<td>$row[Prod_Desc]</td>";
	echo "<td>$row[Category]</td>";
	echo "<td>$row[Brand]</td>";
	echo "<td>$row[Prod_Price]</td>";
	if($row['Prod_Qty']==0)
	{
	echo "<td style=color:red>Out of stock</td>";
	}
	else
	{
	echo "<td>$row[Prod_Qty]</td>";
	}
	echo "</tr>";
	
}

$con->close();
// if(isset($_SESSION['admin_id']))
// {
// echo "<tr><td><button class='bg-success' style=margin-top:5px><a href='addproduct.php?'>Add Product</a></button></td></tr>";
// }
?>
</div>