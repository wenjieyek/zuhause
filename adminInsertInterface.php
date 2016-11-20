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
	<h1>Zuhause Admin Insert Ad</h1>
</div>

<form action="adminInsert.php" method="POST" class="form-group" style="width:50%;margin-left: 25%;"  enctype="multipart/form-data">

	<p><input type="text" name="link" placeholder="Ad Link" class="form-control" required></p>
	<p><input type="file" name="fileToUpload"  class="form-control" required></p>
	<p><select class="form-control" name="type" required>
  <option value="mainpage">Main Page</option>
  <option value="ad1">Advertisment 1</option>
  <option value="ad2">Advertisment 2</option>
  
</select>
</p>
	<p><input type="submit" name="submit" value="Insert" class="form-control"></p>

	

</form>
</div>
</body>
</html>