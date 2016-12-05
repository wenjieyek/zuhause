<?php
  include "config.php"

  
?>

<head>


  
  <!-- Custom styles for this template -->
    <link href="./index_files/album.css" rel="stylesheet">
 <!-- Custom styles for this template -->
<link href="./index_files/carousel.css" rel="stylesheet">





</head>

<body>


 

    <div class="album text-muted">
      <div class="container">

        
        <div class="row">
        
        <?php

        $search      =   mysqli_escape_string($conn,$_GET['search']);

        echo "<p>Search Result of '".$search."'</p>";


      //$sql = "SELECT picture,title FROM portfolio WHERE thumbnail='1' GROUP BY title";

        $sql = "SELECT * FROM portfolio WHERE 
                                              description LIKE '%$search%' or 
                                              title LIKE '%$search%' or
                                              tags LIKE '%$search%' or
                                              userid LIKE '%$search%' 

                                               GROUP BY title";
       
      

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      

      while($row = $result->fetch_assoc()) {
        echo "<div class='col-sm-4'>
           <div class='card'>

            <a href='designDetailsInterface.php?title=".$row['title']."'>
            <img  style='height: 210px; width: 100%; display: block;' src='".$row['picture']."' >
             </a>

            <p >".$row['title']."</p>
            <p class='card-text'>".$row['tags']."</p>
           
          </div>
          </div>";

        
      }
      }
      
      else
      {
      echo "0 results";
    }

    $conn->close();


        ?>
        
         

         
      </div>
    </div>
    </div>

   <footer class="text-muted">
      <div class="container">
        <p class="float-xs-right">
          <a href="index.php#top">Back to top</a>
        </p>
        <p>Zuhause. All Rights Reserved </p>
        <p>Education Proposal</p>
      </div>
    </footer>


   