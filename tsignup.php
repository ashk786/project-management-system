<?php
include "connect.php";
$name=$_POST['name'];
$username=$_POST['username'];
$pass=$_POST['pass'];

$query="INSERT INTO `tlogin`(`name`,`username`,`password`) VALUES ('$name','$username','$pass')";
$res=mysqli_query($db,$query);
if($res)
{
    echo "signup successful";
    header("Refresh:2;url=tpage1.html");
}
else
{
    echo "signup wasnt siccessfull please try again";
    header("Refresh:2;url=signup.html");

}
?>