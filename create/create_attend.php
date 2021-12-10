<?php
// This is the php link to 2 different files, the word include works like a link in html to css.
include '../Validation.php';
include '../Connection.php';
// This set of code is a PHP query which when the "button-submit" has been clicked it runs the $no_missions and $astronaut_id through the validation and if things go well the data gets inserted into attends table.

   if(isset($_POST["button-submit"])){
    $mission_id = Validation($_POST ["mission_id"]);
    $astronaut_id = Validation($_POST ["astronaut_id"]);
      $sql = "INSERT INTO attends (mission_id, astronaut_id) VALUES ('$mission_id', '$astronaut_id')";
      // This is mySQL query command which gets inserted when the form is submitted and filled.
      if(!mysqli_query($connection, $sql)){
      die("Error:".mysqli_error($connection));
      }
      else{
        // These are the 2 sql queries to update the crew_size at the same time as the mission_id get updated in which case it when the astronaut gets set a mission the crew size for the mission goes up.
        $mission_upt = "UPDATE mission SET crew_size= crew_size +1 WHERE mission_id = $mission_id";
        $astronaut_upt = "UPDATE astronaut SET no_missions= no_missions +1 WHERE astronaut_id = $astronaut_id";
        // This code creates a connection to the database and it runs the sql variable queries which are defined above this code.
        mysqli_query($connection, $mission_upt);
        mysqli_query($connection, $astronaut_upt);
        
// This prints out if everything was successful and everything worked well.
      echo "Data Inserted";
      }
    }
?> 
<html>
<body>
<title>Create Attend</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Here's a link to bootstrap library which helps to structure the website and make it better visually. -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <!-- Here is the form on the Create_Attend with 2 drop box for the user to choose from, the remember me checkbox and a submit button. -->

<form name="form" onsubmit="alert" action="create_attend.php" method="post">
<div class="container mt-3">
  <u><h2>Create an Attend Table</h2></u>
  <div class="mb-3">
    <!-- This is the mission ID drop box with the queries which prints out the missions_id from the table -->
        <label for="type" class="form-label"><b>Mission ID:</b></label>
            <select id="mission_id" class="miss_id" name="mission_id">
        <?php
        // This $result variable has it's queries to first connect to the database and then run the command and collect the data which then prints it out into a dropbox.
        $result = mysqli_query($connection, "SELECT * FROM mission");
        foreach ($result as $row ) {
            $thisValue = $row['mission_id'];
            echo "<option  value= $thisValue >" . $thisValue . "</option>";
            }  
            ?>
            </select>  
        </div>
<!-- This is the Astronaut ID drop box with the queries which prints out the missions_id from the table -->
        <div class="mb-3">
        <label for="type" class="form-label"><b>Astronaut ID:</b></label>
            <select id="astronaut_id" class="astro_id" name="astronaut_id">
        <?php
         // This $result variable has it's queries to first connect to the database and then run the command and collect the data which then prints it out into a dropbox.
        $result = mysqli_query($connection, "SELECT * FROM astronaut");
        foreach ($result as $row ) {
            $thisValue = $row['astronaut_id'];

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
<style>
  /* This line of code centres the table and positions it into the position 190px away from the left margin and 250px from the top margin. */
  .table {
        margin-left: 200px;
        margin-top: 250px;
        background-color: lightblue;
    }
        /* This is the body tab, and this is where the whole form and buttons are at and this adds the text and item alignment to be centre and the background colour to be grey just like the background colour of the website. */
    .back {
        margin-top: 30px;
        width: 200px;
        height: 75px;
        border-radius: 30px;
    }
/* This piece of code specifies the mission_id drop box width and height */
    .miss_id {
      width: 200px;
      height: 40px;
    }
    /* This piece of code specifies the astronaut_id drop box width and height */
    .astro_id {
      width: 200px;
      height: 40px;
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

</style>