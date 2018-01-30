<?php
  include 'includes/dbh.inc.php';
  include 'includes/user_pdo.inc.php';

?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<?php

$object = new User;
echo $object->getAllUsers();

?>

</body>
</html>
