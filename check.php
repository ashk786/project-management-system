<?php
include "connect.php";
session_start();
$pass=$_POST['propassch'];
$name=$_SESSION['usernm'];
$query1="SELECT  `propass` FROM `project` WHERE proid=(SELECT projectid FROM student where usn='$name')";
$r1=mysqli_query($db,$query1);
while($r2=mysqli_fetch_array($r1))
{
    if($pass==$r2[0])
    {
        echo "
        <form action='upload.php' method='POST' enctype='multipart/form-data'>
    
           <label>select file to upload</label> 
           <input type='file' name='fileto' id='fileto'>
    
            <input type='submit' value='submit'>
        </form>";
    }
    else{
        echo "<center><p style='font-family:comic sans ms;color:red;font-size:400px:font-weight:bold;'>ENTERED PASSWORD IS WRONG</p></center>";
        header("Refresh:3; url=index.php");
    }
}


?>
