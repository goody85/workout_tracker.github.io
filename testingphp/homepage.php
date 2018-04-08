<?php
	session_start();
?>
<!doctype html>
<html lang="en">
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
  <link rel="stylesheet" type="text/css" href="css/homestyle.css">
	<title>Home Page</title>
  </head>
  
  <body>
	<h1 class="topname">The Gym</h1>
	<table class="workoutstable">
		<tr>
			<th>Workout</th>
			<th># Of Excercises</th>
			<th>Edit Button</th>
			<th>Start Button</th>
		</tr>
		<?php echo $_SESSION["workouttable"]; ?>
	</table>
	<div>
	<nav class="navbar bottom-nav">
			<table class="bottom-nav">
				<tr>
					<td colspan="5" class="create-button">
						<input type="image" src="images/create_workout_btn.png" onClick="document.location.href='workout2.php';" />
					</td>
				</tr>
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
