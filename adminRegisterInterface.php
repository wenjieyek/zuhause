<?php
include "config.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div class="container">
<div class="jumbotron">
	<h1>Zuhause Admin Register</h1>
</div>

<form action="adminRegister.php" method="POST" class="form-group" style="width:50%;margin-left: 25%;">

	<p><input type="text" name="username" placeholder="Username" class="form-control"></p>
	<p><input type="password" name="password" placeholder="Password" class="form-control"></p>
	<p><input type="submit" name="submit" value="Register" class="form-control"></p>

	

</form>
</div>
</body>
</html>