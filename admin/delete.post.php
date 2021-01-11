<?php
include("inc/header.php");

    $id = $_POST['id'];

    $select = "SELECT * FROM dreamart_posts WHERE post_id  = $id";
    $res = mysqli_query($conn,$select);
    $roeess = mysqli_fetch_assoc($res);

    unlink($roeess['post_thumbnail']);

$sql = "DELETE FROM `dreamart_posts` WHERE post_id= $id";
   
    $query = mysqli_query($conn,$sql);
  




?>