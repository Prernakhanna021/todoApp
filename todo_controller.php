<?php
  require_once('database_functions.php');
  $action = filter_input(INPUT_POST, 'actionBtn');
  $user_id = filter_input(INPUT_POST, 'user_id');
  $todo_item = filter_input(INPUT_POST, 'todo_item');
  $user = getUserForGivenId($user_id);

  if($action == "add"){
    addTodoForGivenUser($user_id,$todo_item);
    include('todo_list.php');
  }elseif ($action == "edit") {
    $todo_item = filter_input(INPUT_POST, 'todo_item');
    $todo_id = filter_input(INPUT_POST, 'todo_id');
    updateToDoItem($todo_id,$todo_item);
    include('todo_list.php');
  }
?>
