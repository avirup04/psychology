<?php
include 'config.php';
date_default_timezone_set("Asia/Kolkata");
$currentDate=date('Y-m-d');
$currentDateTime=date('Y-m-d H:i:s');
$ck=0;
session_start();
if(isset($_SESSION["loginKey"]) && $_SESSION["loginKey"]!=''){
	$API_TOKEN = mysqli_real_escape_string($conn,$_SESSION["loginKey"]);
	if(mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `login_key` WHERE `loginKey`='$API_TOKEN' AND `stat`=1"))){
    $getUserid=mysqli_query($conn,"SELECT * FROM `login_key` WHERE `loginKey`='$API_TOKEN'");
    while($rowUserid=mysqli_fetch_array($getUserid)){
      $username=$rowUserid['username'];
    }
		$get_ck_admin=mysqli_query($conn,"SELECT * FROM `edu_login` WHERE `username`='$username' AND `stat`=1");
	  if($row_ck_admin = mysqli_fetch_array($get_ck_admin)){
			$ck=1;
			$log_username=$row_ck_admin['username'];
			$log_password=$row_ck_admin['password'];
			$log_fullname=$row_ck_admin['fullname'];
	    //	 $log_mobile=$row_ck_admin['mobile'];
	    $log_userlevel=$row_ck_admin['userlevel'];
		}
	}
	else {
		$ck=0;
		session_destroy();
		session_unset();
		session_start();
	}
}
else{
	$ck=0;
	session_destroy();
	session_unset();
	session_start();
}
?>
