<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
<title>Table with Targets</title>

<style>
     body {
    width:100%;
    text-align:center;
    align-items:center;
    margin-top: 40px;
    background-color: grey;
     }

table {
border-collapse: collapse;
width: 80%;
color: red;
font-family: monospace;
font-size: 20px;
text-align: center;
margin-left: 130px;
}
th {
background-color: green;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
.back {
        margin-top: 50px;
        width: 200px;
        height: 75px;
        border-radius: 30px;
        
    }
</style>
</head>
<body>
<table>
<tr>
<th>Target_ID</th>
<th>Name</th>
<th>First Mission</th>
<th>Type of Missions</th>
<th>Number of Missions</th>
<th>Delete</th>
</tr>


<?php
include '../Connection.php';

$sql = "SELECT * FROM targets";

$result = $connection->query($sql);



if ($result->num_rows > 0) {
    
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["target_id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["first_mission"] . "</td><td>".  $row["type"] . "</td><td>". $row["no_missions"] . "</td>" . "</td>". "<td>". "<a class='btn btn-danger' href='../delete/delete_target.php?id=$row[target_id]'>". "Delete" ?></a></td><tr> <?php
  }
}
?>
 

</table>
</body>
<a href="../index.php">
       <button class="back"> Go Back to the previous Page
   </button></a>
</html>