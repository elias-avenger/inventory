<?php
  include "connect.php";
  $n = $_POST['name'];
  $p = $_POST['phone'];
  $e = $_POST['email'];
  $pwd = $_POST['pass'];

  $query = mysqli_query($conn, "SELECT * FROM user WHERE type='A'");

  if(mysqli_num_rows($query) < 1) {
    $user_type = 'A';
  } else {
    $user_type='N';
  }

  mysqli_query($conn, "INSERT INTO user(name, phone, email, password, type) VALUES('$n', '$p', '$e', '$pwd','$user_type')")
  or die("Failed to insert user: ".mysqli_error($conn));
  print $n." has been successfully registered!";
?>
