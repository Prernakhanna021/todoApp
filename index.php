<html>
<body>
  <form action = "sign_in_controller.php" method="post">
    <strong>Email</strong>
    <input type = "email" name = "user_email" placeholder="Enter a valid email"><br>
    <strong>Password</strong>
    <input type = "password" name = "password"><br>
    <input type = "submit" value="Login">
  </form>
  <p>New User? <a href="sign_up.php">Sign Up</a></p>
  <br><br>
  <?php
    if(isset($sign_in_error)){
      echo $sign_in_error;
    }
  ?>
</body>
</html>
