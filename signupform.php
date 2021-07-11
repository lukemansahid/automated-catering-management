
<!--start form-->
<form class="form-horizontal" method="post" action="admin/user_save.php">

    <!-- Title -->
    <div class="form-group">
        <div class="col-lg-4">
            <?php  if (isset($_GET['first'])){
                $first = $_GET['first'];
                echo '<input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name of User" value="'.$first.'">';
            }else{
                echo '<input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name of User">';
            } ?>
        </div>
    </div>

    <!-- Title -->
    <div class="form-group">
        <div class="col-lg-4">
            <?php  if (isset($_GET['last'])){
                $last = $_GET['last'];
                echo '<input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name of User" value="'.$last.'">';
            }else{
                echo '<input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name of User">';
            } ?>
        </div>
    </div>
    <!-- Title -->
    <div class="form-group">
        <div class="col-lg-4">
            <?php  if (isset($_GET['username'])){
                $uname = $_GET['username'];
                echo '<input type="text" class="form-control" name="username" id="username"  placeholder="Write Username" value="'.$uname.'">';
            }else{
                echo '<input type="text" class="form-control" name="username" id="username"  placeholder="Write Username">';
            } ?>
        </div>
    </div>
    <!-- Title -->
    <div class="form-group">
        <div class="col-lg-4">
            <input type="password" class="form-control" name="password" id="password" placeholder="Write password">
        </div>
    </div>

    <!-- Title -->
    <div class="form-group">
        <div class="col-lg-4">
            <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="  confirm Password">
        </div>
    </div>

    <!-- Buttons -->
    <div class="form-group">
        <!-- Buttons -->
        <div class="col-lg-offset-2 col-lg-2">
            <button type="submit" name="submit" class="btn btn-sm btn-primary">Sign Up</button>
            <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
        </div>
    </div>
</form>
<!--end form-->
<?php
if (!isset($_GET['error'])){
    exit();
}else{
    $checkError = $_GET['error'];
    if ($checkError =="empty"){
        echo "<h1 style='color: red '> You did not fill in all fields!</h1>";
        exit();
    }elseif ($checkError =="char"){
        echo "<h1 style='color: red '> You used Invalid Characters!</h1>";
        exit();
    }elseif ($checkError =="pwdMatch"){
        echo "<h1 style='color: red '> Your password does not match!</h1>";
        exit();
    }elseif ($checkError =="userExist") {
        echo "<h1 style='color: red '> User already taken!</h1>";
        exit();
    }elseif ($checkError =="sqlerror") {
        echo "<h1 style='color: red '> Your sql query failed!</h1>";
        exit();
    }elseif ($checkError =="success") {
        echo "<h1 style='color: green '> Successfully added new user!</h1>";
        exit();
    }
}
?>
