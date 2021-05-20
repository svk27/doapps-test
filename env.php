<?php
echo "Testing out Environment Variables <br>";
echo "<br> You should see the text mentioned within the Environment variable called <b>KEY</b>";
echo "<br><br>";
$variable = getenv('KEY');
echo $variable;
?>
