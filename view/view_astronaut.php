<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Astronaut_ID</th>
<th>Name</th>
<th>Number of Missions</th>
</tr>
<?php
define("DB_NAME", "Block_2");
define ("DB_USER", "admin");
define ("DB_HOST", "localhost");
define ("DB_PASSWORD", "password");

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
// Check connection
if ($connection -> connection_error) {
die("Connection failed: " . $connection -> connection_error);
}

$sql = "SELECT astronaut_id, name, no_missions";
$result = $connection->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["astronaut_id"]. "</td><td>" . $row["name"] . "</td><td>"
. $row["no_missions"]. "</td></tr>";
}
echo $astronaut_id = $_POST['Astronaut_ID'];
echo $name = $_POST['name'];
echo $no_missions = $_POST['Number of Missions']

} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>
<html>
<body>
    
   <a href="../index.php">
       <button> Go Back to the previous Page
   </button></a>
</body>
</html>