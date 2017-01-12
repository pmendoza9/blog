<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<!-- PHP scripting starts here -->
<?php
echo "Hello World!";

$myString = "hellow World 2.";
$x = 20;
$y = 3.5;
$z = $x + $y;

echo "<p>" . $myString . "</p>";
echo "<p>" . $z . "</p>";

$txt = "W3Schools.com";
echo "I love $txt!";

define ("PI", 3.14159265358979823, false);
echo "<h1>" . PI . "</h1>";

echo 012;


?>

<!-- PHP scripting starts here -->

</body>
</html>