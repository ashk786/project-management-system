<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <center>
 <table>
    <?php
    include "connect.php";
    session_start();
    $name=$_SESSION['usernm'];
    $pro=$_SESSION['pronm'];
    
    $q="SELECT proid from project where proname='$pro'";
    $r=mysqli_query($db,$q);
    $re=mysqli_fetch_array($r);
    $pid=$re[0];
    $_SESSION['pid']=$pid;
    echo $pid;
    $q2="SELECT proname from project where proid='$pid'";
    $r2=mysqli_query($db,$q2);
    $re2=mysqli_fetch_array($r2);
    $pron=$re2[0];
    $q3="UPDATE `student` SET `projectid`='$pid' WHERE usn='$name'";
    $r3=mysqli_query($db,$q3);
    echo "<p>PROJECT NAME :</p>".$pron." <br>";
    echo "<a href='pro.html'>ENTER PROJECT NAME</a><br><br>";
    echo "<a href='propass.html'>SET PROJECT PASSWORD</a><br><br>";
    echo "<a href='index1.php'>UPLOAD FILES</a>";

    $query="SELECT prostat from student where name='$name'";
    $result=mysqli_query($db,$query);
    $res1=mysqli_fetch_array($result);
    $stat=$res1[0];
    echo "<tr><td>project status :".$stat."</td></tr><br>";

?>
<br></center>




</body>
</html>