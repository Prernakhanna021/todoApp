<?php
  $dsn = 'mysql:host=sql1.njit.edu;dbname=pk462';
  $db_username='pk462';
  $db_password='macBook2016';

  try{
    $db = new PDO($dsn,$db_username,$db_password);
  }catch(PDOException $e){
    $error_message = $e->getmessage();
    echo $error_message;
    exit();
  }
?>
