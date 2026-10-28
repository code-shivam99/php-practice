<!doctype html>
<html>
<head>
<title>Super Global Variables</title>
</head>
<body>
<?php
$x = 3343;
$y = 88;

function add(){
$GLOBALS['z'] =  $GLOBALS['x'] + $GLOBALS['y'];
}

function sub(){
	$GLOBALS['z'] =  $GLOBALS['x'] - $GLOBALS['y'];
}

function mul(){
	$GLOBALS['z'] =  $GLOBALS['x'] * $GLOBALS['y'];
}

function div(){
	$GLOBALS['z'] =  $GLOBALS['x'] / $GLOBALS['y'];
}
echo "<ol>";
add();
echo "<li>"."Sum of $x and $y is : ".$z."<br>"."</li>";
sub();
echo "<li>"."Subtraction of $x and $y is : ".$z."<br>"."</li>";
mul();
echo "<li>"."Multiple of $x and $y is : ".$z."<br>"."</li>";
div();
echo "<li>"."Sub of $x and $y is : ".$z."<br>"."</li>";
echo "</ol>";
?>
</body>
</html>