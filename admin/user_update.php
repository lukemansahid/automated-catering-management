<?php
include('../includes/dbcon.php');

 if (isset($_POST['update']))
 { 
	 $id = $_POST['id'];
	 $firstname = $_POST['firstname'];
     $lastname = $_POST['lastname'];
	 $username = $_POST['username'];
	 $password = $_POST['password'];
	 $status = $_POST['status'];
     $userRole = $_POST['userRole'];
	 
	 
	 mysqli_query($con,"UPDATE users SET first_name='$firstname',last_name='$lastname',username='$username',password='$password',status='$status', user_role='$userRole' where user_id='$id'")
	 or die(mysqli_error($con)); 

		echo "<script type='text/javascript'>alert('Successfully updated user details!');</script>";
		echo "<script>document.location='user.php'</script>";
	
} 

