<?php
  $dsn = 'mysql:host=localhost;dbname=my_new_db';
  $db_username = 'root';
  $db_password = '';

  try{
    $db = new PDO($dsn,$db_username,$db_password);
  }catch(PDOException $e){
    $error_message = $e->getmessage();
    echo $error_message;
    exit();
  }
?>
