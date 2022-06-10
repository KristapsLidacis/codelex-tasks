<?php
//Design a Geometry class with the following methods:
//
//A static method that accepts the radius of a circle and returns the area of the circle. Use the following formula:
//Area = π * r * 2
//Use Math.PI for π and r for the radius of the circle
//A static method that accepts the length and width of a rectangle and returns the area of the rectangle.
// Use the following formula:
//Area = Length x Width
//A static method that accepts the length of a triangle’s base and the triangle’s height.
// The method should return the area of the triangle. Use the following formula:
//Area = Base x Height x 0.5
//The methods should display an error message if negative values are used for the circle’s radius,
// the rectangle’s length or width, or the triangle’s base or height.

//Actually we did not need to use classes (as teacher sad in 07.06.22 lecture)
$choice = 0;
do{
    echo "Geometry Calculator\n";
    echo "1. Calculate the Area of a Circle";
    echo "2. Calculate the Area of a Rectangle";
    echo "3. Calculate the Area of a Triangle";
    echo "4. Quit\n";
    echo "Enter your choice (1-4) : ";
    $choice = (int)readline();

    switch ($choice){
        case 1:
            $radius = (float)readline("Input radius: ");
            echo circleArea($radius) .PHP_EOL;
            break;
        case 2:
            $length = (float)readline("Input rectangles length: ");
            $height = (float)readline("Input rectangles height: ");
            echo rectangleArea($length, $height).PHP_EOL;
            break;
        case 3:
            $baseLength = (float)readline("Input triangles base length: ");
            $height = (float)readline("Input triangles height: ");
            echo rectangleArea($baseLength, $height).PHP_EOL;
            break;
        case 4:
            echo "Exiting calculator".PHP_EOL;
            break;
        default:
            echo "Invalid input".PHP_EOL;
            break;
    }
}while($choice != 4);

    function circleArea(float $radius): float{
        if($radius <= 0){
            return error_log("Negative value");
        }
        return round((pi() * $radius * 2), 2);
    }
    function rectangleArea(float $length, float $width):float{
        if($length <= 0 || $width <= 0){
            return error_log("Negative value");
        }
        return $length * $width;
    }
    function triangleArea(float $baseLength, float $height):float{
        if($baseLength <= 0 || $height <= 0){
            return error_log("Negative value");
        }
        return $baseLength * $height * 0.5;
    }
