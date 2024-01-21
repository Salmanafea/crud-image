<?php
include 'config.php';

 $id =$_GET['id'];
mysqli_query($con,"DELETE FROM `crud` WHERE id=$id");
header('Location:index.php');


?>