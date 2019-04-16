<?php
session_start();
include "connect.php";
$pro=$_POST['proname'];
$_SESSION['pronm']=$pro;
$q="SELECT * from project where proname='$pro'";
$r=mysqli_query($db,$q);
$res=mysqli_fetch_array($r);
if(mysqli_num_rows($res)>0)
{
    $flag=1;
}
if($flag!=1)
{
mkdir('uploads/'.$pro);
$qu1="INSERT INTO `project`(`proname`) VALUES ('$pro')";
$re1=mysqli_query($db,$qu1);
header("Refresh:2;url=stpage1.php");

}
?>