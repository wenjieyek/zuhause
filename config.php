<?php
	$servername="localhost";
	$username="root";
	$password="";
	$database="project";

	//create connection
	$conn= new mysqli ($servername,$username,$password,$database);

	//check connection
	if ($conn->connect_error) {
		die("Connection Failed: ". $conn->connect_error);
	}

  date_default_timezone_set("Asia/Kuala_Lumpur");

session_start();
	
?>

<!DOCTYPE html>
<!-- saved from url=(0049)http://v4-alpha.getbootstrap.com/examples/album/# -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="picture/home.png">

    <title>Zuhause</title>

    <!-- Bootstrap core CSS -->
    <link href="./index_files/bootstrap.min.css" rel="stylesheet">

    

    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">




    
  </head>

  <body>


    <div class="navbar navbar-static-top navbar-dark bg-inverse navbar-fixed-top" id="top">
      <div class="container-fluid">

      
       <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
  
       
        
        <a href="index.php" class="navbar-brand" >
        <img src="picture/logo.png" width="30" height="30" class="d-inline-block align-top" alt="Zuhause, share your house design!">
        &nbsp Zuhause
        </a>

        <div class="collapse navbar-toggleable-md" id="navbarResponsive">
    
    <ul class="nav navbar-nav">
    

    <li class="nav-item ">
      <a class="nav-link" href="insertDesignInterface.php">Share Your Design </a>
    </li>

    
    
    <?php

    if (@$_SESSION['username']=="") {

    echo "<li class='nav-item float-xs-left'>
            <a class='nav-link' href='loginInterface.php'> 
            <i class='fa fa-user-circle' aria-hidden='true'></i>&nbspLogin 
            </a>
            </li>";
 } else{

  echo "<li class='nav-item dropdown float-xs-left'>

      <a class='nav-link dropdown-toggle' href='http://example.com' id='supportedContentDropdown' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
      <i class='fa fa-user-circle' aria-hidden='true'></i>&nbsp ".ucfirst(@$_SESSION['username'])."
      </a>

      <div class='dropdown-menu ' aria-labelledby='supportedContentDropdown'>";

        $sql = "SELECT * FROM designer WHERE useremail='".@$_SESSION['email']."'";
      $result = $conn->query($sql);



    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo "<P><img src='".$row['userpicture']."'  class='img-thumbnail'  width='80px' style='margin-left:1cm;'><p>";


        }


        

        echo "<a class='dropdown-item' href='updateInterface.php?email=".@$_SESSION['email']."'>
        <i class='fa fa-user-circle' aria-hidden='true'></i>
        &nbspUpdate
        </a>
       
        <a class='dropdown-item' href='logout.php'>
        <i class='fa fa-sign-out' aria-hidden='true'></i>
        &nbspLog Out
        </a>
       
      </div>
    </li>";
 }
    

    ?>
        
    <form class="form-inline float-xs-right" method="get" action="searchResultInterface.php">
    <li class="nav-item ">
    
    <input class="form-control" type="text" placeholder="Search" name="search">
    

  
    <button class="btn btn-outline-secondary" type="submit">Search</button>
    
    </li>

    </form>



 


  

       


    
    </ul>


  </div>
        
      </div>
    </div>




    

   

</nav>

  

</div>


 


</body>
</html>


 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./index_files/jquery.min.js.下载" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./index_files/tether.min.js.下载" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="./index_files/holder.min.js.下载"></script>
    <script>
      $(function () {
        Holder.addTheme("thumb", { background: "#55595c", foreground: "#eceeef", text: "Thumbnail" });
      });
    </script>
    <script src="./index_files/bootstrap.min.js.下载"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./index_files/ie10-viewport-bug-workaround.js.下载"></script>
  

<svg xmlns="http://www.w3.org/2000/svg" width="356" height="280" viewBox="0 0 356 280" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="18" style="font-weight:bold;font-size:18pt;font-family:Arial, Helvetica, Open Sans, sans-serif">356x280</text></svg></body></html>