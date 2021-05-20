<?php
  session_start();
  $hi = "Hello World <br>";
  echo $hi;

  if(isset($_SESSION['user']))
  {
    $user = $_SESSION['user'];
    $sid = session_id();
    $sfile = session_save_path() . "\sess_" . $sid;
    echo "Session is set. Output is - " . $user . "<br> and the session ID is <b>" . $sid . "</b>";
    echo "<br> The SESSION ID is stored at: " . $sfile;
  } else {
    echo "Session not set";
    $_SESSION['user'] = "Adam Smith";
  }
?>
