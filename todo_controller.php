<?php
  require_once('database_functions.php');
  $user_id = filter_input(INPUT_POST, 'user_id');
  $todo_item = filter_input(INPUT_POST, 'todo_item');
  addTodoForGivenUser($user_id,$todo_item);
  $user = getUserForGivenId($user_id);
  include('todo_list.php');
?>
