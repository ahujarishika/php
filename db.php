<?php
$servername="localhost";
$username="root"
$password="";
//create connection
$conn=mysqli_connect($servername,$usernam,$password);
//Check connection
if(!$conn)
{
	die("Connection failed:".mysqli_connect_error());
	}
echo"Connected Successfully";
//sql to create database
 $sql="create database college";
 //Check database
 if(mysqli_query($conn,$sql)){
 echo"Database created successfully";
 }
 else{
 echo"Error creating database:".mysqli_error($conn);
 }
mysqli_close($conn);

?>
