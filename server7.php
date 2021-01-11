<?php

$db=mysqli_connect('localhost','root','','registration');
if(isset($_POST['submit']))
{
$username=mysql_real_escape_string($_POST['username']);
$feedback=mysql_real_escape_string($_POST['feedback']);
$rating=mysql_real_escape_string($_POST['rating']);

header("location:home.html");
$sql="INSERT INTO feedback (username,feedback,rating) VALUES ('$username','$feedback','$rating')";
mysqli_query($db,$sql);
}





?>
