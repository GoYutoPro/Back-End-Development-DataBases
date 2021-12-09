<?php
// These 4 lines of code defines the specific name of the database(DB_NAME), name of the user(DB_USER), name of the host(DB_HOST) and the password to log into phpMyAdmin(DB_PASSWORD).
define("DB_NAME", "Block_2");
define ("DB_USER", "root");
define ("DB_HOST", "localhost");
define ("DB_PASSWORD", "");
// This line of code more exactly $connection has a query of what it needs to connect to the database in this case it's: DB_HOST,DB_USER, and DB_PASSWORD.
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
//If there will be something wrong with the connection to the database an error will come up and the connection will die/get closed off.
if (!$connection) {
    die('Could not connect:'.mysqli_error($connection));
}
//This line of code selects the right database to use to work with, $db_selected is the variable which has assigned task to do, first to create a connection to the database($connection) and then select the name of the database which is defined at the top of the page(DB_NAME).
$db_selected = mysqli_select_db($connection, DB_NAME);

//If something goes wrong while connecting to the database, the connection will be closed and an error will come up from the connection as well as the connection will close off.
if (!$db_selected){
die('Can\'t use'. DB_NAME. ':'.mysqli_error($connection));
}
?>