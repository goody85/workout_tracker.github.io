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
		
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['emailaddress'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$gender = $_POST['gender'];
$height = $_POST['height'];
$age = $_POST['age'];
$weight = $_POST['weight'];
		
$id = $_SESSION['userid'];
$sql = "UPDATE users 
SET first_name = '$fname', last_name= '$lname', email= '$email',
 password= '$password1', gender= '$gender', height='$height', age='$age', weight='$weight'
 where users.id = '$id'";

		
if (!mysql_query($sql)){
	die('Error:' . mysql_error());
}
		
mysql_close();
header( 'Location: /webdev/homemenu.php' );
		
?>