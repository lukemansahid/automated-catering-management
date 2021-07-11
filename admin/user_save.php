<?php 

if (isset($_POST['submit'])){
    include_once ('../includes/dbcon.php');

    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $username = $_POST['username'];
    $status = 'active';
    $userRole = 'user';

    if (empty($firstname)|| empty($lastname)|| empty($password)|| empty($confirmPassword)|| empty($username)){
        header("Location:../signup.php?signup=empty&first=$firstname&last=$lastname&username=$username");
        exit();
    }elseif (!preg_match("/^[a-zA-Z0-9]*/",$username) || !preg_match("/^[a-zA-Z]*/",$firstname) || !preg_match("/^[a-zA-Z]*/",$lastname)){
        header("Location:../signup.php?signup=char");
        exit();
    }elseif ($password !== $confirmPassword){
        header("Location:../signup.php?signup=pwdMatch&first=$firstname&last=$lastname&username=$username");
        exit();
    }else{
       $getUser = "SELECT username FROM users WHERE username = ?";
       $stmt = mysqli_stmt_init($con);
           if (!mysqli_stmt_prepare($stmt,$getUser)){
               header("Location:../signup.php?signup=sqlerror");
               exit();
           }else{
               mysqli_stmt_bind_param($stmt,"s",$username);
               mysqli_stmt_execute($stmt);
               mysqli_stmt_store_result($stmt);
               $rowCount = mysqli_stmt_num_rows($stmt);
                   if ($rowCount > 0){
                       header("Location:../signup.php?signup=userExist&first=$firstname&last=$lastname");
                       exit();
                   }else{
                       $sql = "INSERT INTO users(first_name,last_name,username,password,status,user_role) VALUES(?,?,?,?,?,?)";
                       $stmt = mysqli_stmt_init($con);
                       if (!mysqli_stmt_prepare($stmt,$sql)){
                           header("Location:../signup.php?signup=sqlerror");
                           exit();
                       }else{
                           $hasPwd = password_hash($password,PASSWORD_DEFAULT);
                           mysqli_stmt_bind_param($stmt,"ssssss",$firstname,$lastname,$username,$hasPwd,$status,$userRole);
                           mysqli_stmt_execute($stmt);
                           header("Location:../signup.php?signup=success");
                           exit();
                       }
                   }
           }
    }

}
//$sql = "INSERT INTO users(first_name,last_name,username,password,status,user_role) VALUES('$firstname','$lastname','$username','$password','$status', '$userRole')";
//		mysqli_query($con,$sql)or die(mysqli_error());
//
//			echo "<script type='text/javascript'>alert('Successfully added new user!');</script>";
//
//			if (!$userRole =='user'){
//			echo "<script>document.location='user.php'</script>";
//            }else{
//                echo "<script>document.location='../index.php'</script>";
//            }
	
?>