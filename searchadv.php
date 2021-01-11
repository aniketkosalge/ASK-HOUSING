<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `createadv` WHERE CONCAT(`housetype`, `address`, `pincode`, `city`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `createadv`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "registration");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ASK HOUSING</title>
<style type="text/css">
<!--
.style1 {
	font-family: "Times New Roman";
	font-size: 14px;
	font-weight: normal;
	background-color: #FF9933;
	color: #FFFFFF;
}
.style3 {font-family: merlin; font-size: 40px; font-weight: bold; }
-->
</style>
</head>

<body>
<form action="searchadv.php" method="post">
<div align="left"><img src="images/akk2.png" alt=""><span class="style3">HOUSING</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="valueToSearch" placeholder="Search here...">
&nbsp;&nbsp;&nbsp;
            <input name="search" type="submit" class="style1" value="Filter">
            <br><br>
            
            

      
                <?php while($row = mysqli_fetch_array($search_result)):?>
				<?php echo "<bgimage url='images/aak.png'>";?>
				<?php echo "<font size='5' face='Times New Roman' color='#400040'>";?>
                
                    <br/><br/> <font face="Times New Roman" color="#800040" size="+3" style="border-bottom:thin">House Images:</font><?php echo $row['houseimg1'];?>
                    <?php echo $row['houseimg2'];?>
					<?php echo $row['houseimg3'];?><br/><br/>
					<font face="Times New Roman" color="#800040" size="+3" style="border-bottom:thin">Owner Name:</font><?php echo $row['ownername'];?><br/>
                    <font face="Times New Roman" color="#800040" size="+3" style="border-bottom:thin">Address:</font><?php echo $row['address'];?><br/>
                    <font face="Times New Roman" color="#800040" size="+3" style="border-bottom:thin">City:</font><?php echo $row['city'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <font face="Times New Roman" color="#800040" size="+3" style="border-bottom:thin">Pincode:</font><?php echo $row['pincode'];?><br/>
					<font face="Times New Roman" color="#800040" size="+3" style="border-bottom:thin">House Discription:</font><?php echo $row['housedetails'];?>
                    <font face="Times New Roman" color="#800040" size="+3" style="border-bottom:thin">House Type:</font><?php echo $row['housetype'];?><br/><br/>
                   
                    <font face="Times New Roman" color="#800040" size="+3" style="border-bottom:thin">Contact No.:</font><?php echo $row['phoneno'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <font face="Times New Roman" color="#800040" size="+3" style="border-bottom:thin">Email ID:</font><?php echo $row['emailid'];?>

<font color color="#800040" size="+2" face="Century Gothic">=========================================================================================</font>                   
                
                <?php endwhile;?>
            
				
</form>
</body>
</html>

