<?php

include 'config.php';
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $NAME =$_POST['name'];
    $PRICE =$_POST['price'];
    $IMAGE = $_FILES['image'];
    // print_r($_FILES['image']);
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des ="uploadimage/".$img_name;
    move_uploaded_file($img_loc,'uploadimage/'.$img_name); 
    mysqli_query($con,"UPDATE `crud` SET `name`='$name',`price`='$price',`image`='$img_des' WHERE $id =id");
    header('Location:index.php');
}


?>