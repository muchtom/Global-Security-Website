<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="login.css" />  
</head>
<body>
<?php
    require('dbb.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: homee.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>

<div class="container">  
    <h1>Please Login</h1>  
    <form   class="form" method="post" name="login">  
     <div class="form-control">  
      <input type="text" name="username" required>  
      <label>Username</label>  
         </div>  
     <div class="form-control">  
      <input type="password"  name="password" required>  
      <label>Password</label>  
     </div>  
     <input type="submit" value="Login" name="submit" class="login-button" style=" width: 100%;
    height: 50px;  font-size: 16px;
    text-align: center;
    cursor: pointer;
    color: #fff;
    background: #55a1ff;
    border: 0;
    outline: 0;"/>  
     <p class="text">Don't have an account? <a href="registration.php">Register</a> </p>  
    </form>  
   </div>  
   <script src="script.js"></script>  

   
    <!-- <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="registration.php">New Registration</a></p>
  </form> -->
<?php
    }
?>
</body>
</html>