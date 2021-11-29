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
    <b> <label for="text">Name</label></b>
      <input type="text" class="form-control" id="text" placeholder="Name" name="name" required> 
    </div>
    <div class="mb-3">
    <div class="group">
        <b><label>Is this your First Mission?</label><br></b>
        <input type="checkbox" class="larger" id="yes" />
        <label for="yes">Yes!</label>
      </div>
      <div>
      <input type="checkbox" id="no" />
        <label for="yes">No!</label>
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
    <button type="submit" id="btn" class="btn btn-primary">Submit</button>
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
</style>