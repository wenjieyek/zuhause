<?php
  include "config.php"
?>

<head>


  
  <!-- Custom styles for this template -->
    <link href="./index_files/album.css" rel="stylesheet">
 <!-- Custom styles for this template -->
<link href="./index_files/carousel.css" rel="stylesheet">


<script>
function myFunction() {
    $('#myModal').modal('show')
}
</script>


</head>

<body onload="myFunction()">


  <!-- Ad Modal -->
<div class="modal fade" id="myModal"  >
  <div class="modal-dialog" role="document">
 

    <?php
      $sql = "SELECT * FROM advertisment WHERE type='mainpage'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "<a href='http://".$row["link"]."'><img src='".$row["picture"]."' class='img-fluid' width='400px' style='margin-left:16%;'></a>";
      }
      }

      else
      {
      echo "0 results";
    }

    
    ?> 
    
   
    </div>
    </div>
  





    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="first-slide" src="http://cdn.home-designing.com/wp-content/uploads/2016/10/Minimalistic-living-room-light-grey-la-shape-sofa-white-walls-black-TV-screen.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption text-xs-left">
              <h1>Zuhause</h1>
              <p>A Wonderful Place To Seek Your Dream House Design, All Is Free</p>
              <p><a class="btn btn-lg btn-outline-secondary" href="loginInterface.php" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="second-slide" src="http://cdn.home-designing.com/wp-content/uploads/2016/10/Smooth-lined-lounge-design-leather-l-shape-lounge-box-light-simple-staircase-railing.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Zuhause</h1>
              <p>A Wonderful Place To Seek Your Dream House Design, All Is Free</p>
              <p><a class="btn btn-lg btn-outline-secondary" href="loginInterface.php" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="third-slide" src="http://cdn.home-designing.com/wp-content/uploads/2016/10/White-brick-and-grey-textured-living-room-black-feature-wall-painting-easy-to-live-in-look.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption text-xs-right">
              <h1>Zuhause</h1>
              <p>A Wonderful Place To Seek Your Dream House Design, All Is Free</p>
              <p><a class="btn btn-lg btn-outline-secondary" href="loginInterface.php" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

    <div class="album text-muted">
      <div class="container">

        
        <div class="row">
        
        <?php

        $per_page=9;
if (isset($_GET['page'])) {

$page = $_GET['page'];

}

else {

$page=1;

}

// Page will start from 0 and Multiple by Per Page
$start_from = ($page-1) * $per_page;

      //$sql = "SELECT picture,title FROM portfolio WHERE thumbnail='1' GROUP BY title";

        $sql = "SELECT * FROM portfolio GROUP BY title  LIMIT $start_from, $per_page";
      

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      

      while($row = $result->fetch_assoc()) {
        echo "<div class='col-sm-4'>
           <div class='card' style='height:400px;'>

            <a href='designDetailsInterface.php?title=".$row['title']."'>
            <img   style='height: 270px; width: 100%; display: block;' src='".$row['picture']."' >
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

   echo "</div>";



    //Now select all from table
$query = "SELECT * FROM portfolio GROUP BY title";
$result = mysqli_query($conn, $query);

// Count the total records
$total_records = mysqli_num_rows($result);

//Using ceil function to divide the total records on per page
$total_pages = ceil($total_records / $per_page);

//Going to first page
echo "<center><a href='index.php?page=1'>".'First Page'."</a> ";

for ($i=1; $i<=$total_pages; $i++) {

echo "<a href='index.php?page=".$i."''>".$i."</a> ";
};
// Going to last page
echo "<a href='index.php?page=$total_pages'>".'Last Page'."</a></center> ";

 $conn->close();
        ?>
        
         

         
      
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


   