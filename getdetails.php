<?php

$con= mysqli_connect('localhost','root') or die("cannot connect");

mysqli_select_db($con,'testdb') or die("cannot select!");

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: ".mysqli_connect_error(); 
}

$q=$_GET["q"];
$sql = "SELECT * FROM `table1` WHERE id='$q'";
$query=mysqli_query($con,$sql) or die(mysqli_error($con));
$displayArray=mysqli_fetch_array($query);
echo"<table>
<tr><th>ID</th><th>Name</th><th>Age</th></tr>
<tr><td>".$displayArray[0]."</td>
<td>".$displayArray[1]."</td>
<td>".$displayArray[2]."</td></tr>
</table>";


?>