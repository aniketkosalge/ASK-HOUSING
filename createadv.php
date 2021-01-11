<?php include('server3.php'); ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>ASK HOUSING</title>
<style type="text/css">
<!--
.style8 {
	color: #000000;
	background-color: #FF8000;
	height: 40px;
	width: 150px;
	font-weight: bold;
	border-top-width: 0px;
	border-right-width: 0px;
	border-bottom-width: 0px;
	border-left-width: 0px;
	font-family: "Century Gothic";
	font-size: 30px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
}
.style4 {
	font-family: "Century Gothic";
	font-size: 20px;
	color: #993300;
}
.style5 {	font-family: "Century Gothic";
	font-weight: bold;
}
.style9 {
	color: #993300;
	width: 200px;
}
.style10 {font-size: 44px}
.style11 {color: #FF8000}
.style12 {font-family: "Century Gothic"}
.style13 {
	color: #000000;
	font-weight: bold;
	font-size: 25px;
}
-->
</style>
</head>

<body>
<form style="background-color:#CCFF99" action="" method="post" name="createadv">
  <span class="style10"> <span class="style11"> <span class="style12">
  <label for="uname"><b>OWNER'S REGISTRATION </b></label>
  </span> </span> </span><br />
<br /><br /><br /><br />


<span class="style4">
<span class="style13">
<label for="uname">Owner Name :</label>
</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span class="style9">
<input name="ownername" type="text" class="style5" id="ownername" maxlength="50" placeholder="Enter Your Name" required="required" />
</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<span class="style4">
<label for="uname" class="style13"><b> User Id :</b></label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span> <span class="style9">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input name="userid" type="text" class="style5" id="uname" maxlength="30" placeholder="Enter Username" required="required" />
</span><br /><br />

 <span class="style4">
<label for="uname" class="style13"><b>Address:</b></label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </span> <span class="style9">
<textarea name="address" class="style5" id="adress" placeholder="Enter House Address" required="required"></textarea>
</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<span class="style4">
<label for="uname" class="style13"><b>Create Password :</b></label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</span>&nbsp; <span class="style9">
<input name="password" type="text" class="style5" id="pname" maxlength="20" placeholder="Create Password" required="required" />
</span><br /><br />

<span class="style4">
<label for="uname" class="style13"><b>City:</b></label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span> <span class="style9">
<input name="city" class="style5" maxlength="40" placeholder="Enter City Name" required="required" />
  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</span>

<span class="style4">
<label for="uname" class="style13"><b>Pincode:</b></label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span> <span class="style9">
<input name="pincode" type="text" class="style5" id="pincode" maxlength="6" placeholder="Enter Pincode" required="required" />
</span><br /><br />

<span class="style4">
<label for="uname" class="style13"><b>Phone No. :</b></label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span> <span class="style9">
<input name="phoneno" type="text" class="style5" id="mobno" maxlength="10" placeholder="123-456-7890" required="required"/>
</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<span class="style4">
<label for="uname" class="style13"><b>E-mail ID :</b></label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span> <span class="style9">
<input name="emailid" type="email" class="style5" id="email" maxlength="30" placeholder="Enter Your E-mail" required="required" />
</span><br /><br />

<span class="style4">
<label for="uname" class="style13"><b>House Images :</b></label>
&nbsp;&nbsp; </span> <span class="style9">
 <input type="file" name="houseimg1" accept="image/*"><br />
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="file" name="houseimg2" accept="image/*"><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="file" name="houseimg3" accept="image/*">
</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<span class="style4">
<label for="uname" class="style13"><b>House Registory No. :</b></label>
</span> <span class="style9">
<input name="houseregno" type="text" class="style5" id="registory" maxlength="10" placeholder="Enter Registory No." required="required" />
</span><br /><br />

<span class="style4">
<label for="uname" class="style13"><b>House Details :</b></label>
&nbsp;&nbsp;&nbsp;&nbsp; </span> <span class="style9">
<textarea name="housedetails" class="style5" placeholder="Please mention your rent details" required="required"></textarea>
<input type="radio" name="housetype" value="1BHK" checked> 1BHK
  <input type="radio" name="housetype" value="2BHK"> 2BHK
  <input type="radio" name="housetype" value="3BHK"> 3BHK
   <input type="radio" name="housetype" value="Bunglow"> Bunglow
</span><br /><br /><br /><br />

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>
<button type="submit" class="style8" name="next">Next</button>
</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<span>
<button type="reset" class="style8">Cancel</button>
</span>
</form>

</body>
</html>
