<?php
include "connect.php";
$name=$_POST['name'];
$username=$_POST['username'];
$pass=$_POST['pass'];
$teamname=$_POST['teamname'];


$query="INSERT INTO `stlogin`(`name`,`username`,`password`) VALUES ('$name','$username','$pass')";
$res=mysqli_query($db,$query);
$q1="INSERT INTO `team`(`teamname`) VALUES ('$teamname')";
$r1=mysqli_query($db,$q1);
$q2="SELECT teamid from team where teamname='$teamname'";
$r2=mysqli_query($db,$q2);
$re2=mysqli_fetch_array($r2);
$tid=$re2[0];
$q3="INSERT INTO `student`(`name`, `usn`, `teamid`) VALUES ('$name','$username','$tid')";
$r3=mysqli_query($db,$q3);
if($res)
{
    echo "signup successful";
    header("Refresh:2;url=index.html");
}
else
{
    echo "signup wasnt siccessfull please try again";
    header("Refresh:2;url=signup.html");

}
?>