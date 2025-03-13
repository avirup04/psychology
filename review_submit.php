<?php
include 'controller.php';

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$message=$_POST['message'];

if($message==""){
  ?>
  <script type="text/javascript">
  alert("Please enter Your review");
  window.history.go(-1);
  </script>
  <?php

}
else{


  $currentDate=date('Y-m-d');
  $currentTime=date('H:i:s');
  mysqli_query($conn,"INSERT INTO `review` (`firstname`, `lastname`, `email`,`message`,`date`,`stat`) VALUES ('$firstname','$lastname','$email','$message','$currentDate','1');");
  ?>
  <script type="text/javascript">
  alert("Done");
  document.location="review.php";
  </script>
  <?php
}

 ?>
