
<?php

include "config.php";

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
        <th>Title</th>
        <th>Description</th>
        <th>Tags</th>
        <th>Price</th>
        <th>Update</th>
        <th>Delete</th>
        <th>Insert</th>
        
        
      </tr>
      </thead>

      <tbody>

    <?php

     $sql="SELECT * FROM portfolio WHERE userid='$email' GROUP BY title";


      $result=$conn->query($sql);

      if ($result->num_rows>0) {
         while($row = $result->fetch_assoc()) {

           

         echo "
              
              <th><a href='manageDesignDetailsInterface.php?title=".$row["title"]."&email=".$email."' ><img class='img-fluid' src='".$row["picture"]."' style='width:1000px'></a></th> 

              <th>".$row["title"]."</th> 
              <th>".$row["description"]."</th> 
              <th>".$row["tags"]."</th> 
              <th>".$row["price"]."</th> 

              <th><a href='updateDesign.php?title=".$row["title"]."&email=".$email."' class='btn btn-secondary'>Update</a></th> 

              <th><a href='deleteDesign.php?title=".$row["title"]."&email=".$email."' class='btn btn-danger' onclick='return confirmation()'>
              Delete</a></th> 

             <th><a href='insertNewDesignInterface.php?title=".$row["title"]."&email=".$email."' class='btn btn-secondary'>Insert New</a></th> 
              
             
              
             
              </tr>";

         
              
         }
        
      
        
      }

        
    
     

      $conn->close();



    ?>



     


     
    </div> <!-- /container -->


