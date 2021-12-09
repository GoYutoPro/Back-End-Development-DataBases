<!-- These first 3 lines of code are defining the language of the website, as well as the width of the website depending on the device.  -->
    <html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <!-- Here's a CSS code to style the website out for example to add the background colour, change the size of different buttons or to even add a colour to them, etc. -->
<style>
    /* This line of code changes the background colour to GREY and the "*" before the curly brackets means select everything/all. */
*{
 background-color: grey;
 
}

/* This is a body tag in HTML, I defined the width to be 100%(Depending on the width of the device), all the words and letters to be aligned in the centre, and the position which is 40px away from the top border. */
body {
    width:100%;
    text-align:center;
    align-items:center;
    margin-top: 40px;
}
/* This is a style of all the buttons on the main index page, this is the style for the main 8 buttons which are in the middle of the webpage. */
button {
    /* This piece of code has a background colour of lightblue, and font size of 700, the text has a center alignment and the width of these buttons are 50% and the position from the top and left to be 50%*/
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
    border-radius:20px;
}
/* This is the view class which are the 4 buttons under every create button and its margin bottom is 20px for the space to be smaller between the top button and the bottom one. */
.view {
    margin-bottom:20px;
}
/* This divide is also a class of the buttons and this original space is 40px but it doesn't include the view buttons. */
.divide {
    margin-bottom: 40px;
}
</style>
</head>
<!-- This marquee code is a moving word function which has it's set direction which goes from left to right, and it's speed in scrollamount tag. -->
<marquee behavior="scroll" direction="right" scrollamount="15">Feel Free to CREATE adn VIEW tables in databases</marquee>
<!-- All the buttons that are on the page are in Body TAG. -->
<body>
    <h3>Astronaut Table</h3>
    <!-- This is the first class of buttons which is the create and view astronaut table. The buttons are in a div to position it easier, there are 2 files for these buttons 1 which to create an entry and another one is to view it. -->
<div class="divide">
        <a href="create/create_astronaut.php">
            <button>Create Entry to Astronaut Table</button>
        </a>
    <a class="view" href="view/view_astronaut.php">
        <button>View Astronaut Table</button>
    </a>
    </div>
    <h3>Missions Table</h3>
    <!-- This is another class of buttons which is to view and create missions table, both of the buttons has it's own link to another file "HREF" which when the button is clicked the user will be redirected to the selected file. -->
    <div class="divide">
    <a href="create/create_mission.php">
    <button>Create Entry to Missions Table</button>
    </a>
    <a class="view" href="view/view_mission.php">
    <button>View Missions Table</button>
    </a>
</div>
<h3>Attends Table</h3>
<!-- This is second to last class of buttons with the view and create attends table and again both of the buttons have a link to another file. -->
<div class="divide">
    <a href="create/create_attend.php">
    <button>Create Entry to Attends Table</button>
    </a>
    <a class="view" href="view/view_attend.php">
    <button>View Attends Table</button>
    </a>
</div>
<h3>Targets Table</h3>
<!-- This is the last set/class of buttons which is called targets and again both of the buttons have a link to another file. -->
<div class="divide">
    <a href="create/create_target.php">
    <button>Create Entry to Targets Table</button>
    </a>
    <a  class="view"href="view/view_target.php">
    <button>View Targets Table</button>
    </a>
</div>
    </body>
</html>