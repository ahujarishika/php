<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "create table product(
productid INT(6) UNSIGNED ,
productname VARCHAR(30) NOT NULL,
productprice INT(6) UNSIGNED,
productdesc VARCHAR(30) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
  echo "Table product created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
