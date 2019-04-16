<?php
include "connect.php";
session_start();
$q="SELECT * from Student Where 1";
$r=mysqli_query($db,$q);
while($row=mysqli_fetch_array($r))
{
    echo "<table><th>name</th><th>usn</th><th>projectid</th><th>teamid</th><tr><td>".$row[0]."</td>";
    echo "<td>".$row[1]."</td>";
    echo "<td>".$row[2]."</td>";
    echo "<td>".$row[3]."</td>";
    echo "<td>".$row[4]."</td>";
    echo "</tr></table>";

}
?>
