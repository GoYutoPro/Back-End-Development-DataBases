<?php
// This code is to link the Connection.php file to this delete_astronaut.php file.
include '../Connection.php';
// Here is a SQL query with it's command which is implemented into the mySQL commands.
// // $sql_delete_attend has a query to delete from the table attends where the astronaut_id is matching the ID printed on the view_astronaut file.
    $sql_delete_attend = "DELETE FROM attends WHERE mission_id='".$_GET['id']."'";

    // Here's a php code for the connection to the database be made and the sql queries above be inserted if everything goes as planned the entry will be deleted if not the connection will die and an error will popup.
      if(!mysqli_query($connection, $sql_delete_attend)){
      die("Error:".mysqli_error($connection));
      }
    
// This is a JavaScript link to reload the website if the command queries have been correct.
echo "<script>location.href='../view/view_attend.php';</script>";
     
?> 