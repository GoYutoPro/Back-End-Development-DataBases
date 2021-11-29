<html>
<body>
<title>Create Mission</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<form name="form" onsubmit="alert" action="../Connection.php" method="post">
<div class="container mt-3">
  <u><h2>Create a Mission Table</h2></u>
    <div class="mb-3">
    <b> <label for="text">Name</label></b>
      <input type="text" class="form-control" id="text" placeholder="Name" name="name" required> 
    </div>
    <div class="mb-3">
      <b><label for="text">Destination</label></b>
      <input type="text" class="form-control" id="destination" placeholder="Enter the destination" name="destination" required>
    </div>
    <div class="mb-3">
    <b> <label for="date">Launch Date</label></b>
      <input type="date" class="form-control" id="launch_date" placeholder="Enter the Launch Date" name="launch_date" required>
    </div>
    <div class="mb-3">
    <b><label for="text">type of Mission</label></b>
      <input type="text" class="form-control" id="type" placeholder="Enter the type of Mission" name="type" required>
    </div>
    <div class="mb-3">
    <b><label for="number">Crew Size</label></b>
      <input type="number" class="form-control" id="crew_size" placeholder="Enter the Crew Size" name="crew_size" required>
    </div>
    <div class="mb-3">
    <b><label for="number">Target ID</label></b>
      <input type="number" class="form-control" id="target_id" placeholder="Enter the target ID" name="target_id" required>
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
    <!-- <table class="table"border="2px">
    <td><form action="../Connection.php" method="post">
        astronaut_id: <input type="integer" name="astronaut_id"> 

        name: <input type="text" name="name">

        destination <input type="text" name="destination">
        
        launch_date <input type="integer" name="launch_date">
        
        type <input type="text" name="type">
        
        crew_size <input type="integer" name="crew_size">
        
        target_id <input type="integer" name="target_id">
    <td>
        <input class="submit"type="submit">
    </td>
    </form></td></table>
   <a href="../index.php">
       <button class="back"> Go Back to the previous Page
   </button></a> -->
</body>
</html>
<style>
    .table {
        width:99%;
        margin-top: 175px;
        margin-right:20px;
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


