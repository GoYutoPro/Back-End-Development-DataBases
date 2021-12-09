<?php
include '../Validation.php';
include '../Connection.php';

   if(isset($_POST["button-submit"])){
    $name = Validation($_POST ["name"]);
    $first_mission = Validation($_POST ["first_mission"]);
    $type = Validation($_POST ["type"]);
    $no_missions = Validation($_POST ["no_missions"]);
      $sql = "INSERT INTO targets (name, first_mission, type, no_missions) VALUES ('$name', '$first_mission', '$type', '$no_missions')";
      if(!mysqli_query($connection, $sql)){
      die("Error:".mysqli_error($connection));
      }

      else{
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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<form name="form" onsubmit="alert" action="create_target.php" method="post">
<div class="container mt-3">
  <u><h2>Create an Targets Table</h2></u>
  <div class="mb-3">
    <b> <label for="text">Name</label></b>
      <input type="text" class="form-control" id="text" placeholder="Name" name="name" required> 
    </div>
    <div class="mb-3">
    <div class="group">
    <b> <label for="date">First Mission</label></b>
      <input type="date" class="form-control" id="first_mission" placeholder="Enter the Date of First Mission" name="first_mission" required>
    </div>
</div>
    <div class="mb-3">
    <b><label for="text">Type of Mission</label></b>
      <input type="text" class="form-control" id="type" placeholder="Enter the type of Mission" name="type" required>
    </div>
    <div class="mb-3">
      <b><label for="number">Number of Missions</label></b>
      <input type="number" class="form-control" id="no_missions" placeholder="Enter the number of missions" name="no_missions" required>
    </div>  
  
    <div class="form-check mb-3">
      <label class="form-check-label">
        <b><input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label></b>
    </div>
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
    .table {
        margin-left: 190px;
        margin-top: 250px;
        background-color: lightblue;
    }
    
    .back {
        margin-top: 50px;
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

    .btn {
        background-color: green;
    }
    
    .div {
        background-color:lightblue;
    }
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