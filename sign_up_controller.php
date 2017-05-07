<?php
  require_once('database_connection.php');
  $user_email = filter_input(INPUT_POST, 'user_email');
  $queryname = 'SELECT COUNT(*) as user_present FROM users WHERE email = :user_email';
  $statement = $db->prepare($queryname);
  $statement->bindvalue(':user_email',$user_email);
  $statement->execute();
  $user_present = $statement->fetch();
  $statement->closeCursor();

  if($user_present['user_present'] == 0){
    //make entry into the database
    include('todo_list.php');
  }else{
    $sign_up_error = 'Email already exists in system. Please try a new one';
    include('sign_up.php');
  }
?>
