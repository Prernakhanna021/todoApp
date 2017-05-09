<?php include 'header.php'; ?>
    <form action = "sign_up_controller.php" method="post">
      <strong>First name</strong><br>
      <input type = "text" name = "first_name"><br><br>
      <strong>Last name</strong><br>
      <input type = "text" name = "last_name"><br><br>
      <strong>Email</strong><br>
      <input type = "email" name = "user_email"><br><br>
      <strong>Password</strong><br>
      <input type = "password" name = "password"><br><br>
      <strong>Phone Number(xxx-xxx-xxxx)</strong><br>
      <input type="tel" pattern="^\d{3}-\d{3}-\d{4}$" name = "user_phone"><br><br>
      <strong>Birthday</strong><br>
      <input type="Date" name = "user_birthday"><br><br>
      <strong>Gender</strong><br>
      <input type="radio" name="gender" value="M" checked> Male
      <input type="radio" name="gender" value="F"> Female
      <br><br>
      <input type = "submit" value="Submit">
    </form>
    <br><br>
      <?php
        if(isset($sign_up_error)){
          echo $sign_up_error;
        }
      ?>
<?php include 'footer.php'; ?>
