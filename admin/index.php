<?php include("inc/dreamart.db.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel=" stylesheet" href="css/login.style.css">
    <title>Document</title>
</head>
<body class="bg-body">
 <div class="container">
     <div class="row">
         <div class="col-md-4 offset-md-4">
             <div class="card p-3 border-0" style="border-radius: 10px; margin-top:100px">
                 <div class="card-body">
                 <?php
             
             if(isset($_POST['loginBtn'])){
                 $login_username = mysqli_real_escape_string($conn,$_POST['username']);
                  $login_password = mysqli_real_escape_string($conn,$_POST['userpassword']);
                 
                 
 
             $select_query= "SELECT * FROM dreamart_admin WHERE username = '{$login_username}' AND user_password = '{$login_password}'";
             $select_query_fire = mysqli_query($conn,$select_query) or die("query failed");
             if($select_query_fire){
                 header("location: dreamart.dashboard.php");
                 $_SESSION['user']=$login_username;
             }else{
                 echo "<div class='alert alert-danger my-3'> input correct username and password</div>";
             }
         }
               ?>
                     
                         <div class="h2 mb-5 text-center">Login Here</div>
                         <form action="<?php $_SERVER['PHP_SELF'];?>" autocomplete="off" method="POST">
                             <div class="form-group ">
                                 <label for="username" class="text-left login_icon"><i class="fas fa-lock text-light"></i></label>
                                 <input type="text" class="form-control mb-3" id="userName" name="username" placeholder="User Name" required>
                                </div>
                                <div class="form-group">
                                 <label for="username" class="text-left login_icon"><i class="fas fa-key text-light"></i></label>
                                 <input type="password" class="form-control" id="userPassword" name="userpassword" placeholder="*******" required>
                                </div>
                               <div class="text-center"> <button class="btn btn-login w-50" type="submit" id="loginBtn" name="loginBtn">Login</button></div>
                         </form>
                       
                     
                 </div>
             </div>
         </div>
     </div>
 </div>

 

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" integrity="sha512-F5QTlBqZlvuBEs9LQPqc1iZv2UMxcVXezbHzomzS6Df4MZMClge/8+gXrKw2fl5ysdk4rWjR0vKS7NNkfymaBQ==" crossorigin="anonymous"></script>
</body>
</html>


