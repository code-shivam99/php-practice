<!doctype html>
<head>
<title></title>
</head>
<body>
<?php
class first{
//variable with default
var $url = "Hello Nielit(National Institute of Electronic and Information Technology.)";
//Creating Method
function desc(){
	echo "Welcome to Nielit gkp for up skilling ";
}
}
 $object= new first();
 echo $object->url."<br>";
 $object->desc();
?>
</body>
</html>