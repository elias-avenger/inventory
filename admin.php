<?php
  session_start();
  if(!isset($_SESSION['email'])){
    header("location: index.php");
  }
  include "connect.php";
  $e = $_SESSION['email'];
  $query = mysqli_query($conn, "SELECT name FROM user WHERE email = '$e'");
  $array = mysqli_fetch_array($query);
  $n = $array['name'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Welcome <?php print $n; ?> !
    <a href="logout.php"><button type="button"> Logout</button></a>
    
  </body>
</html>
