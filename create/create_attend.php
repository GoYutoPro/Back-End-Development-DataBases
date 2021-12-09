<?php
include '../Validation.php';
include '../Connection.php';

   if(isset($_POST["button-submit"])){
    $mission_id = Validation($_POST ["mission_id"]);
    $astronaut_id = Validation($_POST ["astronaut_id"]);
      $sql = "INSERT INTO attends (mission_id, astronaut_id) VALUES ('$mission_id', '$astronaut_id')";
      if(!mysqli_query($connection, $sql)){
      die("Error:".mysqli_error($connection));
      }
      else{
        $mission_upt = "UPDATE mission SET crew_size= crew_size +1 WHERE mission_id = $mission_id";
        $astronaut_upt = "UPDATE astronaut SET no_missions= no_missions +1 WHERE astronaut_id = $astronaut_id";
        mysqli_query($connection, $mission_upt);
        mysqli_query($connection, $astronaut_upt);
        

      echo "Data Inserted";
      }
    }
?> 
<html>
<body>
<title>Create Attend</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<form name="form" onsubmit="alert" action="create_attend.php" method="post">
<div class="container mt-3">
  <u><h2>Create an Attend Table</h2></u>
  <div class="mb-3">
        <label for="type" class="form-label"><b>Mission ID:</b></label>
            <select id="mission_id" class="miss_id" name="mission_id">
        <?php
        $result = mysqli_query($connection, "SELECT * FROM mission");
        foreach ($result as $row ) {
            $thisValue = $row['mission_id'];
            echo "<option  value= $thisValue >" . $thisValue . "</option>";
            }  
            ?>
            </select>  
        </div>
        <div class="mb-3">
        <label for="type" class="form-label"><b>Astronaut ID:</b></label>
            <select id="astronaut_id" class="astro_id" name="astronaut_id">
        <?php
        $result = mysqli_query($connection, "SELECT * FROM astronaut");
        foreach ($result as $row ) {
            $thisValue = $row['astronaut_id'];

            echo "<option  value= $thisValue >" . $thisValue . "</option>";
            }  
            ?>
            </select>  
        </div>
    <!-- <div class="mb-3">
      <label for="number">Mission ID</label>
      <input type="number" class="form-control" id="pwd" placeholder="Mission ID" name="mission_id" required> 
    </div>
    <div class="mb-3">
      <label for="number">Astronaut ID</label>
      <input type="number" class="form-control" id="no_missions" placeholder="Enter your astronaut ID" name="astronaut_id" required>
    </div> -->
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
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
        margin-left: 200px;
        margin-top: 250px;
        background-color: lightblue;
    }
    
    .back {
        margin-top: 30px;
        width: 200px;
        height: 75px;
        border-radius: 30px;
    }

    .miss_id {
      width: 200px;
      height: 40px;
    }
    
    .astro_id {
      width: 200px;
      height: 40px;
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

</style>