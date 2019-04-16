<?php
include "connect.php";
session_start();
$de=$_POST['deadline'];
$q="UPDATE `project` SET `prodeadline`='$de' WHERE 1";
$r=mysqli_query($db,$q);
header("Refresh:2;url=tpage1.html")


?>