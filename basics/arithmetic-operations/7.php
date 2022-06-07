<?php
$a = -9.81;
$t = 10;
$Vi = readline("Initial velocity (m/s): ");
$Xi = readline("Initial position: ");

echo -9.81 * ($t^2) .PHP_EOL;
echo 0.5 * (-9.81 * ($t^2)) .PHP_EOL;
$xt = (0.5 * (-9.81 * ($t^2))) + ($Vi*$t) + $Xi;

echo "x(t) = 0.5 * a*t^2 +Vi*t + Xi = $xt";