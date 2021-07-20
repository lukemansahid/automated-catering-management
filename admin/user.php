<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../mylogin.php');
endif;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>Users - </title>
  <?php include('../includes/links.php');?>
  
</head>

<body>

<div class="navbar navbar-fixed-top bs-docs-nav" role="banner">
  
    <div class="conjtainer">
      <!-- Menu button for smallar screens -->
      <div class="navbar-header">
      <button class="navbar-toggle btn-navbar" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
      <span>Menu</span>
      </button>
    </div>
      
      <?php include('../includes/topbar.php');?>

    </div>
</div>

<!-- Main content starts -->

<div class="content" style="margin-top:10px">

    <!-- Sidebar -->
    <?php include('../includes/sidebar.php');?>

    <!-- Sidebar ends -->

        <!-- Main bar -->
    <div class="mainbar">
      
      <!-- Page heading -->
      <div class="page-head">
        <h2 class="pull-left"><i class="fa fa-home"></i> Dashboard</h2>

        <!-- Breadcrumb -->
        <div class="bread-crumb pull-right">
          <a href="dashboard.php"><i class="fa fa-home"></i> Home</a>
          <!-- Divider -->
          <span class="divider">/</span> 
          <a href="#" class="bread-current">Maintenance</a>
          <span class="divider">/</span> 
          <a href="#" class="bread-current">User</a>
        </div>

        <div class="clearfix"></div>

      </div>
      <!-- Page heading ends -->

       <!-- Matter -->

      <div class="matter">
        <div class="container">
          <div class="row">
            <div class="col-md-12">

              <div class="widget">
                <div class="widget-head">
                  <div class="pull-left"> Users
                    <a href="#addModal" class="btn btn-info" data-toggle="modal">Add New User</a>
                  </div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
                <div class="widget-content">
                  <div class="padd">
                    
              <!-- Table Page -->
              <div class="page-tables">
                <!-- Table -->
                <div class="table-responsive">
                  <table cellpadding="0" cellspacing="0" border="0" id="data-table" width="100%">
                    <thead>
                      <tr>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Status</th>
                        <th>Role</th>
                          <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
<?php
include('../includes/dbcon.php');

    $sql = "select * from users order by first_name";
    $result=mysqli_query($con,$sql)or die(mysqli_error());
    $rowCount = mysqli_num_rows($result);

    if ($rowCount > 0){
      while ($row=mysqli_fetch_array($result)){
        $id=$row['user_id'];
        $firstname=$row['first_name'];
        $lastname=$row['last_name'];
        $username=$row['username'];
        $status=$row['status'];
        $password=$row['password'];
        $userRole=$row['user_role'];

        if ($status=="active") $flag="success";else $flag="danger";
?>                      
                      <tr>
                        <td><?php echo $firstname ." ".$lastname;?></td>
                        <td><?php echo $username;?></td>
                        <td><span class="label label-<?php echo $flag;?>"><?php echo $status;?></span></td>
                          <td><?php echo $userRole ;?></td>
                        <td>
                            <div class="col-md-4">
                              <a href="#myModal" class="btn btn-info" data-target="#update<?php echo $id;?>" data-toggle="modal">
                                <i class="fa fa-pencil"></i>
                              </a>
                                <a href="#delete" class="btn btn-danger" data-target="#delete<?php echo $id;?>" data-toggle="modal">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </td>
                      </tr>

<!-- Modal -->
<div id="update<?php echo $id;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title">Update User Details</h4>
            </div>
            <div class="modal-body" style="height:200px">
              <!--start form-->
              <form class="form-horizontal" method="post" action="crud/user_update.php">
                  <!-- Title -->
                  <div class="form-group">
                      <label class="control-label col-lg-2" for="firstname">First Name</label>
                      <div class="col-lg-10"> 
                        <input type="hidden" class="form-control" name="id" value="<?php echo $id;?>">
                        <input type="text" class="form-control" name="fistname" id="title" placeholder="Write First Name of User" value="<?php echo $firstname;?>">
                      </div>
                  </div>

                  <!-- Title -->
                  <div class="form-group">
                      <label class="control-label col-lg-2" for="lastname">Last Name</label>
                      <div class="col-lg-10">
                          <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Write Full Name of User" value="<?php echo $lastname;?>">
                      </div>
                  </div>
                  <!-- Title -->
                  <div class="form-group">
                      <label class="control-label col-lg-2" for="username">Username</label>
                      <div class="col-lg-10"> 
                        <input type="text" class="form-control" name="username" id="username" value="<?php echo $username;?>" readonly>
                      </div>
                  </div> 
                  <!-- Title -->
                  <div class="form-group">
                      <label class="control-label col-lg-2" for="password">Password</label>
                      <div class="col-lg-10"> 
                        <input type="password" class="form-control" name="password" id="password" placeholder="Write password" value="<?php echo $password;?>">
                      </div>
                  </div> 
                  <!-- Title -->
                  <div class="form-group">
                      <label class="control-label col-lg-2" for="password">Status</label>
                      <div class="col-lg-10"> 
                        <select class="form-control" id="exampleSelect1" name="status">
                                <option><?php echo $status;?></option>
                                <option>active</option>
                                <option>inactive</option>
                        </select>
                      </div>
                  </div>
                  <!-- Title -->
                  <div class="form-group">
                      <label class="control-label col-lg-2" for="password">Role</label>
                      <div class="col-lg-10">
                          <select class="form-control" id="exampleSelect1" name="userRole">
                              <option><?php echo $userRole;?></option>
                              <option>Staff</option>
                              <option>Admin</option>
                              <option>User</option>
                          </select>
                      </div>
                  </div>

                  <br />

                  <!-- Buttons -->
                  <div class="form-group">
                      <!-- Buttons -->
                      <div class="col-lg-offset-2 col-lg-6">
                        <button type="submit" class="btn btn-sm btn-primary" name="update">Update</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
                       </div>
                  </div>
              </form>
              <!--end form-->
            </div>
           
        </div><!--modal content-->
    </div><!--modal dialog-->
</div>
<!--end modal-->

<!-- Modal -->
          <div id="delete<?php echo $id;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                          <h4 class="modal-title">Delete User</h4>
                      </div>
                      <div class="modal-body" style="height:140px">
                          <!--start form-->
                          <form class="form-horizontal" method="post">
                              <input type="hidden" class="form-control" name="id" value="<?php echo $id;?>">
                              <div class="alert alert-danger">
                                  Are you sure you want to delete the User <?php echo $firstname ." ".$lastname;?>?
                              </div>
                              <!-- Buttons -->
                              <div class="form-group">
                                  <!-- Buttons -->
                                  <button type="submit" class="btn btn-sm btn-primary" name="del">Delete</button>
                                  <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>

                              </div>
                          </form>
                          <!--end form-->
                      </div>

                  </div><!--modal content-->
              </div><!--modal dialog-->
          </div>
          <!--end modal-->


      <?php } } ?>
                    </tbody>
                  </table>
                  <div class="clearfix"></div>
                </div>
                </div>
              </div>

          
                  </div>

                </div>
              </div>  
              
            </div>
          </div>
        </div>
      </div>

    <!-- Matter ends -->
</div>

   <!-- Mainbar ends -->
   <div class="clearfix"></div>

</div>
<!-- Content ends -->

<!-- Footer starts -->
<?php include('../includes/footer.php');?>
<!-- Footer ends -->

<!-- Modal -->
<div id="addModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title">Add New User</h4>
            </div>
            <div class="modal-body">
              <!--start form-->
              <form class="form-horizontal" method="post" action="crud/user_save.php">
                  <!-- Title -->
                  <div class="form-group">
                      <label class="control-label col-lg-2" for="title">Full Name</label>
                      <div class="col-lg-8"> 
                        <input type="text" class="form-control" name="name" id="title" placeholder="Write Full Name of User" required>
                      </div>
                  </div> 
                  <!-- Title -->
                  <div class="form-group">
                      <label class="control-label col-lg-2" for="username">Username</label>
                      <div class="col-lg-8"> 
                        <input type="text" class="form-control" name="username" value="chimney_admin" placeholder="Write Username" required>
                      </div>
                  </div> 
                  <!-- Title -->
                  <div class="form-group">
                      <label class="control-label col-lg-2" for="password">Password</label>
                      <div class="col-lg-8"> 
                        <input type="password" class="form-control" name="password" id="password" placeholder="Write password" required>
                      </div>
                  </div> 
                                                    
                  <!-- Buttons -->
                  <div class="form-group">
                      <!-- Buttons -->
                      <div class="col-lg-offset-2 col-lg-6">
                        <button type="submit" class="btn btn-sm btn-primary">Save</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
                       </div>
                  </div>
              </form>
              <!--end form-->
            </div>
            
        </div><!--modal content-->
    </div><!--modal dialog-->
</div>
<!--end modal-->

<?php
if (isset($_POST['del']))
{
    $id=$_POST['id'];

    // sending query
    mysqli_query($con,"delete from users WHERE user_id='$id'")
    or die(mysqli_error());
    echo "<script>document.location='user.php'</script>";
}
?>
<!-- JS -->
<?php include('../includes/js.php');?>  

</body>
</html>