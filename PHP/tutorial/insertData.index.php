<?php
/**
 * Created by PhpStorm.
 * User: hectorrodarte
 * Date: 1/30/18
 * Time: 1:17 PM
 */

include_once 'includes/dbConnect.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>


<?php

$sql = "INSERT INTO `users` (`first_name`, `last_name`, `city`, `age`, `user_email`, `user_pwd`)
VALUES ('Joseph', 'Blue', 'Longmont', 35, 'josephBlue@email.com', '45123');";
$result = mysqli_query($conn, $sql);


?>

</body>
</html>
