<?php

require_once "config.php";


@$id=$_GET['id']; 


    $sql = "SELECT * FROM advertisment WHERE id='$id'";
$result = $conn->query($sql);



    // output data of each row
    while($row = $result->fetch_assoc()) {


?>


<body>
<div class="container">
<div class="jumbotron">
    <h1>Admin Edit Page</h1>
   


    
</div>
    

    <form action="" method="POST" class="form-group" style="width:50%;margin-left: 25%;"  enctype="multipart/form-data">

    <p><input type="text" name="link" placeholder="Ad Link" class="form-control" required <?php echo "value='".$row["link"]."'"?>></p>
    
    <p><select class="form-control" name="type" required >
  <option value="mainpage">Main Page</option>
  <option value="ad1">Advertisment 1</option>
  <option value="ad2">Advertisment 2</option>
  
</select>
</p>
    <p><input type="submit" name="submit" value="Insert" class="form-control"></p>

    

</form>
    

</div>
</body>


<?php

}

@$link      = mysqli_escape_string($conn,$_POST['link']);





 if(isset($_POST['submit'])){     

    $sql="UPDATE advertisment set 
                link='$link'
              
                WHERE id='$id'";

if ($conn->query($sql) ===TRUE){
    echo "<script> alert('Advertisment update Successfully')</script>";
        echo "<script> window.location='adminIndex.php'</script>";

}else{
    echo"Error: ".$sql."<br>".$conn->error;
}

$conn->close();

                
             }





?>
</html>