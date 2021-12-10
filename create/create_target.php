<?php
// This is the php link to 2 different files, the word include works like a link in html to css.
include '../Validation.php';
include '../Connection.php';
// This set of code is a PHP query which when the "button-submit" has been clicked it runs the $name, $first_mission, $type and $no_missions through the validation and if things go well the data gets inserted into astronaut table.
   if(isset($_POST["button-submit"])){
    $name = Validation($_POST ["name"]);
    $first_mission = Validation($_POST ["first_mission"]);
    $type = Validation($_POST ["type"]);
    $no_missions = Validation($_POST ["no_missions"]);
    // This is mySQL query command which gets inserted when the form is submitted and filled.
      $sql = "INSERT INTO targets (name, first_mission, type, no_missions) VALUES ('$name', '$first_mission', '$type', '$no_missions')";
      if(!mysqli_query($connection, $sql)){
      die("Error:".mysqli_error($connection));
      }

      else{
          // This line of code prints out the last ID which has been added to the entry, and it informs the user with it's astronaut_id.
        $last_id = $connection->insert_id;
        echo ("Last inserted ID is: " . $last_id);
      }
    }
?> 
<html>
<head>
<body>
<title>Create Attend</title>
  <meta charset="utf-8">
  <!-- Here's a link to bootstrap library which helps to structure the website and make it better visually. -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <!-- Here is the form on the Create_Astronaut with 3 textbox, 1 datastamp for the user to pick, remember me checkbox and a submit button. -->
<form name="form" onsubmit="alert" action="create_target.php" method="post">
<div class="container mt-3">
  <u><h2>Create an Targets Table</h2></u>
  <div class="mb-3">
      <!-- This is the first div which is at the top of the website, it has it's own placeholder and class. -->
    <b> <label for="text">Name</label></b>
      <input type="text" class="form-control" id="text" placeholder="Name" name="name" required> 
    </div>
    <div class="mb-3">
    <div class="group">
       <!-- Here's a second div which is placed under the previous one, this one is set to be a date stamp as it's input -->
    <b> <label for="date">First Mission</label></b>
      <input type="date" class="form-control" id="first_mission" placeholder="Enter the Date of First Mission" name="first_mission" required>
    </div>
</div>
    <div class="mb-3">
         <!-- Here's a third div which is placed under the previous one, and it's a text textbox -->
    <b><label for="text">Type of Mission</label></b>
      <input type="text" class="form-control" id="type" placeholder="Enter the type of Mission" name="type" required>
    </div>
 <!-- Here's a forth div which is placed under the previous one, and it's a number textbox -->
    <div class="mb-3">
      <b><label for="number">Number of Missions</label></b>
      <input type="number" class="form-control" id="no_missions" placeholder="Enter the number of missions" name="no_missions" required>
    </div>  
  <!-- This is a checkbox of the inserted data as the user can tick the box if they want the data to be saved. -->
    <div class="form-check mb-3">
      <label class="form-check-label">
        <b><input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label></b>
    </div>
    <!-- This is a submit button which is clicked it goes through validations etc. -->
    <input type="submit" name= "button-submit" class="btn btn-primary"></input>
  </form>
  <br>
</div>
  <a href="../index.php">
       <button id="back_btn" class="back"> Go Back to the previous Page
   </button></a>
   
</body>
</html>
<style>
    /* This line of code centres the table and positions it into the position 190px away from the left margin and 250px from the top margin. */
    .table {
        margin-left: 190px;
        margin-top: 250px;
        background-color: lightblue;
    }
     /* This is the body tab, and this is where the whole form and buttons are at and this adds the text and item alignment to be centre and the background colour to be grey just like the background colour of the website. */
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
<!-- <style>
  .table {
        width:99%;
        margin-top: 175px;
        background-color: lightblue;
        text-align: center;
        align-items: center;
    }
    
    .back {
        margin-top: 30px;
        width: 200px;
        height: 75px;
        border-radius: 30px;
    }

    .submit {
        width: 100px;
        height: 100px;
    }

    body {
    width:100%;
    text-align:center;
    align-items:center;
    margin-top: 40px;
    background-color: grey;
}
</style> -->