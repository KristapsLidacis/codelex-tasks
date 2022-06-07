<?php
$number = 1998;
$l = 50;
$h = 100;
switch ($number){
    case ($number < $l):
        echo 'low';
        break;
    case($number >= $l && $number <= $h):
        echo 'medium';
        break;
    case($number > $h):
        echo 'high';
        break;
}
