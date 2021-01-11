<?php

$db=mysqli_connect('localhost','root','','registration');
if(isset($_POST['create']))
{
$username=mysql_real_escape_string($_POST['username']);
$password=mysql_real_escape_string($_POST['password']);

header("location:login.php");
$sql="INSERT INTO register (username,password) VALUES ('$username','$password')";
mysqli_query($db,$sql);
}





?>
