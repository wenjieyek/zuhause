
<?php

include "config.php";

if (@$_SESSION['username']=="") {
    echo "<script> window.location='loginInterface.php'</script>";
  }

?>



<!DOCTYPE html>
<html>
<head>


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

<div style="margin-top:120px;">
  <div class="upload_div">

    <form method="post" name="multiple_upload_form" id="multiple_upload_form" enctype="multipart/form-data" action="insertDesign.php" class="form-group" style="width:50%;">

     <p>Title: <input type="text" name="title" class="form-control" required></p>

     <p>Description: <textarea name="description" class="form-control" required></textarea></p>

     <p>Tag: <input type="text" name="tags" class="form-control" required></p>



      <p><input type="hidden" name="image_form_submit" value="1"/>
            <label>Choose Image: </label>
            <p><input type="file" name="images[]" id="images" multiple class="form-control" required></p>

            </p>
       
        <div class="uploading none">
            <label>&nbsp;</label>
            <img src="index_files/uploading.gif"/>
        </div>

        <p><input type="submit" name="submit" value="Submit" class="btn btn-secondary"></p>

    </form>
    </div>
  
    <div class="gallery" id="images_preview"></div>
</div>
</div>
</body>
</html>

  

