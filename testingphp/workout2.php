<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Workout Tracker</title>
    <link href="workout.html" rel="stylesheet">
    <meta name="description" content="Workout Tracker - Workout, user-scalable=0">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/newexercise.css">

</head>

<body>

    <h2 class="topname">New Workout</h2>
    <p></p>

    <form id="workoutform" method="post">
        <h5>Name</h5>
        <input id="exercisetxt" type="text" required autocomplete="off" name="exercisename" value="" placeholder="Exercise Name"> 
		<br>
		<br>
		<br>
        <h5># of Exercises</h5> 
        <input id="exercisetxt" type="number" required autocomplete="off" name="numofexercise" value="" placeholder="# of Exercises">

        <div id = "new-workout">

        <a href="homepage.php"><img id = "xbutton" src = "images/cancel_icon.png" 
    alt = "cancelicon"></a>
        <a href="newexercise.php"><img id = "okbutton" src = "images/ok_icon.png" 
    alt = "cancelicon"></a>
            
        </div>
        
    </form>

    <div>
         <nav class="navbar bottom-nav">
            <table class="bottom-nav">

                <tr>
                    <td class="bottom-menu" onClick="document.location.href='homemenu.php';"><img class="icons" src="images/profile_icon.PNG"></td>
                    <td class="bottom-menu" onClick="document.location.href='homemenu.php';"><img class="icons" src="images/history_icon.PNG"></td>
                    <td class="bottom-menu" onClick="document.location.href='homemenu.php';"><img class="icons" src="images/home_icon.PNG"></td>
                    <td class="bottom-menu" onClick="document.location.href='homemenu.php';"><img class="icons" src="images/data_icon.PNG"></td>
                    <td class="bottom-menu" onClick="document.location.href='homemenu.php';"><img class="icons" src="images/settings_icon.PNG"></td>
                </tr>
            </table>
        </nav>
    </div>

	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>

</body>

</html>