
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
           
            

          
            
           
          
          </div>";


              
         }
        
      
        
      }

      ///////////////////////////////////////////////////////////
      $sql="SELECT * FROM portfolio WHERE title='$title'";
     


      $result=$conn->query($sql);

      if ($result->num_rows>0) {
         while($row = $result->fetch_assoc()) {

          

           echo "<div class='col-sm-8 float-xs-right' >
           

           
            <p><img  class='img-fluid ' width='800px'  src='".$row['picture']."' ></p>
            

          
            
           
          
          </div>";

         


              
         }
        
      
        
      }


     

      $conn->close();



    ?>



     


     
    </div> <!-- /container -->


