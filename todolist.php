<?php
require_once('db_connection.php');
$username=filter_input(INPUT_POST, 'user_name');
$password=filter_input(INPUT_POST, 'password');

$queryname = 'SELECT COUNT(*) as totalUsers FROM users WHERE username = :username';
$statement1 = $db->prepare($queryname);
$statement1->bindvalue(':username',$username);
$statement1->execute();
$countUser = $statement1->fetch();
$statement1->closeCursor();
?>
<html>
  <body>
    <?php echo $countUser['totalUsers'];?>
  </body>
</html>
