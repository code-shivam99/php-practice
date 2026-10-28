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
$sql="INSERT INTO student(Fname,Lname,Email)VALUES('Rahul','Kumar','rahul@gmail.com')";
if(mysqli_query($conn,$sql))
{
	echo "Data Insersted user is created successfully";
}
else
{
	echo "Error creating table".mysqli_error($conn);
}
mysqli_close($conn);
?>
</body>
</html>