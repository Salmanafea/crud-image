<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width", initial-scale="1.0">
    <title>Php Crud Image</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
     <center>
     <div class="main d-flex justify-content-center">
        <form action="insert.php" method="POST" enctype="multipart/form-data">
          <div class="form-group my-4">
           
            <input type="text" name="name" class ="form-control" placeholder="name"><br>
           
            <input type="text" name="price" id="" class ="form-control"placeholder="price"><br>
            
            <input type="file" name="image" id="" class ="form-control"><br>

            <button name="upload" class="btn btn-primary">Upload</button>
</div>
        </form>
</div>
     </center>

      <div class="container">
     <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Delete</th>
      <th scope="col">Update</th>
      
      
    </tr>
  </thead>
  <tbody>

  <?php

  include 'config.php';
  $pic = mysqli_query($con,"SELECT *FROM `crud`");
  while($row=mysqli_fetch_array($pic)){
    echo "
    <tr>
    <td>$row[id]</td>
    <td>$row[name]</td>
    <td>$row[price]</td>
    <td><img src='$row[image]' width='200px' height='70px'></td>
    <td><a href='delete.php?id=$row[id]' class='btn btn-danger'>Delete</a></td>
    <td><a href='update.php?id=$row[id]'class='btn btn-danger'>Update</a></td>
    

    </tr>
    ";
  }

  ?>



  </tbody>
</table>

</div>



</body>
</html>