<?php $page='posts';
include("inc/header.php");
if(!isset($_SESSION['user'])){
    header("Location:index.php");
}
?>
<div class="d-flex" id="wrapper">

<!-- Sidebar -->
<?php include("inc/admin.navbar.php");?>
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <button class="btn btn-danger" id="menu-toggle">&#9780;</button>&nbsp;&nbsp;
    <a class="navbar-brand" href=""><?php echo $page;?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-envelope"></i><span class="badge bg-danger">0</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-bell"></i><span class="badge bg-danger">0</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-comments"></i><span class="badge bg-danger">0</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
              Welcome <span style="color:#ff4646; text-transform:uppercase;"><?php echo $_SESSION['user'];?></span>
          </a>
        </li>
        </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-danger" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

  <div class="container-fluid">
  <div class="row mt-4">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        total posts</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">400</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-database fa-2x text-primary"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Annual) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Total categories</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">15,000</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-user fa-2x text-info"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tasks Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                    post author
                        </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">15,000</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-users fa-2x text-danger"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Earning (per month)</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">$1800</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-warning"></i>
                </div>
            </div>
        </div>
    </div>
</div>
</div><!-- end row -->

<div class="row">
  <div class="col-md-10 offset-md-1">
  
  </div>
</div>
<div class="row">
<div class="col-md-10 offset-md-1">
<div class="card">
<div class="card-header">
<div class="row d-flex align-itemes-center">
<div class="col-md-10">
<div class="text-center">
<div class="h6 mt-2">All Posts</div>
</div>
</div>
<div class="col-md-2">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add
</button></div>
</div>
</div>
<div class="card-body">
<table class="table table-bordered">
<thead>
    <tr>
      <th scope="col">SR</th>
      <th scope="col">Title</th>
      <th scope="col">Author</th>
      <th scope="col">Date</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody id="table-data">
  
  
  </tbody>
</table>
</div>
</div>
</div>
</div><!-- end table row -->


    
  </div><!-- end container -->
</div>
<!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<?php include("inc/footer.php");?>

<script>
$(document).ready(function(){

function loadpost(){
  $.ajax({
    url : "post.load.php",
    type : "POST",
    success : function(data){
      $("#table-data").html(data);
    }

  });
}
loadpost();

$("#submit-form").on('submit', function(e){
  e.preventDefault();

var form_data = new FormData(this);

$.ajax({
url : "insert.post.php",
type : "POST",
data: form_data,
contentType: false,
processData : false,
success : function(data){
$("#submit-form").trigger("reset");
$("#response").html(data);
loadpost();
 
  
}
});


});

$(document).on("click",".delete-button", function(){
var post_id = $(this).data("delete");


 $.ajax({
 url: "delete.post.php",
 type: "POST",
 data: {id: post_id},
 success : function(data){
  loadpost();
 } 
})
});

});

</script> 

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add post</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="card">
  <div class="card-body">
  <form  id="submit-form" autocomplete="off">
        <div class="row mb-3">
        <div class="col-md-6">
        <input type="text" class="form-control" placeholder="Title" id="postTitle" name="post_title" required>
        </div>
        <div class="col-md-6 my-2">
        <!-- <input type="text" class="form-control" placeholder="category" id="postCategory" name="category" required> -->
        <select class="form-select"  type="text" name="category" required>
          <option disable>choose ....</option>
          <option>HTML Tutorials</option>
          <option>CSS Tutorials</option>
          <option>JS Tutorials</option>
          <option>PHP Tutorials</option>
        </select>
        </div>
        </div><!-- end form -row -->

        <div class="row mb-3">
        <div class="col-md-12">
        <input type="file" name="file" class="form-control" id="postThumb" required>
        </div>
        </div><!-- end form -row -->
        <div class="row mb-3">
        <div class="col-md-12">
        <textarea name="content" id="text_area" cols="30" rows="10" class="form-control"  required></textarea>
        </div>
        </div>
        <div class="text-center">
        <button type="submit" name="submit"  id="submit" class="btn btn-danger w-50">Add</button>
        </div>
        </form>
        <div id="response"></div>
  </div>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
