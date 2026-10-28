<!doctype html>
<html>
<head>
<title>form validation</title>
<style>
.error{color:red;}
</style>
</head>
<body>
<h2>Registration Form</h2>
<span class="error">*required field</span>
<form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name : <input type="text" name="name">
<span class="error"><?php echo "*Name is required";?></span>
<br><br>
Email : <input type="email" name="email">
<span class="error"><?php echo "*Email is required";?></span>
<br><br>
Mobile : <input type="number" name="mobile">
<span class="error"><?php echo "*Mobile is required";?></span>
<br><br>
Website : <input type="url" name="website">
<span class="error"><?php echo "*Website is required";?></span>
<br><br>
Gender : <input type="radio" name="gender">Male
		<input type="radio" name="gender">Female
		<input type="radio" name="gender">Others
<span class="error"><?php echo "*Mobile is required";?></span>
<br><br>
Agree <input type="checkbox">
<span class="error"><?php echo "*Please Check";?></span>
<br><br>
<input type="submit" value="Submit">

<br><br>
</form>
</body>
</html>