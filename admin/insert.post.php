<?php
include("inc/header.php");


if(isset($_POST['post_title']) || isset($_POST['category']) || isset($_POST['content'])){
$title = $_POST['post_title'];
$category = $_POST['category'];
$content = $_POST['content'];
$date = date("d M, Y");
$author = $_SESSION['user'];

if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['file']['tmp_name'])) {
$sourcePath = $_FILES['file']['tmp_name'];
$targetPath = "postimg/".$_FILES['file']['name'];
if(move_uploaded_file($sourcePath,$targetPath)) {

  $sql = "INSERT INTO `dreamart_posts`(`post_title`, `post_category`, `post_description`, `post_author`, `post_date`, `post_thumbnail`) 
  VALUES ('{$title}','{$category}','{$content}', '{$author}','{$date}', '{$targetPath}')";
  $run = mysqli_query($conn,$sql) or die("query failed ");

}
}
}
}

?>