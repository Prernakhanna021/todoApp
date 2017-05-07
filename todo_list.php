<?php
  require_once('database_functions.php');
  $completed_todo_list = getTodoListForGivenUser($user_present['id'],"C");
  $incomplete_todo_list = getTodoListForGivenUser($user_present['id'],"N");
?>
<html>
  <body>
    <h1>Welcome <?php echo $user_present['first_name']." ".$user_present['last_name'];?></h1>
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
  </body>
</html>
