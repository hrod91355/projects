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

//Created a sql statment
$sql = "SELECT * FROM users";
//connect to DB and execute query
$result = mysqli_query($conn, $sql);
//create array
$dataArr = array();

if (mysqli_num_rows($result) > 0) {
    //Fetches a result row as an associative array
    while ($row = mysqli_fetch_assoc($result)) {
        //insert results to data array
        $dataArr[] = $row;
    }
}
//loop through first row of db and insert to new array
foreach ($dataArr[0] as $specificDataArr) {
//    print_r($specificDataArr);
}

//loop through and only pull out data from specific column from DB
foreach ($dataArr as $specificDataArr) {
    print_r($specificDataArr['city']. " ");
}


?>

</body>
</html>