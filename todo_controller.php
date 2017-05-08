<?php
  require_once('database_functions.php');
  $action = filter_input(INPUT_POST, 'actionBtn');
  $user_id = filter_input(INPUT_POST, 'user_id');
  $todo_item = filter_input(INPUT_POST, 'todo_item');
  $todo_item = filter_input(INPUT_POST, 'todo_item');
  $todo_id = filter_input(INPUT_POST, 'todo_id');
  $user = getUserForGivenId($user_id);

  if($action == "add"){
    addTodoForGivenUser($user_id,$todo_item);
  }elseif ($action == "edit") {
    updateToDoItem($todo_id,$todo_item);
  }elseif ($action == "delete") {
    deleteTodo($todo_id);
  }
  include('todo_list.php');
?>
