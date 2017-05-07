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
    include('todo_list.php');
  }else{
    include('sign_up_error.php');
  }
?>
