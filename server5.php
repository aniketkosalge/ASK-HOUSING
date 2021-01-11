<?php

$db=mysqli_connect('localhost','root','','registration');
if(isset($_POST['pay']))
{
$ownername=mysql_real_escape_string($_POST['ownername']);
$paytype=mysql_real_escape_string($_POST['paytype']);
$cardholder=mysql_real_escape_string($_POST['cardholder']);
$cardnumber=mysql_real_escape_string($_POST['cardnumber']);
$validthru=mysql_real_escape_string($_POST['validthru']);
$cvv=mysql_real_escape_string($_POST['cvv']);

header("location:home.html");
$sql="INSERT INTO payment (ownername,paytype,cardholder,cardnumber,validthru,cvv) VALUES ('$ownername','$paytype','$cardholder','$cardnumber','$validthru','$cvv')";
mysqli_query($db,$sql);
}





?>
