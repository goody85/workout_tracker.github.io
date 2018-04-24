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
		
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "Select email, password From users where email = '$email'";
$dbemail = 'email';
$dbpassword	= 'password';
if (!$res = mysql_query($sql)){
	die('Error:' . mysql_error());
}
$rows = mysql_fetch_assoc($res);

if ($password === $rows[$dbpassword]){
	$_SESSION["useremail"] = $email;
	header( 'Location: /webdev/homemenu.php' );
}else{
$message = "Wrong Password! Try Again";
echo "<script type='text/javascript'>alert('$message');</script>";
header('Refresh:0; url=loginform.php');
}
$sql = "select id from users where email = '$email'"; 
if (!$res = mysql_query($sql)){
	die('Error:' . mysql_error());
}
$rows = mysql_fetch_assoc($res);

$_SESSION["userid"] = $rows['id'];
mysql_close();
		
?>