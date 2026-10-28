
<?php
if ($_SERVER['REQUEST_METHOD']==['POST']){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['pass'];
}
$servername="localhost";
$username="root";
$password="";
$dbname="mini_project";
//create Connection
$con=mysqli_connect($servername,$username,$password,$dbname);
//check connection
if(!$con)
{
	die("connection Failed :".mysqli_connect_error());
}
else
{
	$sql="insert into ";
}
?>
