<?php  


require_once ('config.php');

@$id=$_GET['id'];
@$email=$_GET['email']; 
   

 $sql="UPDATE message set status='1' WHERE id='$id'";

if ($conn->query($sql) ===TRUE){
	echo "<script> alert('Message Checked Successfully')</script>";
		echo "<script> window.location='messageInterface.php?email=".$email."'</script>";

}else{
	echo"Error: ".$sql."<br>".$conn->error;
}

$conn->close();

                
            


?>