<html>
<head>
    <?php include '../Validation.php';?>
    <?php include '../Connection.php';?>
  <title>Create Astronaut</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<form id="forms" name="form" onsubmit="alert" action="create_astronaut.php" method="post">
<div class="container mt-3">
  <u><h2>Create a Astronaut Table</h2></u>
    <div class="mb-3">
      <label for="text">Astronaut Name</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter Astronaut's Name" name="name" required> 
    </div>
    <div class="mb-3">
      <label for="number">Number of Missions</label>
      <input type="number" class="form-control" id="no_missions" placeholder="Enter the number of missions" name="no_missions" required>
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" id="btn" class="btn btn-primary">Submit</button>
  </form>
  <br>
</div>
  <a href="../index.php">
       <button id="back_btn" class="back"> Go Back to the previous Page
   </button></a>

   <?php
   
    $astronaut_id = Validation($_POST ["astronaut_id"]);
    $name = Validation($_POST ["name"]);
    $no_missions = Validation($_POST ["no_missions"]);

    $sql = "INSERT INTO astronaut (astronaut_id, name, no_missions) VALUES ('$astronaut_id', '$name', '$no_missions')";

    if(!mysqli_query($connection, $sql)){
    die("Error:".mysqli_error($connection));
    }

    else{
    echo "Data Inserted";
    }
?>
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

    

/* <div class="mb-3 mt-3">
      <label for="number">Astronaut ID</label>
      <input type="number" class="form-control" id="number" placeholder="Insert Astronaut ID" name="astronaut_id">
    </div> */

    
