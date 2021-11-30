<!DOCTYPE html>
<html>
<?php
include '../Connection.php';

$sql = "SELECT * FROM astronaut";
$result = mysqli_query($connection,$sql);
print_r($result);
if ($result) {
    while ($row = mysqli_fetch_row($result)) {
        // print($row[0]);
        // print($row[1]);
        // print($row[2]);
        print "<tr><td>" . $row["astronaut_id"]. "</td><td>" . $row["name"] . "</td><td>"
. $row["no_missions"]. "</td></tr>";
    }
}

// if(!mysqli_query($connection, $sql)){
//     die("Error:".mysqli_error($connection));
//     }

// else{
//     echo "It worked";
// }

// echo $result;


// if ($result->num_rows > 0) {
// while($row = $result->fetch_assoc()) {
// echo "<tr><td>" . $row["astronaut_id"]. "</td><td>" . $row["name"] . "</td><td>"
// . $row["no_missions"]. "</td></tr>";
//     }
// } 
// else { echo "0 results"; }
?>

<head>
<title>Table with database</title>

</head>
<body>
<table>
<tr>
<th>Astronaut_ID</th>
<th>Name</th>
<th>Number of Missions</th>
</tr>

</table>
  <a href="../index.php">
       <button> Go Back to the previous Page
   </button></a>
</body>
</html>

<style>
table {
border-collapse: collapse;
width: 80%;
color: #588c7e;
font-family: monospace;
font-size: 20px;
text-align: center;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>