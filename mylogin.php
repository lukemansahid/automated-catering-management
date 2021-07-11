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

    <h1>Login Form</h1>
    <form method="post" action="admin/login.php">

        <p>Username:</p>
        <input type="text" name="username" placeholder="Write Username">

        <p>Password:</p>
        <input type="password"  name="password" placeholder="Write password">

        <button type="submit" name="login">Login</button>  <p>Don't have account! <a href="signup.php" style="color: royalblue">Sign up</a></p>

        <?php
        if (!isset($_GET['login'])){
            exit();
        } else{
            $checkError = $_GET['login'];
            if ($checkError =="empty"){
                echo "<h3 style='color: red '> You did not fill in all fields!</h3>";
                exit();
            }elseif ($checkError =="wrongpass"){
                echo "<h3 style='color: red '> Wrong password!</h3>";
                exit();
            }elseif ($checkError =="inactive"){
                echo "<h3 style='color: red '> Your account is block!</h3>";
                exit();
            }elseif ($checkError =="noUser") {
                echo "<h3 style='color: red '> User not found!</h3>";
                exit();
            }elseif ($checkError =="sqlerror") {
                echo "<h3 style='color: red '> Your sql query failed!</h3>";
                exit();
            }
        }
        ?>
    </form>

</div>
<!--End of registration form-->

</body>
</html>

