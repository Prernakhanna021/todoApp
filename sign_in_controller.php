<?php
  require_once('database_connection.php');
  $user_email=filter_input(INPUT_POST, 'user_email');
  $password=filter_input(INPUT_POST, 'password');

  $queryname = 'SELECT * FROM users WHERE email = :user_email';
  $statement = $db->prepare($queryname);
  $statement->bindvalue(':user_email',$user_email);
  $statement->execute();
  $user_present = $statement->fetch();
  $statement->closeCursor();

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
