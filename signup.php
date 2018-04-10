<?php
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
		
$sql = "INSERT INTO users (first_name, last_name, email, password, gender, height, age, weight) VALUES ('$fname','$lname', '$email', '$password1', '$gender', '$height', '$age', '$weight')";
		
if (!mysql_query($sql)){
	die('Error:' . mysql_error());
}
		
mysql_close();
header( 'Location: /webdev/loginform.php' );
		
?>