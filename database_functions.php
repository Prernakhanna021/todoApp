<?php
  require_once('database_connection.php');

  function getUserForGivenEmail($user_email){
    global $db;
    $queryname = 'SELECT * FROM users WHERE email = :user_email';
    $statement = $db->prepare($queryname);
    $statement->bindvalue(':user_email',$user_email);
    $statement->execute();
    $user_present = $statement->fetch();
    $statement->closeCursor();
    return $user_present;
  }

  function createNewUser($user_email,$first_name,$last_name,$password,$phone_number,$birthday,$gender){
    global $db;
    $query = 'INSERT INTO users
                 (password, email, firstName, lastName, phoneNumber,birthday,gender)
              VALUES
                 (:password, :user_email, :first_name, :last_name, :phone_number, :birthday, :gender)';
    $statement = $db->prepare($query);
    $statement->bindValue(':password', $password);
    $statement->bindValue(':user_email', $user_email);
    $statement->bindValue(':first_name', $first_name);
    $statement->bindValue(':last_name', $last_name);
    $statement->bindValue(':phone_number', $phone_number);
    $statement->bindValue(':birthday', $birthday);
    $statement->bindValue(':gender', $gender);
    $statement->execute();
    $statement->closeCursor();
  }
?>
