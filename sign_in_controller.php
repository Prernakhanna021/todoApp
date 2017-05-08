<?php
  require_once('database_functions.php');
  $user_email=filter_input(INPUT_POST, 'user_email');
  $password=filter_input(INPUT_POST, 'password');

  $user = getUserForGivenEmail($user_email);

  if($user == null || count($user) == 0){
    $sign_in_error = "Email address does not exist";
    include('index.php');
  }else if($user['password'] != $password){
    $sign_in_error = "Incorrect password entered";
    include('index.php');
  }else{
    include('todo_list.php');
  }
?>
