<!doctype html>
<html>
<head>
<title>Database Connection</title>
</head>
<body>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mydb";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
	die("Connection Failed :".mysqli_error());
}
//sql table create
$sql="CREATE TABLE user(Id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Fname VARCHAR(80) NOT NULL,
Lname VARCHAR(50) NOT NULL,
Email VARCHAR(80),
Reg_Date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
if(mysqli_query($conn,$sql))
{
	echo "Table user is created successfully";
}
else
{
	echo "Error creating table".mysqli_error($conn);
}
mysqli_close($conn);
?>
</body>
</html>