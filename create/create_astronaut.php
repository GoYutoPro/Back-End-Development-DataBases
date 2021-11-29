<html>
<body>
    <table class="table"border="2px">
    
    <td><form name="FormValidator" onsubmit="return ValidateForm()" action="../Connection.php" method="post">
        Astronaut id: <input type="number" name="astronaut_id">

        Astronaut Name: <input type="text" name="name" required>

        Number of Missions <input type="number" name="no_missions" required>
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
        margin-left: 190px;
        margin-top: 250px;
        background-color: lightblue;
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


