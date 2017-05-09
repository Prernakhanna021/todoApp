<?php
  require_once('database_functions.php');
  $todo = getTodoForGivenToDoId($todo_id);
?>
<?php include 'header.php'; ?>
  <br><br>
  <form action = "todo_edit_controller.php" method="post">
    <strong>ToDo</strong><br>
    <input type = "text" name = "todo_item" value = "<?php echo $todo['todo_item'];?>"> <br><br>
    <strong>Due date</strong><br>
    <input type = "date" name = "due_date" value = "<?php echo $todo['due_date'];?>"><br><br>
    <strong>Due Time</strong><br>
    <input type = "time" name = "due_time" value = "<?php echo $todo['due_time'];?>"><br><br>
    <input type = "hidden" name = "todo_id" value="<?php echo $todo['id']; ?>">
    <input type = "hidden" name = "user_id" value="<?php echo $user_id; ?>">
    <input type = "submit" value="Edit">
  </form>
  <br><br>
<?php include 'footer.php'; ?>
