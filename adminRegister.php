<?php  

require_once ("config.php");

	$username 			= 	mysqli_escape_string($conn,$_POST['username']);
    $password     	=   md5(mysqli_escape_string($conn,$_POST['password']));
   

$sql="SELECT * FROM admin WHERE username='$username' limit 1";


		  $result=$conn->query($sql);

		  if ($result->num_rows>0) {
		  	 while($row = $result->fetch_assoc()) {
		  	 	
		  	echo "<script> alert('Email has been registered')</script>";
			echo "<script> window.location='adminLoginInterface.php'</script>";
		  	 }
		  	
		  	
		  }else{

		  	$sql ="INSERT INTO admin(
							username,
							password
							) 
				VALUES (
							'$username',
							'$password'
							)";

if ($conn->query($sql) ===TRUE){
	echo "<script> alert('Register successfully')</script>";
	$_SESSION['adminusername']=$username;
	
	echo "<script> window.location='adminIndex.php'</script>";
}else{
	echo"Error: ".$sql."<br>".$conn->error;
		  	
		  	
		  }

		  

	



}





$conn->close();


















?>