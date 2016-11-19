
<?php

include "config.php"

?>

<head>

<link rel="stylesheet" type="text/css" href="index_files/login.css">
  

</head>

  <body>

    <div class="container">



      <form class="form-signin">

        <h2 class="form-signin-heading"><img src="picture/home.png" class="img-responsive" style="height:40px;">&nbsp Please sign in</h2>

        

        <input type="email" name="useremail" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        
        <input type="password" name="userpassword" id="inputPassword" class="form-control" placeholder="Password" required>


        
        <button class="btn btn-lg btn-secondary btn-block" type="submit">Sign in</button>

        <p><a href="registerInterface.php" style="float:right;">Register</a></p>

      </form>


     
    </div> <!-- /container -->


