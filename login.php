<?php
	require_once("config.php");
	

	$useremail=$_POST['useremail'];
	$userpassword=$_POST['userpassword'];
	
	$userpassword=md5($userpassword);
	

	$sql="SELECT * FROM designer WHERE useremail='$useremail' and userpassword='$userpassword' limit 1";


		  $result=$conn->query($sql);

		  if ($result->num_rows>0) {
		  	 while($row = $result->fetch_assoc()) {
		  	 	$_SESSION['username'] = $row["username"];
		  	 }
		  	
		  	$_SESSION['email'] = $useremail;
		  	echo "<script> alert('Login successfully')</script>";
			echo "<script> window.location='index.php'</script>";
		  }else{
		  	$_SESSION['flash'] = "Wrong username or password";
		  	echo "<script> alert('Login Unsuccessfully')</script>";
			echo "<script> window.location='loginInterface.php'</script>";
		  	
		  }

		  $conn->close();

?>