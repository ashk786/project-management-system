<?php
include "connect.php";
session_start();
$user=$_POST['name'];$pass=$_POST['pass'];
$_SESSION['usernm']=$user;
$query1="SELECT  `username`, `password` FROM `stlogin` WHERE 1";
$r1=mysqli_query($db,$query1);
while($r2=mysqli_fetch_array($r1))
{
    if(($user==$r2[0])&&($pass==$r2[1]))
    {
        header("location:stpage1.php");
    }
    else{
        echo "<center><p style='font-family:comic sans ms;color:red;font-size:400px:font-weight:bold;'>ENTERED PASSWORD IS WRONG</p></center>";
        header("Refresh:3; url=index.php");
    }
}



?>