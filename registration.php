<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="reg.css">
</head>
<body>
<?php
    require('dbb.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>


<div class="wrapper" style="background-image: url('img/sec2.png');">
<div class="inner">
<div class="image-holder">
<img src="img/s1.jpeg" alt="image">
</div>
<form  class="form" action="" method="post">
<h3>Registration Form</h3>
<div class="form-group">
</div>
<div class="form-wrapper">
<input type="text" name="username" placeholder="Username" class="form-control" required>
 
</div>
<div class="form-wrapper">
<input type="text" name="email" placeholder="Email Address" class="form-control" required>
 
</div>
<div class="form-wrapper">
<input type="password" name="password" placeholder="Password" class="form-control" required>
 
</div>
<div class="form-wrapper">
<input type="password" placeholder="Confirm Password" class="form-control" required>
</div>
<input  type="submit" name="submit" value="Register" class="login-button" style=" color: #fff;
    background: #55a1ff;
    border: 0;
    outline: 0;
    width: 100%;
    height: 50px;
    font-size: 16px;
    text-align: center;
    cursor: pointer;">
 
</form>
</div>
</div>
<?php
    }
?>
</body>
</html>
