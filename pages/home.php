<html>
<doctype!html>
<head>
<title>Home page</title>

<script>
    function MyFun()
    {
        let no_person= document.getElementById('Person').value;
        let totalBill= document.getElementById('TotalAmt').value;
        let tip= document.getElementById('TotalTip').value;
        
        let result= (parseInt(totalBill)+parseInt(tip))/parseInt(no_person);
        // console.log(result);
        document.getElementById('Result').innerHTML= result +"/-" ;
        document.getElementById('amount').value=result;
        return result;
    }
</script>

<style>
form
{
	padding:3%;
	margin-left:200px;	
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item"><a class='nav-link' href="index.php" style=color:white>Home</a></li>
    <li class="nav-item"><a class='nav-link' href="home.php" style=color:white>Calculate</a></li>
	<li class="nav-item"><a class='nav-link' href="register.php" style=color:white>Sign Up</a></li>
	<li class="nav-item"><a class='nav-link' href="login.php" style=color:white>Sign In</a></li>
	<li class="nav-item"><a class='nav-link' href="logout.php" style=color:white>Logout</a></li>
  </ul>
</nav>
<div class="container">
<?php
session_start();
if(isset($_SESSION["uid"]))
{echo "<p style=color:#4ecce6;margin-top:1rem><img src='../images/profilelogo.png' style=width:50px>  $_SESSION[uid]</p><br>";}
include("myconnection.php");
?>

</div>
<div class="container"  style=width:700px >
<label>Number of Person</label><br><input type=number name='Person' id='Person' min=1 class="form-control"><br>
<label>Total Bill Amt.</label><br><input type=text name='TotalAmt' id='TotalAmt' placeholder="In Rupees" class="form-control" ><br>
<label>Total Tip </label><br><input type=text name='TotalTip' id='TotalTip' placeholder="In Rupees" class="form-control" ><br>
<button onclick=MyFun() class="btn btn-primary">Go</button><br>
<table style="margin-top:2rem"><th><th>
<tr><td><h3>Per Person Amount :<h3></td><td><h3 id='Result'></h3></td></tr>
</table>
</div>

<div style='margin:2% 10%;'>
  <form method='POST' action=SendRequest.php>
    <h4>Send Request</h4>
    <table style='padding:2%;' >
    <tr><td>Enter Email:</td> <td><input type='email' name='email' placeholder='Enter friends Email'></td></tr>
    <tr><td>Amount:</td><td>
    <input type='text' name='amount' id='amount'></td></tr>
    <tr><td></td><td><input type='submit'value='Send Request' ></td></tr></table>
  </form>
</div>
<div style='margin:2% 25%;'>
<?php
  include("myconnection.php");
  if(isset($_SESSION['uid']))
  {
    $SenderID=$_SESSION['uid'];
    $r=$con->query("Select EmailID, Amt from billdetails where SenderID='$SenderID'");
    echo "<h4>Request Sent</h4>";
    echo "<table><th>Receiver's Email</th><th>Amount</th>";
    while($row=$r->fetch_assoc())
    {
      echo "<tr><td>".$row['EmailID']."<td>".$row['Amt']."</tr>";
    }
    echo "</table>";

    $r1=$con->query("Select SenderID, Amt from billdetails where EmailID='$SenderID'");
    echo "<br><h4>Request Received</h4>";
    echo "<table><th>Sender's Email</th><th>Amount</th>";
    while($row=$r1->fetch_assoc())
    {
      echo "<tr><td>".$row['SenderID']."<td>".$row['Amt']."</tr>";
    }
    echo "</table>";
  }
?>
</div>

</body>
</html>










