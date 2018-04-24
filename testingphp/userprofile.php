<?php
	session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <link rel="stylesheet" type="text/css" href="css/homestyle.css">
    <!--title>User Profile</title-->
    <title>User Profile</title>
	</head>
<body>
<h1 class="topname">User Profile</h1>
<br>
<br>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/dumbbell.png" alt="dumbbell" style="width:20%">
      <div class="container">
        <p class="title">About Me</p>
		<table>
         <?php echo $_SESSION["userprofile"] ?>
		</table>
					
      </div>
    </div>
  </div>
</div>

<!--/body>
</html>

<body-->
    <!--h1 class="topname">User Profile</h1>
	<form action="userprofiledetail.php" method="get">
    <div id="innertable">
        <table class="usertable">
            <tr>
                <th id="tabletitle">First Name</th>
                <th id="tabletitle">Last Name</th>
                <th id="tabletitle">Email</th>
                <th id="tabletitle">Gender</th>
            </tr>
					<?php echo $_SESSION["userprofile"] ?>
					</table>
    </div>
	</form-->
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
<!--body>
    <h1 class="topname">About Me</h1>
	<form action="details.php" method="post">
    <div id="innertable">
        <table class="workoutstable">
            <tr>
                <th id="tabletitle">First Name</th>
                <th id="tabletitle">Last Name</th>
				<th id="tabletitle">Email</th>
                <th id="tabletitle">Gender</th>
				<th id="tabletitle">Height</th>
                <th id="tabletitle">Weight</th>
				<th id="tabletitle">Age</th>
            </tr>
            <!--?php echo $_SESSION["workouttable"]; ?>
        </table>
    </div>
	</form>
    <div>
        <nav class="navbar bottom-nav">
            <table class="bottom-nav">
                <!--tr>
                    <!--td colspan="5" class="create-button">
                        <button id="createbutton" onClick="document.location.href='workout2.php';">Create Workout</button>
                        <!--<input type="image" src="images/create_workout_btn.png" onClick="document.location.href='workout2.php';" />
                    </td>
                </tr-->
                <!--tr>
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

<!--body>

    <div class="form">

        <div id="login">
            <h1>About Me</h1>

            <form action="userprofileform.php" method="get">

                <div class="field-wrap">
                    <label>
                       First Name:<span class="req">*</span>
                    </label>

                    <input type="text" name="firstname" />
                </div>
			
				<br>
				<br>
                <div class="field-wrap">
                    <label>
                        Last Name:<span class="req">*</span>
                    </label>

                    <input type="text" name="lastname" />
                </div>

				<br>
				<br>
                <!--p class="forgot"><a href="signupform.php">Need an Account?</a></p-->

                <!--button class="button button-block"/>Log In</button-->
                <!--button class="button button-block" onClick="document.location.href='homepage.html';">Log In</button-->
                <!--button class="button button-block" onClick="document.location.href='homepage.html';">Log In</button-->
                <!--button type="submit" class="button button-block" onClick="document.location.href='homepage.html';">Log In</button-->
                <!--button type="submit" onClick="document.location.href='homepage.php' class="button button-block">Log In</button-->

				<!--br>
				<br>
                <button type="submit" onClick="document.location.href='homepage.php'" class="button button-block">Log In</button-->
				
				<!--table class="mainmenu">
		<tr>
		<td onClick="document.location.href='userprofile.php';"><img id="mainicons" src="images/home_menu_profile.png"></td>
		<td onClick="document.location.href='workouttable.php';"><img id="mainicons" src="images/home_menu_gym.png"></td>
		</tr>
		<tr>
		<td onClick="document.location.href='index.php';"><img id="mainicons" src="images/home_menu_settings.png"></td>
		<td onClick="document.location.href='index.php';"><img id="mainicons" src="images/home_menu_signout.png"></td>
		</tr>
		</table-->

            <!--/form>
        </div>
    </div>
	
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
</html-->