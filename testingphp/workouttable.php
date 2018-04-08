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
$sql = "select workouts.`workout_name`, workouts.`number_of_excercises`
from workouts
inner join `user-workouts`
on workouts.id = `user-workouts`.`workout_id`
inner join users
on `user-workouts`.`user_id` = users.id
where users.email = '$email'";
$wkttable = "";

if (!$res = mysql_query($sql)){
	die('Error:' . mysql_error());
}
while($rows = mysql_fetch_assoc($res))
{
	$wkttable .= "<tr><td>".$rows['workout_name']."</td><td>".$rows['number_of_excercises']."</td></tr>";
};

$_SESSION["workouttable"] = $wkttable;	
mysql_close();
header( 'Location: /webdev/homepage.php' );		
?>