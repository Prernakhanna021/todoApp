<?php
  require_once('database_functions.php');
  $completed_todo_list = getTodoListForGivenUser($user['id'],"C");
  $incomplete_todo_list = getTodoListForGivenUser($user['id'],"N");
?>
<?php include 'header.php'; ?>
      <?php echo $user['first_name']." ".$user['last_name'];?>
      <br>
      <a style = "padding:10px" href="index.php">logout</a>

    <br><br>
    <h4>To-do items</h3>

    <table>
        <?php foreach($incomplete_todo_list as $todo) : ?>
        <tr>
            <td>
              <form action="todo_list_controller.php" method="post">
                <input type="text" name ="todo_item" value = "<?php echo $todo['todo_item'];?>" readonly>
                <input type="date" name ="due_date" value = "<?php echo $todo['due_date'];?>">
                <input type="time" name ="due_time" value = "<?php echo $todo['due_time'];?>">
                <input type="hidden" name="todo_id" value="<?php echo $todo['id']; ?>">
                <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
                <input name="actionBtn" type="submit" value="edit">
                <input name="actionBtn" type="submit" value="delete">
                <input name="actionBtn" type="submit" value="completed">
              </form>
            </td>
        </tr>
        </tr>
        <?php endforeach; ?>
    </table>

    <br><br>
    <h4>Completed To-do items</h3>
    <table>
          <?php foreach($completed_todo_list as $todo) : ?>
          <tr>
              <td>
                <form action="todo_list_controller.php" method="post">
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
    <br><br><br>
    <form action="todo_list_controller.php" method="post">
      <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
      <input name="actionBtn" type="submit" value="Add ToDo">
    </form>
<?php include 'footer.php'; ?>
