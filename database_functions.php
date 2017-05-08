<?php
  require_once('database_connection.php');

  function getUserForGivenEmail($user_email){
    global $db;
    $queryname = 'SELECT * FROM users WHERE email = :user_email';
    $statement = $db->prepare($queryname);
    $statement->bindvalue(':user_email',$user_email);
    $statement->execute();
    $user = $statement->fetch();
    $statement->closeCursor();
    return $user;
  }

  function getUserForGivenId($user_id){
    global $db;
    $queryname = 'SELECT * FROM users WHERE id = :user_id';
    $statement = $db->prepare($queryname);
    $statement->bindvalue(':user_id',$user_id);
    $statement->execute();
    $user = $statement->fetch();
    $statement->closeCursor();
    return $user;
  }

  function createNewUser($user_email,$first_name,$last_name,$password,$phone_number,$birthday,$gender){
    global $db;
    $query = 'INSERT INTO users
                 (password, email, first_name, last_name, phone_number,birthday,gender)
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

  function getTodoListForGivenUser($user_id, $status){
    global $db;
    $queryname = 'SELECT * FROM todos WHERE user_id = :user_id AND status = :status order by create_time';
    $statement = $db->prepare($queryname);
    $statement->bindvalue(':user_id',$user_id);
    $statement->bindvalue(':status',$status);
    $statement->execute();
    $todo_list = $statement->fetchAll();
    $statement->closeCursor();
    return $todo_list;
  }

  function addTodoForGivenUser($user_id, $todo_item){
    global $db;
    $query = 'INSERT INTO todos (user_id, todo_item) VALUES (:user_id, :todo_item)';
    $statement = $db->prepare($query);
    $statement->bindValue(':user_id', $user_id);
    $statement->bindValue(':todo_item', $todo_item);
    $statement->execute();
    $statement->closeCursor();
  }

  function updateToDoItem($todo_id,$todo_item){
    global $db;
    $query = 'UPDATE todos SET todo_item = :todo_item WHERE id = :todo_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':todo_id', $todo_id);
    $statement->bindValue(':todo_item', $todo_item);
    $statement->execute();
    $statement->closeCursor();
  }

  function deleteTodo($todo_id){
    global $db;
    $query = 'DELETE FROM todos WHERE id = :todo_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':todo_id', $todo_id);
    $statement->execute();
    $statement->closeCursor();
  }
?>
