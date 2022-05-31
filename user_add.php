<?php
  include "connect.php";
  $n = $_POST['name'];
  $p = $_POST['phone'];
  $e = $_POST['email'];
  $pwd = $_POST['pass'];
  mysqli_query($conn, "INSERT INTO user(name, phone, email, password) VALUES('$n', '$p', '$e', '$pwd')")
  or die("Failed to insert user: ".mysqli_error($conn));
  print $n." has been successfully registered!";
?>
