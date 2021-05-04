<?php

ob_start();

define ('HOST', 'localhost');
define ('USER', 'root');
define ('PASSWORD', '');
define ('DATABASE', 'zimma');

$con = new mysqli(HOST, USER, PASSWORD, DATABASE);

if(!$con){
	echo "An error occured ".$con->connect_error();
}else{
	//echo "connected";
}



?>
