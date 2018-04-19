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

$workoutid = $_POST['delete'];
$sql = "delete from workouts where id = '$workoutid'";

if (!$res = mysql_query($sql)){
	die('Error:' . mysql_error());
}
	
mysql_close();
header( 'Location: /webdev/workouttable.php' );		
?>