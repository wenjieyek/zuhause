<?php
	require_once("config.php");
	

	$title=$_GET['title']; 
	$email=$_GET['email']; 

	$sql="DELETE FROM portfolio WHERE title='$title'";

	if ($conn->query($sql)===TRUE) {

		echo "<script> alert('Delete Successfully')</script>";
		echo "<script> window.location='manageDesignInterface.php?email=".$email."'</script>";
	}else{

		echo "Error: ".$sql."<br>".mysqli_error($conn);
	}
?>