<!doctype html>
<html>
<head>
<title>Open the file</title>
</head>
<body>
<?php
$myfile = fopen("deepa.txt","r");
echo fread($myfile,filesize("deepa.txt"));
fclose($myfile);
?>
</body>
</html>