<?php session_start();

if(isset($_POST['login'])) {
    include('../includes/dbcon.php');

$user_unsafe=$_POST['username'];
$pass_unsafe=$_POST['password'];

    $user = mysqli_real_escape_string($con,$user_unsafe);
    $pass = mysqli_real_escape_string($con,$pass_unsafe);


      if (empty($user)|| empty($pass)){
          header("Location:../mylogin.php?login=empty");
          exit();
      }else{
          $sql = "SELECT * FROM users WHERE username = ?";
          $stmt = mysqli_stmt_init($con);
          if (!mysqli_stmt_prepare($stmt,$sql)){
              header("Location:../mylogin.php?login=sqlerror");
              exit();
          }else{
              mysqli_stmt_bind_param($stmt,"s",$user);
              mysqli_stmt_execute($stmt);
              $result = mysqli_stmt_get_result($stmt);
              if ($row = mysqli_fetch_assoc($result)){
                 $passCheck = password_verify($pass,$row['password']);
                 if ($passCheck == false){
                     header("Location:../mylogin.php?login=wrongpass");
                     exit();
                 }elseif ($passCheck == true){
                     session_start();
                     $_SESSION['id'] = $row['user_id'];
                     $_SESSION['username'] = $row['username'];
                     $_SESSION['status'] = $row['status'];
                     $_SESSION['userRole']= $row['user_role'];

                     if ($_SESSION['userRole'] =='admin' && $_SESSION['status']=='active'){
                         header("Location: dashboard.php");
                         exit();
                     }elseif($_SESSION['userRole'] =='user' && $_SESSION['status']=='active'){
                         header("Location: ../userdashboard.php" );
                         exit();
                     }else{
                         header("Location:../mylogin.php?login=inactive");
                         exit();
                     }

                 }else{
                     header("Location:../mylogin.php?login=wrongpass");
                     exit();
                 }

              }else{
                  header("Location:../mylogin.php?login=noUser");
                  exit();
              }
          }
      }

//$query=mysqli_query($con,"select * from user where username='$user' and password='$pass'")or die(mysqli_error($con));
//		$row=mysqli_fetch_array($query);
//           $id=$row['user_id'];
//          /*  $first=$row['admin_first'];
//           $last=$row['admin_last']; */
//           $counter=mysqli_num_rows($query);
//		  	if ($counter == 0) {
//				  echo "<script type='text/javascript'>alert('Invalid Username or Password!');
//				  document.location='signup.php'</script>";
//			  } else {
//				  $_SESSION['id']=$id;
//				  /* $_SESSION['name']=$first." ".$last; */
//			  	echo "<script type='text/javascript'>document.location='dashboard.php'</script>";
//			  }

}
?>