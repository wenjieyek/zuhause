
<?php

include "config.php";

  @$email=$_GET['email'];

?>

<head>

<link rel="stylesheet" type="text/css" href="index_files/login.css">
  

</head>

  <body>

    <div class="container">

    <table class="table table-hover table-responsive" >

    <thead class="thead-inverse">

        <tr>
        <th>Status</th>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
        <th>Link</th>
        
        
      </tr>
      </thead>

      <tbody>

    <?php

     $sql="SELECT * FROM message WHERE receiver='$email'";


      $result=$conn->query($sql);

      if ($result->num_rows>0) {
         while($row = $result->fetch_assoc()) {

           if($row["status"]==0) {
            echo "<tr>
            <th><a href=messageCheck.php?id=".$row["id"]."&email=".$email." class='btn btn-secondary'>Check</a></th>";
        }

         echo "
              
              <th>".$row["name"]."</th> 
              <th>".$row["email"]."</th> 
              <th>".$row["message"]."</th> 
              <th><a href='".$row["link"]."'>Link</a></th> 
              
             
              </tr>";

         
              
         }
        
      
        
      }

        
    
     

      $conn->close();



    ?>



     


     
    </div> <!-- /container -->


