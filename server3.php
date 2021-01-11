<?php

$db=mysqli_connect('localhost','root','','registration');
if(isset($_POST['next']))
{
$ownername=mysql_real_escape_string($_POST['ownername']);
$address=mysql_real_escape_string($_POST['address']);
$city=mysql_real_escape_string($_POST['city']);
$phoneno=mysql_real_escape_string($_POST['phoneno']);
$houseimg1=mysql_real_escape_string($_POST['houseimg1']);
$houseimg2=mysql_real_escape_string($_POST['houseimg2']);
$houseimg3=mysql_real_escape_string($_POST['houseimg3']);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$housedetails=mysql_real_escape_string($_POST['housedetails']);
$housetype=mysql_real_escape_string($_POST['housetype']);
$pincode=mysql_real_escape_string($_POST['pincode']);
$emailid=mysql_real_escape_string($_POST['emailid']);
$houseregno=mysql_real_escape_string($_POST['houseregno']);
$userid=mysql_real_escape_string($_POST['userid']);
$password=mysql_real_escape_string($_POST['password']);

header("location:payment.php");
$sql="INSERT INTO createadv (ownername,address,city,phoneno,houseimg1,houseimg2,houseimg3,housedetails,housetype,pincode,emailid,houseregno,userid,password) VALUES ('$ownername','$address','$city','$phoneno','$houseimg1','$houseimg2','$houseimg3','$housedetails','$housetype','$pincode','$emailid','$houseregno','$userid','$password')";
mysqli_query($db,$sql);
}





?>
