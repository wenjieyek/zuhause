
<?php

include "config.php"

?>

<head>

<link rel="stylesheet" type="text/css" href="index_files/login.css">
  

</head>

  <body>

    <div class="container">



      <form class="form-signin" method="POST" action="register.php"  enctype="multipart/form-data">

        <h2 class="form-signin-heading"><img src="picture/home.png" class="img-responsive" style="height:40px;">&nbsp Please Register</h2>

        

        <input type="email" name="useremail" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        
        <input type="password" name="userpassword" id="inputPassword" class="form-control" placeholder="Password" required>

         <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Username" required >

         <input type="text" name="userfullname" id="inputEmail" class="form-control" placeholder="Full Name" required >

         <input type="text" name="usercompanyname" id="inputEmail" class="form-control" placeholder="Company Name" required >

         <input type="text" name="userphonenumber" id="inputEmail" class="form-control" placeholder="Phone Number" required >

         <input type="file" name="fileToUpload" id="inputEmail" class="form-control" placeholder="Picture" required >

         <input type="text" name="userdescription" id="inputEmail" class="form-control" placeholder="Description" required >
        
       

        
        <p><button class="btn btn-lg btn-secondary btn-block" type="submit">Register</button></p>

        
        
      </form>


     
    </div> <!-- /container -->


