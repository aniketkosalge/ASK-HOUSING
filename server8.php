<?php
$servername = "localhost:8080";
$username = "username";
$feedback = "feedback";
$rating = "rating";
$dbname = "registration";

$conn=mysqli_connect("localhost","root","","registration");
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT username,feedback, rating FROM feedback";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
		{
			echo "<font size='3' face='Times New Roman' color='black'>";
            echo "<br>Name:&nbsp;&nbsp;&nbsp;&nbsp;". $row["username"]."<br>Feedback:&nbsp;&nbsp;&nbsp;&nbsp;<br>". $row["feedback"]. "<br>Rating:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["rating"], "<br>===============================================================================================<br>";
		}
} else 
{
    echo "0 results";
}

$conn->close();
?> 
