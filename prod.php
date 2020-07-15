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

if(isset($_POST["check"]))
{

$sql = "INSERT INTO  product (productid, productname, productprice, productdesc)
VALUES
('$_POST[pid]','$_POST[name]','$_POST[price]','$_POST[desc]')";

if (mysqli_query($conn, $sql)) {
  echo "<br>New record created successfully";
}
else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}
}
mysqli_close($conn);

?>
