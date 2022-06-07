<?php

$choice = 0;
do{
    echo "Geometry Calculator\n";
    echo "1. Calculate the Area of a Circle";
    echo "2. Calculate the Area of a Rectangle";
    echo "3. Calculate the Area of a Triangle";
    echo "4. Quit\n";
    echo "Enter your choice (1-4) : ";
    $choice = readline();
    $geometry = new Geometry();
    switch ($choice){
        case 1:
            $radius = readline("Input radius: ");
            echo $geometry->circleArea($radius) .PHP_EOL;
            break;
        case 2:
            $length = readline("Input rectangles length: ");
            $height = readline("Input rectangles height: ");
            echo $geometry->rectangleArea($length, $height).PHP_EOL;
            break;
        case 3:
            $baseLength = readline("Input triangles base length: ");
            $height = readline("Input triangles height: ");
            echo $geometry->rectangleArea($baseLength, $height).PHP_EOL;
            break;
        case 4:
            echo "Exiting calculator".PHP_EOL;
            break;
        default:
            echo "Invalid input".PHP_EOL;
            break;
    }
}while($choice != 4);



class Geometry{
    static function circleArea(float $radius): float{
        if($radius <= 0){
            return error_log("Negative value");
        }
        return round((pi() * $radius * 2), 2);
    }

    static function rectangleArea(float $length, float $width):float{
        if($length <= 0 || $width <= 0){
            return error_log("Negative value");
        }
        return $length * $width;
    }

    static function triangleArea(float $baseLength, float $height):float{
        if($baseLength <= 0 || $height <= 0){
            return error_log("Negative value");
        }
        return $baseLength * $height * 0.5;
    }
}