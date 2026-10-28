<!doctype html>
<html>
<head>
<title>Sum of digit</title>
</head>
<body>
<form method="post">
Enter Number : <input type="number" name="number"><br><br>
<input type="button" name="button" value="Submit">
</form>
<?php
$num = 14593;
$sum = 0;
$rev = 0;
for($i=0; $i <= strlen($num); $i++)
{
	$rev = $num % 10;
	$sum = $sum + $rev;
	$num = $num / 10;
}
echo "Sum of 14593 digit : $sum";
?>
</body>
</html>
<?php
/*
if($_POST){
	$number=$_POST["number"];
	$sum = 0;
	$rev = 0;
	for($i=0; $i <= strlen($number); $i++);
	$rev = $num % 10;
	$sum = $sum + $rev;
	$num = $num / 10;
}
echo "$sum";
*/
?>