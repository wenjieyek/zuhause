
<?php

include "config.php";

$title=$_GET['title']; 
$email=$_GET['email']; 


    $sql = "SELECT * FROM portfolio WHERE title='$title' GROUP BY title";
$result = $conn->query($sql);



    // output data of each row
    while($row = $result->fetch_assoc()) {


?>


<head>

<link rel="stylesheet" type="text/css" href="index_files/update.css">
  

</head>

  <body>

    <div class="container">



      <form class="form-signin" method="POST" action=""  enctype="multipart/form-data">

        <h2 class="form-signin-heading"><img src="picture/home.png" class="img-responsive" style="height:40px;">&nbsp Update Your Design</h2>

        

        
        
        

         <input type="text" name="title"  class="form-control"  required <?php echo "value='".$row["title"]."'"?>>

         <textarea name="description"  class="form-control" rows="10" cols="50" required><?php echo $row["description"] ?>
             
         </textarea>

         <input type="text" name="tags"  class="form-control"  required <?php echo "value='".$row["tags"]."'"?>>

         <input type="text" name="price" class="form-control"  required <?php echo "value='".$row["price"]."'"?>>

        
        
       

        
        <p><button class="btn btn-lg btn-secondary btn-block" type="submit" name="submit">Update</button></p>

        
        
      </form>


     
    </div> <!-- /container -->


<?php
}

    if(isset($_POST['submit'])){

    
   
    @$newtitle       =   mysqli_escape_string($conn,$_POST['title']);
    @$description    =   mysqli_escape_string($conn,$_POST['description']);
    @$tags    =   mysqli_escape_string($conn,$_POST['tags']);
    @$price    =   mysqli_escape_string($conn,$_POST['price']);


   



        $sql ="UPDATE portfolio set
                           
                            title='$newtitle',
                            description='$description', 
                            tags= '$tags', 
                            price='$price'

                            WHERE 
                            title='$title'";
                
                            
                            
                            
                           
                            
                            
                            
                            

if ($conn->query($sql) ===TRUE){
    echo "<script> alert('Update Successfully')</script>";
        echo "<script> window.location='manageDesignInterface.php?email=".$email."'</script>";
}else{
    echo"Error: ".$sql."<br>".$conn->error;
}

$conn->close();



    }






?>