<!doctype html>
<html>
<head>
<title>Database Connection</title>
</head>
<body>
<?php
$servername="localhost";
$userrname="root";
$password="";
$dbname="mydb";
$conn=mysqli_connect($servername,$userrname,$password);
if (!$conn){
	die("Connection Failed : ".mysqli_connect_error());
}
$sql="CREATE DATABASE mydb";
if(mysqli_query($conn,$sql)){
	echo "Database created successfully";
}
else{
	echo "Error creating database ".mysqli_error($conn);
}
mysqli_close($conn);
?>
</body>
</html>