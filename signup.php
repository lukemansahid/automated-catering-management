<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>
    <link href="css/myStyle.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="registration-form">

    <h1>Sign Up Form</h1>
    <form method="post" action="admin/crud/user_save.php">
        <p>First Name:</p>
        <?php  if (isset($_GET['first'])){
            $first = $_GET['first'];
            echo '<input type="text" name="firstname" placeholder="First Name of User" value="'.$first.'">';
        }else{
            echo '<input type="text" name="firstname" placeholder="First Name of User">';
        } ?>

        <p>Last Name:</p>

        <?php  if (isset($_GET['last'])){
            $last = $_GET['last'];
            echo '<input type="text" name="lastname"  placeholder="Last Name of User" value="'.$last.'">';
        }else{
            echo '<input type="text"  name="lastname"  placeholder="Last Name of User">';
        } ?>

        <p>Username:</p>
        <?php  if (isset($_GET['username'])){
            $uname = $_GET['username'];
            echo '<input type="text" name="username"    placeholder="Write Username" value="'.$uname.'">';
        }else{
            echo '<input type="text" name="username"    placeholder="Write Username">';
        } ?>

        <p>Password:</p>
        <input type="password"  name="password"  placeholder="Write password">

        <p>Confirm Password:</p>
        <input type="password"  name="confirmPassword"  placeholder="Write confirm Password">

        <button type="submit" name="submit">Sign Up</button> <p><a href="mylo"></a></p>


        <?php
        if (!isset($_GET['signup'])){
            echo "<h3> Already have an account! <a href='mylogin.php' style='color: royalblue'>Login here..</a></h3>";
            exit();
        } else{
            $checkError = $_GET['signup'];
            if ($checkError =="empty"){
                echo "<h3 style='color: red '> You did not fill in all fields!</h3>";
                exit();
            }elseif ($checkError =="char"){
                echo "<h3 style='color: red '> You used Invalid Characters!</h3>";
                exit();
            }elseif ($checkError =="pwdMatch"){
                echo "<h3 style='color: red '> Your password does not match!</h3>";
                exit();
            }elseif ($checkError =="userExist") {
                echo "<h3 style='color: red '> User already taken!</h3>";
                exit();
            }elseif ($checkError =="sqlerror") {
                echo "<h3 style='color: red '> Your sql query failed!</h3>";
                exit();
            }elseif ($checkError =="success") {
                echo "<h3 style='color: green '> Successfully added new user! <a href='mylogin.php'>Login here..</a></h3>";
                exit();
            }
        }
        ?>
    </form>

</div>
<!--End of registration form-->

</body>
</html>

