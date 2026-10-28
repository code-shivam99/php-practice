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
//create Connection
$con=mysqli_connect($servername,$username,$password);
//check connection
if(!$con)
{
	die("connection Failed :".mysqli_connect_error());
}
else
{
	echo "Connection is succesfull";
}
?>
</body>
</html>