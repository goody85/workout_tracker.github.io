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

    <h2>New Workout</h2>
    <p></p>

    <form id="workoutform">
        <h5>Name</h5>
        <input id="exercisetxt" type="text" name="exercisename" value="" placeholder="Exercise name"> <br>
        <h5>Weight</h5> 
        <input id="exercisetxt" type="number" name="weight" value="" placeholder="Weight">

        
        <div id = "new-workout">

        <a href="\index.php"><img id = "xbutton" src = "images/cancel_icon.png" 
    alt = "cancelicon"></a>
        <a href="newexercise.php"><img id = "okbutton" src = "images/ok_icon.png" 
    alt = "cancelicon"></a>
            
        </div>
        
    </form>

    <div>
        <nav class="navbar bottom-nav">
            <table class="bottom-nav">

                <tr>
                    <td id="bottom-menu" onClick="document.location.href='index.php';"><img class="icons" src="images/profile_icon.PNG"></td>
                    <td id="bottom-menu" onClick="document.location.href='index.php';"><img class="icons" src="images/history_icon.PNG"></td>
                    <td id="bottom-menu" onClick="document.location.href='homemenu.php';"><img class="icons" src="images/home_icon.PNG"></td>
                    <td id="bottom-menu" onClick="document.location.href='index.php';"><img class="icons" src="images/data_icon.PNG"></td>
                    <td id="bottom-menu" onClick="document.location.href='index.php';"><img class="icons" src="images/settings_icon.PNG"></td>
                </tr>
            </table>
        </nav>
    </div>

</body>

</html>