<html>
<body>
  <header><h1>Welcome to do list!!</h1></header>
    <form action = "sign_up_controller.php" method="post">
      <strong>First name</strong>
      <input type = "text" name = "first_name"><br>
      <strong>Last name</strong>
      <input type = "text" name = "last_name"><br>
      <strong>Email</strong>
      <input type = "email" name = "user_email" placeholder="Enter a valid email"><br>
      <strong>Password</strong>
      <input type = "password" name = "password"><br>
      <strong>Phone Number(format: xxx-xxx-xxxx)</strong>
      <input type="tel" pattern="^\d{3}-\d{3}-\d{4}$" name = "user_phone"><br>
      <strong>Birthday</strong>
      <input type="Date" name = "user_birthday"><br>
      <strong>Gender</strong>
      <input type="radio" name="gender" value="M" checked> Male
      <input type="radio" name="gender" value="F"> Female
      <br>
      <input type = "submit" value="Submit">
    </form>
    <br><br>
      <?php
        if(isset($sign_up_error)){
          echo $sign_up_error;
        }
      ?>
</body>
</html>
