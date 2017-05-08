<?php
  require_once('database_functions.php');
  $completed_todo_list = getTodoListForGivenUser($user['id'],"C");
  $incomplete_todo_list = getTodoListForGivenUser($user['id'],"N");
?>
<html>
  <body>
    <h1>Welcome <?php echo $user['first_name']." ".$user['last_name'];?></h1>

    <br><br>
    <h5>To-do items</h5>
    <ul>
      <?php foreach($incomplete_todo_list as $todo) : ?>
      <li>
          <?php echo $todo['todo_item']; ?>
      </li>
      <?php endforeach; ?>
    </ul>

    <br><br>
    <h5>Completed To-do items</h5>
    <ul>
      <?php foreach($completed_todo_list as $todo) : ?>
      <li>
          <?php echo $todo['todo_item']; ?>
      </li>
      <?php endforeach; ?>
    </ul>

    <h2>Add Todo Item</h2>

    <form action="todo_controller.php" method="post">
      <label>Todo Item</label>
      <input type="text" name="todo_item"><br>
      <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
      <input type="submit" value="Add"><br>
    </form>

  </body>
</html>
