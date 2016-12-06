
<?php

include "config.php";



  $title=$_GET['title'];
  $useremail="";




?>

<head>

<link rel="stylesheet" type="text/css" href="index_files/login.css">
  

</head>

  <body>

    <div class="container-fluid">

    <?php

     $sql="SELECT * FROM portfolio WHERE title='$title' LIMIT 1";


      $result=$conn->query($sql);

      if ($result->num_rows>0) {
         while($row = $result->fetch_assoc()) {

          

          echo "<div class='col-sm-3 float-xs-left' style='background-color:white;'>
           
             <P><h4 class='form-signin-heading'><img src='picture/home.png' class='img-responsive' style='height:40px;'>&nbsp Design Details</h4></P>
           
            <p><h5>Design Title:</h5>".$row['title']."</p>
            <p><h5>Design Description: </h5> ".$row['description']."</p>
            <p><h5>Design Price: </h5>".$row['price']."</p>
            <p><h5>Tags:</h5>".$row['tags']."</p>
          
            

          
            
           
          
          ";

          $useremail=$row['userid'];

              
         }
        
      
        
      }

        
      ///////////////////////////////////////////////////////////

       $sql="SELECT * FROM designer WHERE useremail='$useremail' LIMIT 1";


      $result=$conn->query($sql);

      if ($result->num_rows>0) {
         while($row = $result->fetch_assoc()) {

          

          echo "
           
             
            
            <p><h5>Designer: <br><br><a href='searchResultInterface.php?search=".$row['useremail']."'><img src='".$row['userpicture']."'' class='img-thumbnail' width='130px'></a></h5>".$row['userfullname']."</p>
            <p><h5>Company Name: </h5>".$row['usercompanyname']."</p>
            <p><h5>Phone Number: </h5>".$row['userphonenumber']."</p>
            <p><h5>Email: </h5>".$row['useremail']."</p>
            <p><h5>Description: </h5>".$row['userdescription']."</p>
           
            

          
            
           
          
          ";
         
          


              
         }
        
      
        
      }

      ?>

      <h5>Interested? Contact Him Now!</h5>

      <form action="" method="POST" class="form-signin">
      
      

      <input type="email" name="email" placeholder="Email" class="form-control">
      <input type="text" name="name" placeholder="Name" class="form-control">

      <input type="text" name="message" placeholder="Hi! I am interested" class="form-control">
      <p><input type="Submit" name="submit" value="Submit" class="form-control"></p>
        
      </form>


      <?php

      if ( isset( $_POST['submit'] ) ) { 

        $email     =  mysqli_escape_string($conn,$_POST['email']);
        $name      =  mysqli_escape_string($conn,$_POST['name']);
        $message   =  mysqli_escape_string($conn,$_POST['message']);
        $link      =  $_SERVER['REQUEST_URI'];
        
        $status=0;
  



         $sql ="INSERT INTO message(
                     name,
                     email,
                     message,
                     status,
                     receiver,
                     link) 
            VALUES (
                     '$email',
                     '$name',
                     '$message', 
                     '$status',
                     '$useremail',
                     '$link'
                     )";

if ($conn->query($sql) ===TRUE){
   echo "<script> alert('Message send successfully!')</script>";
  
}else{
   echo"Error: ".$sql."<br>".$conn->error;
         
         
        }

        

   



}


      
      
       $sql="SELECT * FROM advertisment ";


      $result=$conn->query($sql);

      if ($result->num_rows>0) {
         while($row = $result->fetch_assoc()) {

          

          echo "
           
             
            
            <p><a href='https://".$row['link']."'><img  class='img-fluid ' width='100%'  src='".$row['picture']."' ></a></p>
           
            

          
            
           
          
          ";


              
         }
        
      
        
      }



      ?>
      
      
      </div>

      <?php
      ///////////////////////////////////////////////////////////
      $sql="SELECT * FROM portfolio WHERE title='$title'";
     


      $result=$conn->query($sql);

      if ($result->num_rows>0) {
         while($row = $result->fetch_assoc()) {

          

           echo "<div class='col-sm-8 float-xs-right' >
           

           
            <p><img  class='img-fluid ' width='100%'  src='".$row['picture']."' ></p>
            

          
            
           
          
          </div>";

         


              
         }
        
      
        
      }


     

      $conn->close();



    ?>



     


     
    </div> <!-- /container -->


