<?php
	session_start();
?>
<!doctype html>
<html lang="en">
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
  <link rel="stylesheet" type="text/css" href="css/homestyle.css">
	<title>Home Menu</title>
  </head>
  
  <body>
	<h1 class="topname">The Locker Room</h1>
		<table class="mainmenu">
		<tr>
		<td onClick="document.location.href='userprofiledetail.php';"><img id="mainicons" src="images/home_menu_profile.png"></td>
		<td onClick="document.location.href='workouttable.php';"><img id="mainicons" src="images/home_menu_gym.png"></td>
		</tr>
		<tr>
		<td onClick="document.location.href='settingform.php';"><img id="mainicons" src="images/home_menu_settings.png"></td>
		<td onClick="document.location.href='index.php';"><img id="mainicons" src="images/home_menu_signout.png"></td>
		</tr>
		</table>
  </body>
</html>
