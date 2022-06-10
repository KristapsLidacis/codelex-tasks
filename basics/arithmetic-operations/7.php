<?php
//Modify the example program to compute the position of an object after falling for 10 seconds,
// outputting the position in meters. The formula in Math notation is:
$a = -9.81;
$t = 10;
//$Vi = readline("Initial velocity (m/s): ");
//$Xi = readline("Initial position: ");
$Xi =0;
$Vi=0;
//echo -9.81 * ($t*$t) .PHP_EOL;
//echo 0.5 * (-9.81 * ($t*$t)) .PHP_EOL;
$xt = (0.5 * (-9.81 * ($t*$t) + ($Vi*$t))) + $Xi;

echo "x(t) = 0.5 * a*t^2 +Vi*t + Xi = $xt" .PHP_EOL;