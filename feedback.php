<?php include('server7.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
.small-inputs {
  display: flex;
  margin-top: 20px;
  justify-content: space-between;
}
.style2 {
	font-size: 36px;
	font-weight: bold;
	font-family: merlin;
}
.radio-input {
  margin-top: 20px;
}
.next-btn {
  color: #fff;
  background: #FF8000;
}
</style>
</head>

<body>
<form action="" method="post">
<div align="left"><img src="images/akk2.png" alt=""><span class="style2"> HOUSING</span></div>
 <div>
 Name:<input text="text" maxlength="50" placeholder="Enter Your Name" name="username" /><br /><br />
    <label>Feedback</label>
	<br /><br />
     <textarea type="text" id="feedback" maxlength="500" placeholder="Write Your Feedback" name="feedback"></textarea>
 </div>
  <div class="radio-input">
          
            <input type="radio" name="rating" value="1" checked="checked"><img src="images/ak2.png" /><br />
			<input type="radio" name="rating" value="2"><img src="images/ak2.png" /><img src="images/ak2.png" /><br />
			<input type="radio" name="rating" value="3"><img src="images/ak2.png" /><img src="images/ak2.png" /><img src="images/ak2.png" /><br />
			<input type="radio" name="rating" value="4"><img src="images/ak2.png" /><img src="images/ak2.png" /><img src="images/ak2.png" /><img src="images/ak2.png" /><br />
			<input type="radio" name="rating" value="5"><img src="images/ak2.png" /><img src="images/ak2.png" /><img src="images/ak2.png" /><img src="images/ak2.png" /><img src="images/ak2.png" />
 </div><br /><br />
 <button class="btn next-btn" name="submit">Submit</button>
 
</form>
</body>
</html>
<br />
<br />
<?php include('server8.php'); ?>


