<?php

        session_start();
        include("myconnection.php");
        if(isset($_POST['email']))
        {
            $Email=$_POST['email'];
            $Amount=$_POST['amount'];
            include('myconnection.php');
            $Sender=$_SESSION['uid'];
            $r=$con->query("insert into billdetails values ('$Email', '$Sender', '$Amount')");
            header("location:home.php");
            $con->close();
        }
?>