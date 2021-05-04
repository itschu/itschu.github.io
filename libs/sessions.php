<?php	

$path = $_SERVER['PHP_SELF'];
session_start();
if(isset($_SESSION['fan_username']) and isset($_SESSION['fan_email'] ) and isset($_SESSION['fan_id'] )){
	$session_name = $_SESSION['fan_username'];
	$email = $_SESSION['fan_email'];
	$current_user_id = $_SESSION['fan_id'];
	$fan_fullName = $_SESSION['fan_fullname'];

	
	if($path == '/mbm/login.php' or $path == '/mbm/sign-up.php'){
		$ThisMyPath = true;
	}
	$ThisMyPath = true;
} elseif($path == '/mbm/login.php' or $path == '/mbm/sign-up.php'){
	$ThisMyPath = false;
}else{
	$ThisMyPath = false;
} 
$session_cart = $_SESSION['cart'] = array();
//echo "<script> alert('$ThisMyPath');</script>";



if(isset($_GET['logout'])){
	session_destroy();
	header('location: login.php');
}
 
 
?>