<!-- The language selected for the letters -->
<html lang="en">
<?php
// This is a function which validates the data inserted into the text bars, a variable $input is ran through this function and validated.
function Validation($input) {
    // This trim function is looking if the data inserted isn't too long to be processed and if it is, it cuts it by the certain amount.
    $input = trim($input);
    // This function checks if the data that the user inserted doesn't have a backslash"\" and if it does it removes it before populating into the database.
    $input = stripslashes($input);
    // This function checks over the inserted data to check if there are any special characters for example "!,@,£,$,&,*,#"
    $input = htmlspecialchars($input);
    return $input;
}
?>

</html>