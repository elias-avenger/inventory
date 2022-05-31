<?php
  include "connect.php";
  $query = mysqli_query($conn, "SELECT * FROM user WHERE type='A'");
  if (mysqli_num_rows($query) < 1) {
    header("location: user_reg.php");
  }
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form class="" action="login.php" method="post">
       <input type="email" name="email" placeholder="Enter email address">
       <input type="password" name="password" placeholder="Enter password">
       <input type="submit" value="Log in">
     </form>
   </body>
 </html>
