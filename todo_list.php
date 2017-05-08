<?php
  require_once('database_functions.php');
  $completed_todo_list = getTodoListForGivenUser($user['id'],"C");
  $incomplete_todo_list = getTodoListForGivenUser($user['id'],"N");
?>
<html>
  <body>
    <h1>Welcome <?php echo $user['first_name']." ".$user['last_name'];?></h1>

    <br><br>
    <h3>To-do items</h3>

    <table>
          <tr>
            <th>ToDo Item</th>
            <th>&nbsp;</th>
          </tr>
          <?php foreach($incomplete_todo_list as $todo) : ?>
          <tr>
              <td>
                <form action="todo_controller.php" method="post">
                  <input type="text" name ="todo_item" value = "<?php echo $todo['todo_item'];?>">
                  <input type="hidden" name="todo_id" value="<?php echo $todo['id']; ?>">
                  <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
                  <input name="actionBtn" type="submit" value="edit">
                  <input name="actionBtn" type="submit" value="delete">
                </form>
              </td>
          </tr>
          </tr>
          <?php endforeach; ?>
    </table>

    <br><br>
    <h3>Completed To-do items</h3>
    <table>
          <tr>
            <th>ToDo Item</th>
            <th>&nbsp;</th>
          </tr>
          <?php foreach($completed_todo_list as $todo) : ?>
          <tr>
              <td>
                <form action="todo_controller.php" method="post">
                  <input type="text" name ="todo_item" value = "<?php echo $todo['todo_item'];?>">
                  <input type="hidden" name="todo_id" value="<?php echo $todo['id']; ?>">
                  <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
                  <input name="actionBtn" type="submit" value="edit">
                  <input name="actionBtn" type="submit" value="delete">
                </form>
              </td>
          </tr>
          </tr>
          <?php endforeach; ?>
    </table>

    <h2>Add Todo Item</h2>

    <form action="todo_controller.php" method="post">
      <label>Todo Item</label>
      <input type="text" name="todo_item"><br>
      <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
      <input name="actionBtn" type="submit" value="add">
    </form>

  </body>
</html>
