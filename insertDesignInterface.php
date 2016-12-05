
<?php

include "config.php";

if (@$_SESSION['username']=="") {
    echo "<script> window.location='loginInterface.php'</script>";
  }

?>



<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="index_files/login.css">

<link href="index_files/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script type="text/javascript" src="index_files/jquery.form.js"></script>

<script type="text/javascript">
$(document).ready(function(){
  $('#images').on('change',function(){
    $('#multiple_upload_form').ajaxForm({
      target:'#images_preview',
      beforeSubmit:function(e){
        $('.uploading').show();
      },
      success:function(e){
        $('.uploading').hide();
      },
      error:function(e){
      }
    }).submit();
  });
});
</script>
</head>

<body>
    <div class="container">

<div>
  <div class="upload_div">

   <h2 class="form-signin-heading"><img src="picture/home.png" class="img-responsive" style="height:40px;">&nbsp Upload Your Design</h2>

    <form method="post" name="multiple_upload_form" id="multiple_upload_form" enctype="multipart/form-data" action="insertDesign.php" class="form-group" style="width:50%;">

     <p><input type="text" name="title" class="form-control" placeholder="Title" required></p>

     <p><textarea name="description" class="form-control" placeholder="Description" required></textarea></p>

     <p><input type="text" name="price" class="form-control" placeholder="Price" required></p>

     <p><input type="text" name="tags" class="form-control" placeholder="Tags" required></p>



      <p><input type="hidden" name="image_form_submit" value="1"/>
            <label>Choose Image: </label>
            <p><input type="file" name="images[]" id="images" multiple class="form-control" required></p>

            </p>
       
        <div class="uploading none">
            <label>&nbsp;</label>
            <img src="index_files/uploading.gif"/>
        </div>

        <p><input type="submit" name="submit" value="Submit" class="btn btn-secondary" style="float:right;"></p>

    </form>
    </div>
  
    <div class="gallery" id="images_preview"></div>
</div>
</div>
</body>
</html>

  

