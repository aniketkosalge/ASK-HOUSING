<?php
  	 if(isset($_POST['submit'])){
	  if(isset($_POST["username"]) && isset($_POST["password"])){
	 $con=mysqli_connect("localhost","root","","registration");
				
		$sql= "SELECT * FROM `register` WHERE username='".$_POST['username']."' AND password='".$_POST['password']."'";
		
		$query=mysqli_query($con,$sql);
		$row=mysqli_fetch_array($query);
		
		if(is_array($row)){
				session_start();
				$_SESSION["username"] = $row["username"];
				
				header("location:home.html");
				
			}else{
				echo"<script>alert('Either Username or Password Is Incorrect'); windows.location='login.php'</script>";
			}
	 }
	 }
?>