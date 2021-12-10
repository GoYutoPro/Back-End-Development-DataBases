<?php
// This is the php link to 2 different files, the word include works like a link in html to css.
include '../Validation.php';
include '../Connection.php';
// This set of code is a PHP query which when the "button-submit" has been clicked it runs the $destination, $launch_date, $type, $crew_size, $target_id through the validation and if things go well the data gets inserted into astronaut table.
   if(isset($_POST["button-submit"])){
    $destination = Validation($_POST ["destination"]);
    $launch_date = Validation($_POST ["launch_date"]);
    $type = Validation($_POST ["type"]);
    $crew_size = Validation($_POST ["crew_size"]);
    $target_id = Validation($_POST ["target_id"]);
    // This is mySQL query command which gets inserted when the form is submitted and filled.
      $sql = "INSERT INTO mission (destination, launch_date, type, crew_size, target_id) VALUES ('$destination', '$launch_date', '$type', '$crew_size', '$target_id')";
      // // Here's a php code for the connection to the database be made and the sql queries above be inserted if everything goes as planned the entry will be deleted if not the connection will die and an error will popup.
      if(!mysqli_query($connection, $sql)){
      die("Error:".mysqli_error($connection));
      }
      else{
      echo "Data Inserted";
      }
    }
?> 
<html>
<body>
<title>Create Mission</title>
  <meta charset="utf-8">
      <!-- Here's a link to bootstrap library which helps to structure the website and make it better visually. -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <!-- Here is the form on the Create_Attend with 1 drop box for the user to choose from, 3 textbox and 1 data stamp for the user to pick the data, the remember me checkbox and a submit button. -->
<form name="form" onsubmit="alert" action="create_mission.php" method="post">
<div class="container mt-3">
  <u><h2>Create a Mission Table</h2></u>
    <div class="mb-3">
        <!-- This is the first div which is at the top of the website, it has it's own placeholder and class. -->
      <b><label for="text">Destination</label></b>
      <input type="text" class="form-control" id="destination" placeholder="Enter the destination" name="destination" required>
    </div>
    <div class="mb-3">
      <!-- Here's a second div which is placed under the previous one, this one set to be the input this is the date stamp for the user to select the data of the launch date -->
    <b> <label for="date">Launch Date</label></b>
      <input type="date" class="form-control" id="launch_date" placeholder="Enter the Launch Date" name="launch_date" required>
    </div>
    <div class="mb-3">
      <!-- Here's a third div which is placed under the previous one, this one is set to be a textbox as it's input -->
    <b><label for="text">type of Mission</label></b>
      <input type="text" class="form-control" id="type" placeholder="Enter the type of Mission" name="type" required>
    </div>
    <div class="mb-3">
      <!-- Here's a forth div which is placed under the previous one, this one is set to be a number as it's input -->
    <b><label for="number">Crew Size</label></b>
      <input type="number" class="form-control" id="crew_size" placeholder="Enter the Crew Size" name="crew_size" required>
    </div>
    <div class="mb-3">
      <!-- Here's a fifth div which is placed under the previous one, this one is set to be a a dropbox for the user to pick the target ID -->
        <label for="type" class="form-label"><b>Target ID:</b></label>
            <select id="target_id" name="target_id">
        <?php
        // This is mySQL query command which gets inserted when the form is submitted and filled.
        $result = mysqli_query($connection, "SELECT * FROM targets");
        foreach ($result as $row ) {
            $thisValue = $row['target_id'];
            echo "<option  value= $thisValue >" . $thisValue . "</option>";
            }  
            ?>
            </select>  
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
  /* This line of code centres the table and positions it into the position 20px away from the right margin and 175px from the top margin. */
    .table {
        width:99%;
        margin-top: 175px;
        margin-right:20px;
        background-color: lightblue;
        text-align: center;
        align-items: center;
    }
        /* This is the back button which adds the position of the button 50px from the top margin and it's size in width and heigh. Border radius makes the button to curve out at the edges. */
    .back {
        margin-top: 30px;
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

