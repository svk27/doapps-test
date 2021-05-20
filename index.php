<?php
  session_start();
  $hi = "Hello World <br>";
  echo $hi;

  if(isset($_SESSION['user']))
  {
    $user = $_SESSION['user'];
    echo "Session is set. Output is - " . $user;
  } else {
    echo "Session not set";
    $_SESSION['user'] = "John Doe";
  }
?>
