<html>
<?php
// This is the php link to 2 different files, the word include works like a link in html to css.
include '../Validation.php';
include '../Connection.php';
// This set of code is a PHP query which when the "button-submit" has been clicked it runs the $name and $no_missions through the validation and if things go well the data gets inserted into astronaut table.
   if(isset($_POST["button-submit"])){
      $name = Validation($_POST ["name"]);
      $no_missions = Validation($_POST ["no_missions"]);
// This is mySQL query command which gets inserted when the form is submitted and filled.
      $sql = "INSERT INTO astronaut (name, no_missions) VALUES ('$name', '$no_missions')";
 // Here's a php code for the connection to the database be made and the sql queries above be inserted if everything goes as planned the entry will be deleted if not the connection will die and an error will popup.
      if(!mysqli_query($connection, $sql)){
      die("Error:".mysqli_error($connection));
      }
      else{
        // This line of code prints out the last ID which has been added to the entry, and it informs the user with it's astronaut_id.
        $last_id = $connection->insert_id;
        echo "<h3>" . " Last inserted ID is: " . $last_id . "</h3>";
      
      }     
      
    }
?> 
<head>
  <title>Create Astronaut</title>
  <meta charset="utf-8">
  <!-- Here's a link to bootstrap library which helps to structure the website and make it better visually. -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<!-- Here is the form on the Create_Astronaut with 1 textbox, 1 integer box, remember me checkbox and a submit button. -->
<body>
<form id="forms" name="form" onsubmit="alert" action="create_astronaut.php" method="post">
<div class="container mt-3">
  <u><h2>Create a Astronaut Table</h2></u>
  <!-- This is the first div which is at the top of the website, it has it's own placeholder and class. -->
    <div class="mb-3">
      <label for="text">Astronaut Name</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Astronaut's Name" name="name" required> 
    </div>
    <!-- Here's a second div which is placed under the previous one, this one is set to be a number as it's input -->
    <div class="mb-3">
      <label for="number">Number of Missions</label>
      <input type="number" class="form-control" id="no_missions" placeholder="Enter the number of missions" name="no_missions" required>
    </div>
    <!-- This is a checkbox of the inserted data as the user can tick the box if they want the data to be saved. -->
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <!-- This is a submit button which is clicked it goes through validations etc. -->
    <input type="submit" name= "button-submit" class="btn btn-primary"></input>
  </form>
  <br>
</div>
<!-- This is a back to previous page button which when is clicked it takes the user back to the previous page. -->
  <a href="../index.php">
       <button id="back_btn" class="back"> Go Back to the previous Page
   </button></a>
</body>
</html>
<!-- This is the CSS piece of code to style out the website and make it better visually. -->
<style>
  /* This line of code centres the table and positions it into the position 190px away from the left margin and 250px from the top margin. */
    .table {
        margin-left: 190px;
        margin-top: 250px;
        background-color: lightblue;
    }
    /* This is the back button which adds the position of the button 50px from the top margin and it's size in width and heigh. Border radius makes the button to curve out at the edges. */
    .back {
        margin-top: 50px;
        width: 200px;
        height: 75px;
        border-radius: 30px;
    }
/* This is a submit button and it only specifies the width and height of the button. */
    .submit {
        width: 100px;
        height: 100px;
    }
    /* This is the body tab, and this is where the whole form and buttons are at and this adds the text and item alignment to be centre and the background colour to be grey just like the background colour of the website. */
    body {
    width:100%;
    text-align:center;
    align-items:center;
    margin-top: 40px;
    background-color: grey;
}
/* This a piece of code for the submit button which is specified to be green. */
    .btn {
        background-color: green;
    }
    
    /* This is the colour of all the divisions used in the form table. */
    .div {
        background-color:lightblue;
    }
    /* This code defines the background colour of the forms used on the page. */
    .forms {
        background-color:lightblue;
    }
</style>