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

$first_name = "Blue";
$last_name = "Man";
$city = "Falcon";
$age = 38;
$user_email = "blueMan@email.com";
$user_pwd = "34125";

$sql = "INSERT INTO `users` (`first_name`, `last_name`, `city`, `age`, `user_email`, `user_pwd`)
VALUES (?, ?, ?, ?, ?, ?);";

$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "SQL error";
} else {
    mysqli_stmt_bind_param($stmt, "sssiss", $first_name, $last_name, $city, $age, $user_email,$user_pwd);
    mysqli_stmt_execute($stmt);
}


?>

</body>
</html>
