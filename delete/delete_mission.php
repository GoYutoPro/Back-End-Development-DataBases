<?php
// This code is to link the Connection.php file to this delete_astronaut.php file.
include '../Connection.php';

// Here are the 2 SQL queries and both of them have their own variable name.
// 
$sql_delete_mission = "DELETE FROM mission WHERE mission_id='" . $_GET['id'] . "'";
$sql_delete_targets = "DELETE FROM targets WHERE target_id='" . $_GET['id'] . "'";

 // Here's a php code for the connection to the database be made and the sql queries above be inserted if everything goes as planned the entry will be deleted if not the connection will die and an error will popup.
if (!mysqli_query($connection, $sql_delete_mission)) {
        if (!mysqli_query($connection, $sql_delete_targets)) {
            
        }
}
// This is a JavaScript link to reload the website if the command queries have been correct.
echo "<script>location.href='../view/view_mission.php';</script>";
?>
