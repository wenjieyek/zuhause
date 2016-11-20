<?php
	require_once("config.php");
	

	$id=$_GET['id']; 

	$sql="DELETE FROM advertisment WHERE id='$id'";

	if ($conn->query($sql)===TRUE) {

		echo "<script> alert('Advertisment Delete Successfully')</script>";
		echo "<script> window.location='adminIndex.php'</script>";
	}else{

		echo "Error: ".$sql."<br>".mysqli_error($conn);
	}
?>