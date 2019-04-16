<?php
include "connect.php";
session_start();
$pro=$_SESSION['pronm'];

$propass=$_POST['propass'];
$proid=$_SESSION['pid'];
$query="UPDATE `project` SET `propass`='$propass' WHERE proid='$proid'";
$res=mysqli_query($db,$query);
if($res)
{
    echo "successful";
    header("Refresh:2;url=stpage1.php");
}



?>
