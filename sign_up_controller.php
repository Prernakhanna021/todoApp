<?php
  require_once('database_functions.php');
  $user_email = filter_input(INPUT_POST, 'user_email');
  $user_present = getUserForGivenEmail($user_email);

  if($user_present == null || count($user_present) == 0){
    $first_name = filter_input(INPUT_POST, 'first_name');
    $last_name = filter_input(INPUT_POST, 'last_name');
    $password = filter_input(INPUT_POST, 'password');
    $phone_number = filter_input(INPUT_POST, 'user_phone');
    $birthday = filter_input(INPUT_POST, 'user_birthday');
    $gender = filter_input(INPUT_POST, 'gender');
    createNewUser($user_email,$first_name,$last_name,$password,$phone_number,$birthday,$gender);
    include('todo_list.php');
  }else{
    $sign_up_error = 'Email already exists in system. Please try a new one';
    include('sign_up.php');
  }
?>
