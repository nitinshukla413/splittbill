<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SpillTheRuppee</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </head>
  <body style="background-color: #a2edf575;">
   
    <section id="navbar">
	<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item"><a class='nav-link' href="index.php" style=color:white>Home</a></li>
	<li class="nav-item"><a class='nav-link' href="register.php" style=color:white>Sign Up</a></li>
	<li class="nav-item"><a class='nav-link' href="login.php" style=color:white>Sign In</a></li>
  </ul>
</nav>
    </section>


    <section id="home">
      <div class="container">
        <div class="row home-row">
          <div class="col-lg-6">
            <img src="../images/friends.png" alt="" class="home-img img-fluid feature-image">

          </div>
          <div class="col-lg-6 home-col" style="padding-top:8rem">
            <div class="content" >
              <h1 class="home-h1">Split your bills easily</h1>
              <h3 class="content1">To keep track of your friend's expenses</h3>
            </div><br>
            <div class="buttons">
              <a role="button" class="btn btn-primary" href="login.php">Sign in</a>
              <a role="button" class="btn btn-primary" href="register.php" >Sign up</a>
            </div>

          </div>

        </div>
      </div>

    </section>

		<center>
            <div class="copyright footer">
              <p style="color:rgb(10, 10, 10);">Made with 🧡 by Nitin & Anirudha</p>
            </div>
          </div>
        </center>

        </div>
          </div>



    </section>

  </body>
</html>


<div class="container">
<?php
session_start();
if(isset($_SESSION["uid"]))
{echo "<p style=color:#4ecce6;margin-top:1rem><img src='../images/profilelogo.png' style=width:50px>  $_SESSION[uid]</p><br>";}
include("myconnection.php");


$con->close();
// if(isset($_SESSION['admin_id']))
// {
// echo "<tr><td><button class='bg-success' style=margin-top:5px><a href='addproduct.php?'>Add Product</a></button></td></tr>";
// }
?>
</div>







