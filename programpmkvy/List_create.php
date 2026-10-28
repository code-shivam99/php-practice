<doctype html>
<html>
<head>
<title>List</title>
</head>
<body bgcolor="lightblue">
<?php

$txt="Arun";
$txt1="Rajan";
$txt2="Rahul";
$txt3="Deepa";
$txt4="Amit";
$txt5="Chandan";
echo "<ol>"; 
echo "<li>$txt";
echo "<li>$txt1";
echo "<li>$txt2";
echo "<li>$txt3";
echo "<li>$txt4";
echo "<li>$txt5";
echo "</ol>"; 
echo "<ol>"; 
echo "<li>".gettype($txt);
echo "<li>$txt1";
echo "<li>$txt2";
echo "<li>$txt3";
echo "<li>$txt4";
echo "<li>$txt5";
echo "</ol>"; 
?>
</html>