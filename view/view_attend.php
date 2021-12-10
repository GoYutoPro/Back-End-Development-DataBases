<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<!-- Here's a link to bootstrap library which helps to structure the website and make it better visually. -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
<title>Table with Targets</title>
  <!-- This is the CSS piece of code to style out the website and make it better visually. -->
<style>
   /* This is the body tab, and this is where the whole form and buttons are at and this adds the text and item alignment to be centre and the background colour to be grey just like the background colour of the website. */
     body {
    width:100%;
    text-align:center;
    align-items:center;
    margin-top: 40px;
    background-color: grey;
     }
/* This line of code centres makes the table smaller and adds it's font size and alignment. */
table {
border-collapse: collapse;
width: 80%;
color: red;
font-family: monospace;
font-size: 20px;
text-align: center;
margin-left: 130px;
}
/* This is code to define the background colour of the text and the table  */
th {
background-color: green;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
/* This is the back button which adds the position of the button 50px from the top margin and it's size in width and heigh. Border radius makes the button to curve out at the edges. */
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
  <!-- This is the table with the Table rows -->
<th>Mission ID</th>
<th>Astronaut ID</th>
<th>Delete</th>

</tr>


<?php
// This is the php link to 1 file, the word include works like a link in html to css.
include '../Connection.php';
// This is mySQL query command which gets inserted when the form is submitted and filled.
$sql = "SELECT * FROM attends";

$result = $connection->query($sql);


if ($result->num_rows > 0) {
    // This piece of code prints the specified things from the database and it prints out in the table rows and table divs, as well as a button to delete the entry.
  while($row = $result->fetch_assoc()) {

    echo "<tr><td>" . $row["mission_id"] . "</td><td>" . $row["astronaut_id"] . "</td>". "<td>"."<a class='btn btn-danger' href='../delete/delete_attend.php?id=$row[mission_id]'>". "Delete" ?></a></td><tr> <?php
      
  }

} else {

  echo "0 results";

}

?>
 

</table>
</body>
<!-- This is a back to previous page button which when is clicked it takes the user back to the previous page. -->
<a href="../index.php">
<a href="../index.php">
       <button class="back"> Go Back to the previous Page
   </button></a>
</html>