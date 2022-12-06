<?php
$mysqli = new mysqli("localhost","root","","web_php");

// Check connection
if ($mysqli->connect_errno) {
  echo "Kết nối lỗi " . $mysqli -> connect_error;
  exit();
}
?>
