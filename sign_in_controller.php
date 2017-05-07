<?php
  require_once('database_functions.php');
  $user_email=filter_input(INPUT_POST, 'user_email');
  $password=filter_input(INPUT_POST, 'password');

  $user_present = getUserForGivenEmail($user_email);

  if($user_present == null || count($user_present) == 0){
    $sign_in_error = "Email address does not exist";
    include('index.php');
  }else if($user_present['password'] != $password){
    $sign_in_error = "Incorrect password entered";
    include('index.php');
  }else{
    include('todo_list.php');
  }
?>
