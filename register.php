<?php  

require_once ("config.php");

	$useremail 			= 	mysqli_escape_string($conn,$_POST['useremail']);
    $userpassword     	=   md5(mysqli_escape_string($conn,$_POST['userpassword']));
    $username 			= 	mysqli_escape_string($conn,$_POST['username']);
    $userfullname 		= 	mysqli_escape_string($conn,$_POST['userfullname']);
    $usercompanyname 	= 	mysqli_escape_string($conn,$_POST['usercompanyname']);
    $userphonenumber 	= 	mysqli_escape_string($conn,$_POST['userphonenumber']);
    $userdescription 	= 	mysqli_escape_string($conn,$_POST['userdescription']);


    $target_dir = "picture/";
	$target_file = $target_dir .date('Hms')."_".basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


$sql="SELECT * FROM designer WHERE useremail='$useremail' limit 1";


		  $result=$conn->query($sql);

		  if ($result->num_rows>0) {
		  	 while($row = $result->fetch_assoc()) {
		  	 	
		  	echo "<script> alert('Email has been registered')</script>";
			echo "<script> window.location='loginInterface.php'</script>";
		  	 }
		  	
		  	
		  }else{

		  	$sql ="INSERT INTO designer(
							useremail,
							userpassword,
							username,
							userfullname,
							usercompanyname,
							userphonenumber,
							userdescription,
							userpicture) 
				VALUES (
							'$useremail',
							'$userpassword',
							'$username', 
							'$userfullname', 
							'$usercompanyname',
							'$userphonenumber', 
							'$userdescription',
							'$target_file')";

if ($conn->query($sql) ===TRUE){
	echo "<script> alert('Register successfully')</script>";
	$_SESSION['username']=$username;
	$_SESSION['email']=$useremail;
	echo "<script> window.location='index.php'</script>";
}else{
	echo"Error: ".$sql."<br>".$conn->error;
		  	
		  	
		  }

		  

	



}





$conn->close();


















?>