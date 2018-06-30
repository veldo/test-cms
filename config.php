<?php
$myHost = 'localhost';
$myUser = 'root';
$myPass = '';
$myDbs = 'cms_db';

$connectdb = mysqli_connect($myHost, $myUser, $myPass, $myDbs);

if (mysqli_connect_errno()){
	echo "Database Connection Failed : " . mysqli_connect_error();
}

?>