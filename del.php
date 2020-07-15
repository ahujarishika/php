<!DOCTYPE html>
<html>
<head>
	<title>Insert</title>
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
<form method="post" action="del.php" >
First Name   <input type="text" name="firstN" 
	 size="5" ?>
	 <input type="submit" name="check1" value="Ok">
	</form>
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
if(isset($_POST['check1']))

 {   
$sql = "delete from student where firstname='$_POST[firstN]'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
}
?>
</body>
</html>
