<?php
	require_once("config.php");

	
 	
	

	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$password=md5($password);
	

	$sql="SELECT * FROM admin WHERE username='$username' and password='$password' limit 1";


		  $result=$conn->query($sql);

		  if ($result->num_rows>0) {
		  	 
		  	 	$_SESSION['adminusername'] = $username;
		  	 
		  	
		  	
		  	echo "<script> alert('Admin login successfully')</script>";
			echo "<script> window.location='adminIndex.php'</script>";
		  }else{
		  
		  	echo "<script> alert('Admin login Unsuccessfully')</script>";
			echo "<script> window.location='adminLoginInterface.php'</script>";
		  	
		  }

		  $conn->close();

?>