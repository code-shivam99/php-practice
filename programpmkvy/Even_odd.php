<!doctype html>
<html>
<head>
<title>Input Even and Odd</title>
</head>
<body>
<form method="post">
Enter No : <input type="number" ><br><br>
<input type="submit" value="submit">
</form>
</body>
</html>
<?php
if ($_POST){
	$number=$_POST['number'];
if(($number%2)==0){
	echo "$number is even ";
}
else{
	echo "$number is odd";
}
}
?>