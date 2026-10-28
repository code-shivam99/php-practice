<!doctype html>
<html>
<head>
<title>Person Name </title>
</head>
<body>
<?php
class Person{
var $fname;
var $lname;
function showname(){
	echo"My name is : ".$this->fname." ".$this->lname;
}
}
$name = new Person();
$name->fname = "Raj";
$name->lname = "Singhal";
$name->showname();
?>
<body>
</html>