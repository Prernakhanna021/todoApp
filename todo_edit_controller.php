<?php
  require_once('database_functions.php');
  $due_date = filter_input(INPUT_POST, 'due_date');
  $due_time = filter_input(INPUT_POST, 'due_time');
  $todo_item = filter_input(INPUT_POST, 'todo_item');
  $todo_id = filter_input(INPUT_POST, 'todo_id');
  $user_id = filter_input(INPUT_POST, 'user_id');

  $user = getUserForGivenId($user_id);
  updateToDoWithAllFields($todo_id,$todo_item,$due_date,$due_time);
  include('todo_list_view.php');
?>
