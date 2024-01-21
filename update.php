<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php
    include 'config.php';
 $id =$_GET['id'];
$record=mysqli_query($con," SELECT * FROM `crud` WHERE id=$id");
$data =mysqli_fetch_array($record);



    ?>
<center>
     <div class="main d-flex justify-content-center">
        <form action="update1.php" method="POST" enctype="multipart/form-data">
          <div class="form-group my-4">
            <input type="text" name="name" class ="form-control" placeholder="name"  value = "<?php echo $data['name'];?>"><br>
            <input type="text" name="price" id="" class ="form-control"placeholder="price" value = "<?php echo $data['price'];?>"><br>
           <td><input type="file" name="image" id=""  class ="form-control" value = "<?php echo $data['image'];?>"><img src="<?php echo $data['image'];?>"width='200px' height='70px'></td><br>
           <input type="hidden" name="id" value=<?php echo $data['id'];?>>
            <button name="update" class="btn btn-danger m-2">Update</button>
</div>
        </form>
</div>
     </center>


    

</body>
</html>