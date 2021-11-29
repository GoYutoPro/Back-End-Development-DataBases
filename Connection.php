<?php
define("DB_NAME", "Block_2");
define ("DB_USER", "admin");
define ("DB_HOST", "localhost");
define ("DB_PASSWORD", "");

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$connection) {
    die('Could not connect:' .mysqli_error($connection));
}

$db_selected = mysqli_select_db($connection, DB_NAME);


if (!$db_selected){
die('Can\'t use'. DB_NAME. ':'.mysqli_error($connection));
}
?>