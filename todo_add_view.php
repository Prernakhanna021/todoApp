<?php include 'header.php'; ?>
  <br><br>
  <form action = "todo_add_controller.php" method="post">
    <strong>Due date</strong><br>
    <input type = "Date" name = "due_date"><br><br>
    <strong>Due Time</strong><br>
    <input type = "time" name = "due_time"><br><br>
    <strong>ToDo</strong><br>
    <input type = "text" name = "todo_item"><br><br>
    <input type = "hidden" name = "user_id" value="<?php echo $user_id; ?>">
    <input type = "submit" value="Add">
  </form>
  <br><br>
<?php include 'footer.php'; ?>
