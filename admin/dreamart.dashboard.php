<?php $page='dashboard';
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
    <a class="navbar-brand" href="#"><?php echo $page;?></a>
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
                        Database</div>
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
                        User</div>
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
                        Visitors (perday)</div>
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
<div class="card">
<div class="card-header text-center">Recent Posts</div>
<div class="card-body">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">SR</th>
      <th scope="col">Title</th>
      <th scope="col">Authro</th>
      <th scope="col">Date</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>post1</td>
      <td>admin</td>
      <td>20/10/20</td>
      <td><a herf="" class="btn btn-outline-warning"><i class="fas fa-edit"></i></a></td>
      <td><a herf="" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></a></td>
    </tr>
    
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