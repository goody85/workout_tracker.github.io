<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Workout Tracker</title>
    <link href="newexercise.html" rel="stylesheet">
    <meta name="description" content="Workout Tracker - New Exercise, user-scalable=0" >
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/newexercise.css">

</head>

<body>

    <h2 class="topname">New Exercise</h2>
    <p></p>

    <form id="exerciseform">
	
		<br>
		<br>
        <h5>Name</h5>
        <input id="exercisetxt" type="text" name="exercisename" value="" placeholder="Exercise name">
	
		<br>
		<br>
        <h5>Weight</h5>
        <input id="exercisetxt" type="number" name="weight" value="" placeholder="Weight">
		
		<br>
		<br>
        <h5>Sets</h5>
        <input id="exercisetxt" type="number" name="sets" value="" placeholder="Sets">
	
		<br>
		<br>
        <h5>Reps</h5>
        <input id="exercisetxt" type="number" name="reps" value="" placeholder="Reps">
		
		<br>
		<br>
        <h5>Time/Set (mins)</h5>
        <input id="exercisetxt" type="number" name="time" value="" placeholder="Time per Sets">
        
		<br>
		<br>
		<h5>Main Muscle Target</h5>
        
        <select name="muscle" style = "background-color: white;
                         height: 90px; width: 70%;
                        margin-left: 15%;
                        font-style: normal;
                         font-size: 40px;">
        <option value="" disabled selected>Select your muscle</option>
        <option value="Neck">Neck</option>
        <option value="Traps">Traps</option>
        <option value="Shoulders">Shoulders</option>
        <option value="Chest">Chest</option>
        <option value="Biceps">Biceps</option>
        <option value="Forearm">Forearm</option>
        <option value="Abs">Abs</option>
        <option value="Quads">Quads</option>
        <option value="Calves">Calves</option>
        <option value="Traps">Traps</option>
        <option value="Triceps">Triceps</option>
        <option value="Lats">Lats</option>
        <option value="Middle Back">Middle Back</option>
        <option value="Lower Back">Lower Back</option>
        <option value="Glutes">Glutes</option>
        <option value="Quads">Quads</option>
        <option value="Hamstrings">Hamstrings</option>
        <option value="Calves">Calves</option>
        </select>
        
        <h5></h5>
        <input id="buttons" type="image" src=images/cancel_icon.png>
        <input id="buttons" type="image" src=images/ok_icon.png>
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

</body>

</html>
