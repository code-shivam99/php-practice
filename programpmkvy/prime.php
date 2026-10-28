<!doctype html>
<html>
<head>
<title>Input Prime Number</title>
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
for($i=2;`1){
	echo "$number is even ";
}
else{
	echo "$number is odd";
}
}
?>