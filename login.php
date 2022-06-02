<?php
  session_start();
  include "connect.php";
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $qry = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email' AND password = '$pass'");
  if(mysqli_num_rows($qry) === 1){
    //session_start();
    $_SESSION['email'] = $_POST['email'];
    $arr = mysqli_fetch_array($qry);
    $t = $arr['type'];
    if($t === 'A')
    {
      header("location: admin.php");
    }
    elseif ($t === 'N') {
      header("location: dashboard.php");
    }
    else {
      print "Cannot determine the user type! ";
    }
  }
  else {
    header("location: index.php");
  }
?>
