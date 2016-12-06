<?php
	require_once("config.php");
	

	$id=$_GET['id']; 
	$title=$_GET['title']; 

	$sql="DELETE FROM portfolio WHERE id='$id'";

	if ($conn->query($sql)===TRUE) {

		echo "<script> alert('Delete Successfully')</script>";
		echo "<script> window.location='manageDesignDetailsInterface.php?title=".$title."'</script>";
	}else{

		echo "Error: ".$sql."<br>".mysqli_error($conn);
	}
?>