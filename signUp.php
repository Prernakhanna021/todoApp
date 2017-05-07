<html>
<body>
  <header><h1>Welcome to do list!!</h1></header>
<main>
    <form action = "todolist.php" method="post">
      <strong>First name</strong>
      <input type = "text" name = "first_name"><br>
      <strong>Last name</strong>
      <input type = "text" name = "last_name"><br>
      <strong>Email</strong>
      <input type = "email" name = "user_email" placeholder="Enter a valid email" required><br>
      <strong>Password</strong>
      <input type = "password" name = "password" required><br>
      <strong>Phone Number(format: xxxx-xxx-xxxx)</strong>
      <input type="tel" pattern="^\d{4}-\d{3}-\d{4}$" required ><br>
      <strong>Birthday</strong>
      <input type="Date" name = "user_birthday" required ><br>
      <strong>Gender</strong>
      <input type="radio" name="gender" value="male" checked> Male
      <input type="radio" name="gender" value="female"> Female
      <br>
      <input type = "submit" value="Submit">
    </form>
</main>
</body>
</html>
