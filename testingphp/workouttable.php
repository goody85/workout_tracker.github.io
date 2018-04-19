<?php
session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
define('DB_NAME', 'webdev');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if(!$link){
	die('Could not connect: ' . mysql_error());
}
	
$db_selected = mysql_select_db(DB_NAME, $link);
	
if (!$db_selected){
	die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
}
		
$email = $_SESSION["useremail"];
$sql = "select workouts.id, workouts.`workout_name`, workouts.`number_of_exercises`
from workouts
inner join `user-workouts`
on workouts.id = `user-workouts`.`workout_id`
inner join users
on `user-workouts`.`user_id` = users.id
where users.email = '$email'";
$wkttable = "";
$button = "onClick=" . "document.location.href=" . "'details.php'" . ";";
$button2 = "onClick=" . "document.location.href=" . "'removeworkout.php'" . ";";

if (!$res = mysql_query($sql)){
	die('Error:' . mysql_error());
}
while($rows = mysql_fetch_assoc($res))
{
	$wkttable .= "<tr><td id='workouttd'>".$rows['workout_name']."</td><td id='exercisetd'>".$rows['number_of_exercises']."</td><td><button type='button' name='delete' id='deletebutton' value=" . $rows['id'] . " " . $button2 . "><img class='icons'src='images/delete_icon.PNG'></button></td><td><button type='submit' name = 'start' id='startbutton' value=" . $rows['id'] . " " . $button . "><img class='icons'src='images/start_icon.PNG'></button></td></tr>";
};

$sql = "select id from users where email = '$email'"; 
if (!$res = mysql_query($sql)){
	die('Error:' . mysql_error());
}
$rows = mysql_fetch_assoc($res);

$_SESSION["userid"] = $rows['id'];
$_SESSION["workouttable"] = $wkttable;	
mysql_close();
header( 'Location: /webdev/homepage.php' );		
?>