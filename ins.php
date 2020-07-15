<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
	<style>
	body {
	 font-family:arial;
	 font-size :20px;
	 background-color:gray;	
}
input[type=submit]
	{
font-size: 20px; 
font-weight: bold;
font-family: arial; 
background-color: violet;
	}
	</style>
</head>
<body>
<form method="post" action="ins.php" >

Roll No   <input type="text" name="roll" 
	 size="5"  ?>
     	 	 
First Name   <input type="text" name="first" 
	 size="5" ?>
Last Name   <input type="text" name="last" 
	 size="5" ?>
	 <input type="submit" name="check" value="Ok">

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "College";


$conn = mysqli_connect($servername, $username, $password,$dbname);


if (!$conn) 
{
  die("Connection failed: <br> " . mysqli_connect_error());
}
if(isset($_POST['check']))
{
 
$sql = "INSERT INTO  student (rollno, firstname, lastname)
VALUES 
('$_POST[roll]','$_POST[first]','$_POST[last]')";

if (mysqli_query($conn, $sql)) {
  echo "<br>New record created successfully";
} 
else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>
</body>
</html>
