<?php include('server.php'); ?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ASK HOUSING</title>
<style>
body {
	font-family: Arial, Helvetica, sans-serif;
	padding-top: 14px;
	padding-right: 20px;
	padding-bottom: 14px;
	padding-left: 20px;
}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
	width: 500px;
	display: inline-block;
	border: 1px solid #ccc;
	box-sizing: border-box;
	height: 30px;
	margin: 0px;
}

button {
	background-color: #FF8000;
	color: white;
	border: none;
	cursor: pointer;
	width: 200px;
	word-spacing: normal;
	margin-top: 8px;
	margin-right: 0;
	margin-bottom: 8px;
	margin-left: 0;
	padding-top: 14px;
	padding-right: 20px;
	padding-bottom: 14px;
	padding-left: 20px;
	height: auto;
	top: 5px;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}


@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
.style2 {
	font-size: 36px;
	font-weight: bold;
	font-family: merlin;
}
.style3 {
	font-family: "Century Gothic";
	font-size: 40px;
	font-weight: bold;
	color: #FF8000;
}
.style4 {
	font-family: "Century Gothic";
	font-size: 20px;
}
.style5 {
	font-family: "Century Gothic";
	font-weight: bold;
}
.style6 {
	font-family: "Century Gothic";
	font-size: 20px;
	font-weight: bold;
}
.style9 {font-family: "Century Gothic"; font-size: 50px; font-weight: bold; color: #FF8000; }
.style10 {color: #000000}
.style11 {font-family: "Century Gothic"; font-size: 20px; font-weight: bold; color: #000000; }
</style>
</head>
<body>



<form action="register.php" method="post" name="register">
  <div align="left"><img src="images/akk2.png" alt=""><span class="style2"> HOUSING</span></div>
  <div style="background-image:url(images/Row-Houses.jpg)">
<h2 class="style3">&nbsp;</h2>
<h2 class="style9">New</h2>
<div align="center"> <span class="style4">
    <label for="uname"><b>
    <br />
    <span class="style10">Username:</span></b></label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>
    <input name="username" type="text" class="style5" placeholder="Enter Username" required>
    <br /><br />
  
    <label for="psw" class="style11">Create Password:</label>
    &nbsp; 
    <input name="password" type="password" placeholder="Enter Password" required>
  
  <br />
  <br />
  <br /><br />
  <br />
  &nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="create"><span class="style6">Create</span></button>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
  </div>
  </div>
</form>
</body>
</html>
