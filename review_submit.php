<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'controller.php';

// Escape user input to prevent SQL syntax errors
$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
$rating = mysqli_real_escape_string($conn, $_POST['rating']);
$message = mysqli_real_escape_string($conn, $_POST['message']);

if ($message == "") {
  ?>
  <script type="text/javascript">
    alert("Please enter Your review");
    window.history.go(-1);
  </script>
  <?php
} else {
  $currentDate = date('Y-m-d');
  $currentTime = date('H:i:s');

  // Safe query with escaped values
  mysqli_query($conn, "INSERT INTO `review` (`firstname`, `lastname`, `rating`, `message`, `date`, `stat`) VALUES ('$firstname','$lastname','$rating','$message','$currentDate','1');");
  ?>
  <script type="text/javascript">
    alert("Done");
    document.location = "review.php";
  </script>
  <?php
}

?>
