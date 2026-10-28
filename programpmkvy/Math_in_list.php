<doctype html>
<head>
<title>Maths in list</title>
</head>
<body>
<?php
$num=123;
$num1=12;
echo "<li> $num";
echo "<li> $num1";
echo "<li> ============";
//Sum
$sum=$num+$num1;
echo "<li> Sum = $sum";

//Sub
$sub=$num-$num1;
echo "<li> Sub = $sub";

//Mul
$mul=$num*$num1;
echo "<li> Mul = $mul";

//div
$div=$num/$num1;
echo "<li> Div = $div";

//Mod
$mod=$num%$num1;
echo "<li> Mod = $mod";
?>
</body>
</html>