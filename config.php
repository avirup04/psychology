<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "therapy";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {die("Connection failed: " . mysqli_connect_error());}

date_default_timezone_set('Asia/Kolkata');
$edt=date('Y-m-d');
$edtm=date('d-m-Y H:i:s a');
?>
