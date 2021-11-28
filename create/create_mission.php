<html>
<body>
    <table class="table"border="2px">
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
   </button></a>
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


