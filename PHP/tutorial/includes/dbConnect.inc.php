<?php
/**
 * Created by PhpStorm.
 * User: hectorrodarte
 * Date: 1/30/18
 * Time: 12:33 PM
 */

$dbServerName = "127.0.0.1";
$dbUserName = "root";
$dbPassword = "potatoes";
$dbName = "phplessons";

//connection to db
$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);
//error messaging if connection fails
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

