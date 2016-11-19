
<?php

include "config.php";

@$email=$_GET['email']; 


    $sql = "SELECT * FROM designer WHERE useremail='$email'";
$result = $conn->query($sql);



    // output data of each row
    while($row = $result->fetch_assoc()) {


?>


<head>

<link rel="stylesheet" type="text/css" href="index_files/login.css">
  

</head>

  <body>

    <div class="container">



      <form class="form-signin" method="POST" action=""  enctype="multipart/form-data">

        <h2 class="form-signin-heading"><img src="picture/home.png" class="img-responsive" style="height:40px;">&nbsp Update Your Information</h2>

        

        
        
        <input type="password" name="userpassword" id="inputPassword" class="form-control" placeholder="Password" required >

         <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Username" required <?php echo "value='".$row["username"]."'"?>>

         <input type="text" name="userfullname" id="inputEmail" class="form-control" placeholder="Full Name" required <?php echo "value='".$row["userfullname"]."'"?>>

         <input type="text" name="usercompanyname" id="inputEmail" class="form-control" placeholder="Company Name" required <?php echo "value='".$row["usercompanyname"]."'"?>>

         <input type="text" name="userphonenumber" id="inputEmail" class="form-control" placeholder="Phone Number" required <?php echo "value='".$row["userphonenumber"]."'"?>>

         <input type="file" name="fileToUpload" id="inputEmail" class="form-control" placeholder="Picture" required <?php echo "value='".$row["userpicture"]."'"?>>

         <input type="text" name="userdescription" id="inputEmail" class="form-control" placeholder="Description" required <?php echo "value='".$row["userdescription"]."'"?>>
        
       

        
        <p><button class="btn btn-lg btn-secondary btn-block" type="submit" name="submit">Update</button></p>

        
        
      </form>


     
    </div> <!-- /container -->


<?php
}

    if(isset($_POST['submit'])){

    
    @$userpassword       =   md5(mysqli_escape_string($conn,$_POST['userpassword']));
    @$username           =   mysqli_escape_string($conn,$_POST['username']);
    @$userfullname       =   mysqli_escape_string($conn,$_POST['userfullname']);
    @$usercompanyname    =   mysqli_escape_string($conn,$_POST['usercompanyname']);
    @$userphonenumber    =   mysqli_escape_string($conn,$_POST['userphonenumber']);
    @$userdescription    =   mysqli_escape_string($conn,$_POST['userdescription']);


    @$target_dir = "picture/";
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




        $sql ="UPDATE designer set
                           
                            userpassword='$userpassword',
                            username='$username', 
                            userfullname= '$userfullname', 
                            usercompanyname='$usercompanyname',
                            userphonenumber='$userphonenumber', 
                            userdescription='$userdescription',
                            userpicture='$target_file'
                            WHERE 
                            useremail='$email'";
                
                            
                            
                            
                           
                            
                            
                            
                            

if ($conn->query($sql) ===TRUE){
    echo "<script> alert('Update successfully')</script>";
   
    
    echo "<script> window.location='index.php'</script>";
}else{
    echo"Error: ".$sql."<br>".$conn->error;
}

$conn->close();



    }






?>