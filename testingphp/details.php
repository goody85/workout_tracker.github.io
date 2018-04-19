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

$workoutid = $_POST['start'];
$sql = "select exercises.`exercise_name`, exercises.`weight`, exercises.`sets`, exercises.`reps`,exercises.`time`,exercises.`muscle`
from exercises
inner join `workout-exercise`
on exercises.id = `workout-exercise`.`exercise_id`
inner join workouts
on `workout-exercise`.`workout_id` = workouts.id
where workouts.id = '$workoutid'
ORDER BY exercises.`exercise_name`";

$details = "";

if (!$res = mysql_query($sql)){
	die('Error:' . mysql_error());
}
while($rows = mysql_fetch_assoc($res))
{
	$details .= "<tr><td colspan='5'>".$rows['exercise_name']."</td><td rowspan='3'><button id='beginbutton'><img class='icons'src='images/gym_icon.PNG'></button></td></tr>".
	"<tr><td>Weight</td><td>Sets</td><td>Reps</td><td>Time</td><td>Muscle</td></tr>".
	"<tr><td>" . $rows['weight'] . "</td><td>" . $rows['sets'] . "</td><td>" . $rows['reps'] . "</td><td>" . $rows['time'] . "</td><td>" . $rows['muscle'] . "</td></tr>";
};

$sql = "Select workout_name from workouts where id='$workoutid'";

if (!$res = mysql_query($sql)){
	die('Error:' . mysql_error());
}
$rows = mysql_fetch_assoc($res);

$_SESSION["workoutheader"] = $rows['workout_name'];
$_SESSION["details"] = $details;	
mysql_close();
header( 'Location: /webdev/workoutdetail.php' );		
?>