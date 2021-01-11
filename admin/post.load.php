<?php
include("inc/dreamart.db.php");

$sql =  "SELECT * FROM dreamart_posts";
$run = mysqli_query($conn,$sql) or die("somthing went worng with query.");
$result="";
if(mysqli_num_rows($run) > 0){

    
  $result ='<tr>';
  while ($row = mysqli_fetch_assoc($run)) {

$result .="<tr> <td>{$row['post_id']}</td> <td>{$row['post_title']} </td> <td>{$row['post_author']} </td> <td>{$row['post_date']} </td>
 <td><a herf='' class='btn btn-outline-warning edit-button' data-edit='{$row["post_id"]}'><i class='fas fa-edit'></i></a></td>
<td><a herf='' class='btn btn-outline-danger delete-button' data-delete='{$row["post_id"]}'> <i class='fas fa-trash-alt'></i></a></td> </tr>";

    
} 
 $result .= '</tr>';

mysqli_close($conn);

echo $result;
 
}else{
 echo "no record found";
}
?>