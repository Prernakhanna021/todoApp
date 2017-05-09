<?php include 'header.php'; ?>
  <br><br>
  <form action = "sign_in_controller.php" method="post">
    <strong>Email</strong><br>
    <input type = "email" name = "user_email"><br><br>
    <strong>Password</strong><br>
    <input type = "password" name = "password"><br><br>
    <input style="align:center" type = "submit" value="Login">
  </form>
  <br><br>
  <p>New User ? <a href="sign_up_view.php">Sign Up</a></p>
  <br><br>
  <?php
    if(isset($sign_in_error)){
      echo $sign_in_error;
    }
  ?>
<?php include 'footer.php'; ?>
