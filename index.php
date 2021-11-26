<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<style>
*{
 background-color: grey;
 
}

body {
    width:100%;
    text-align:center;
    align-items:center;
    margin-top: 40px;
}
button {
    display:block;
    background-color: lightblue;
    font-weight: 700;
    text-align: center;
    align-items: center;
    width:50%;
    left: 50%;
    top:50%;
    transform: translate(50%,50%); 
    margin: 5px 0; 
    padding: 5px;
}
.view {
    margin-bottom:20px;
}
.divide {
    margin-bottom: 50px;
}
</style>


</head>
<marquee behavior="scroll" direction="right" scrollamount="15">Feel Free to CREATE adn VIEW tables in databases</marquee>
<body>
<div class="divide">
        <a href="create/create_astronaut.php">
            <button>Create Entry to Astronaut Table</button>
        </a>
    <a class="view" href="view_astronaut.php">
        <button>View Astronaut Table</button>
    </a>
    </div>
    <div class="divide">
    <a href="create/create_mission.php">
    <button>Create Entry to Missions Table</button>
    </a>
    <a class="view" href="create_mission.php">
    <button>View Missions Table</button>
    </a>
</div>
<div class="divide">
    <a href="create/create_attend.php">
    <button>Create Entry to Attends Table</button>
    </a>
    <a class="view" href="create_attend.php">
    <button>View Attends Table</button>
    </a>
</div>
<div class="divide">
    <a href="create/create_target.php">
    <button>Create Entry to Targets Table</button>
    </a>
    <a  class="view"href="create_target.php">
    <button>View Targets Table</button>
    </a>
</div>
    </body>
</html>