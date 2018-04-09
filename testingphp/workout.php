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
if (isset($_POST['workoutname'])) {
    $wname = $_POST['workoutname'];
}

if (isset($_POST['num_of_exercises'])) {
    $noe = $_POST['num_of_exercises'];
}

$sql = "INSERT INTO workouts (workout_name, number_of_exercises) VALUES ('$wname', '$noe')";
		
if (!mysql_query($sql)){
	die('Error:' . mysql_error());
}

$sql = "SELECT max(id) from workouts";
		
if (!$res = mysql_query($sql)){
	die('Error:' . mysql_error());
}
$rows = mysql_fetch_assoc($res);

$_SESSION["lastrow"] = $rows['max(id)'];
$userid = $_SESSION["userid"];
$lastrow = $_SESSION["lastrow"];
$sql = "INSERT INTO `user-workouts` (user_id, workout_id) VALUES ('$userid', '$lastrow')";

if (!mysql_query($sql)){
	die('Error:' . mysql_error());
}

mysql_close();
header( 'Location: /webdev/workouttable.php' );
		
?>