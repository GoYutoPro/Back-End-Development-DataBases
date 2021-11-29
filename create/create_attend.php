<html>
<body>
<title>Create Attend</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<form name="form" onsubmit="alert" action="../Connection.php" method="post">
<div class="container mt-3">
  <u><h2>Create an Attend Table</h2></u>
    <div class="mb-3">
      <label for="number">Mission ID</label>
      <input type="number" class="form-control" id="pwd" placeholder="Mission ID" name="mission_id" required> 
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

<!-- <table class="table"border="2px">
    <td><form action="../Connection.php" method="post">
        mission_id: <input type="integer" name="mission_ids">

        no_missions: <input type="text" name="no_missions">

        astronaut_id <input type="integer" name="astronaut_id">
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