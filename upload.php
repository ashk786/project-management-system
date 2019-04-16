<?php
include "connect.php";
session_start();
$filename=$_SESSION['pronm'];
$target_dir = 'uploads/'.$filename.'/';
$target_file = $target_dir . basename($_FILES['fileto']['name']);
$temp_name=$_FILES['fileto']['tmp_name'];   
$name = basename($_FILES["fileto"]["name"]);
$r=move_uploaded_file($temp_name, "$target_file");
if ($r) {
    echo "successfully uploaded ".$name;
} else {
echo "file ";}


$query="INSERT INTO `path`(`filename`, `path`) VALUES ('$name','$target_file') ";
$res=mysqli_query($db,$query);
if($res)
{
    header("Refresh:2;url=stpage1.php");
}

?>
