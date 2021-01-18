<?php
include("dist/includes/dreamart.db.php");

$sql =  "SELECT * FROM dreamart_posts";
$run = mysqli_query($conn,$sql) or die("somthing went worng with query.");
$result="";
if(mysqli_num_rows($run) > 0){

    
  $result ="<div class='card mb-4'>";
  while ($row = mysqli_fetch_assoc($run)) {
      

$result .="<img class='card-img-top' src='admin/{$row['post_thumbnail']}' alt='Card image cap'>
<div class='card-body'>
  <h2 class='card-title'>{$row['post_title']}</h2>
  <p class='card-text'>{$row['post_description']}?></p>
  <a href='#' class='btn btn-danger'>Read More &rarr;</a>
</div>
<div class='card-footer text-muted'>
  {$row['post_date']}
  <a href='#'>{$row['post_author']}</a>
</div>";


   
} 
$result .='</div>';

mysqli_close($conn);

echo $result;
 
}else{
 echo "no record found";
}
?>