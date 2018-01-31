<?php
/**
 * Created by PhpStorm.
 * User: hectorrodarte
 * Date: 1/30/18
 * Time: 1:50 PM
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

$data = 1;

//Created a template
$sql = "SELECT * FROM users WHERE user_uid=?;";

//Create a prepared statement
$stmt = mysqli_stmt_init($conn);

//Prepare the prepared statement
if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "SQL statement failed";
} else {
    //bind parameters to the placeholder
    mysqli_stmt_bind_param($stmt, "i", $data);
    //Run parameters inside DB
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['first_name'];
    }
}

?>

</body>
</html>
