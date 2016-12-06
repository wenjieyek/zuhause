
<?php

include "config.php";

  @$title=$_GET['title']; 
  @$email=$_GET['email']; 

?>

<head>

<link rel="stylesheet" type="text/css" href="index_files/login.css">

<script type="text/javascript">
    function confirmation() {
      return confirm('Are you sure to delete your design?');
    }
</script>
  

</head>

  <body>

    <div class="container-fluid">

    <table class="table table-hover table-responsive" >

    <thead class="thead-inverse">

        <tr>
        <th>Picture</th>
        
        <th>Delete</th>
        
        
        
      </tr>
      </thead>

      <tbody>

    <?php

     $sql="SELECT * FROM portfolio WHERE title='$title' ";


      $result=$conn->query($sql);

      if ($result->num_rows>0) {
         while($row = $result->fetch_assoc()) {

           

         echo "
              
              <th><img class='img-fluid' src='".$row["picture"]."' style='width:600px'></th> 
              

              <th><a href='deleteDesignDetails.php?id=".$row["id"]."&title=".$title."' class='btn btn-danger' onclick='return confirmation()'>
              Delete</a></th> 

            
              
             
              
             
              </tr>";

         
              
         }
        
      
        
      }

        
    
     

      $conn->close();



    ?>



     


     
    </div> <!-- /container -->


