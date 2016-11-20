<?php
include "config.php";

 	if ($_SESSION['adminusername']=="") {
 		echo "<script> window.location='adminLoginInterface.php'</script>";
 	}
		  	 
		  	 
			
		 
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div class="container">
<div class="jumbotron">
	<h1>Zuhause Admin Page, Hi <?php echo $_SESSION['adminusername'] ?></h1>
	<p><a href="adminRegisterInterface.php" class="btn btn-primary" style="margin-left:90%;">Register</a></p>
	<p><a href="logout.php" class="btn btn-danger" style="margin-left:90%;">Logout</a></p>
	<p><a href="adminInsertInterface.php" class="btn btn-primary" style="margin-left:90%;">Insert Ad</a></p>


	
</div>


<table class="table table-hover">

		<thead>

      	<tr>
      	<th>Ad Picture</th>
        <th>Ad Link</th>
        <th>Ad Location</th>
       
       
        <th></th>
        <th></th>
        
     	</tr>
    	</thead>

    	<tbody>
    	

    	<?php

       

    	$sql = "SELECT * FROM advertisment ";

		$result = $conn->query($sql);

		if ($result->num_rows > 0) {


    	

    	while($row = $result->fetch_assoc()) {
        echo "<tr>
              <th><img src='".$row["picture"]."' height='100px' width='65px'></th>
              <th>".$row["link"]."</th> 
              <th>".$row["type"]."</th> 

              
              <th>"."<a href=adUpdate.php?id=".$row['id']." class='btn btn-warning'>Edit</a></p>" ."</th>
              <th>"."<a href=adDelete.php?id=".$row['id']." class='btn btn-danger'>Delete</a></p>" ."</th>
              </tr>";
    	}
    	}

    	else
    	{
    	echo "0 results";
		}

 		$conn->close();
		?> 

		

    	</tbody>

    	
    	
			

		</table>


</div>


</body>
</html>