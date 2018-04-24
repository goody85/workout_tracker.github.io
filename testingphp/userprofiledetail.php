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

$id = $_SESSION['userid'];
$sql = "select users.`first_name`, users.`last_name`, users.`email`, users.`email`,users.`gender`,users.`height`,users.`weight`,users.`age`
from users
where users.id = '$id'";

$userprofiledetails = "";


if (!$res = mysql_query($sql)){
	die('Error:' . mysql_error());
}
while($rows = mysql_fetch_assoc($res))
{

	$userprofiledetails .= 
	"<tr><td>First Name:</td><td>&nbsp;</td><td><td>&nbsp;</td><td>Last Name:</td></tr>".
	"<tr><td>" . $rows['first_name'] . "</td><td>&nbsp;</td><td>&nbsp;</td><td><td>" . $rows['last_name'] . "</td></tr>".
	"<tr><td>Email</td><td>&nbsp;</td><td>&nbsp;</td><td><td>Gender</td></tr>".
	"<tr><td>" . $rows['email'] . "</td><td>&nbsp;</td><td><td>&nbsp;</td><td>" . $rows['gender'] . "</td></tr>".
	"<tr><td>Height</td><td>Weight</td><td>&nbsp;</td><td>&nbsp;</td><td><td>Age</td></tr>".
	"<tr><td>" . $rows['height'] . "</td><td>" . $rows['weight'] . "</td><td>&nbsp;</td><td><td>&nbsp;</td><td>" . $rows['age'] . "</td></tr>";
};

$_SESSION["userprofile"] = $userprofiledetails;
mysql_close();
header( 'Location: /webdev/userprofile.php' );		
?>
