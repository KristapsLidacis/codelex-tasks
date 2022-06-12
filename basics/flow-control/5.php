<?php
$input = strtolower(readline('Give me a sign:' ));

for($i = 0; $i < strlen($input); $i++){
    if($input[$i] === 'a' || $input[$i] === 'b'|| $input[$i] === 'c'){
        echo '2';
    }elseif($input[$i] === 'd' || $input[$i] === 'e'|| $input[$i] === 'f') {
        echo '3';
    }
    elseif($input[$i] === 'g' || $input[$i] === 'h'|| $input[$i] === 'i') {
        echo '4';
    }
    elseif($input[$i] === 'j' || $input[$i] === 'k'|| $input[$i] === 'l') {
        echo '5';
    }
    elseif($input[$i] === 'm' || $input[$i] === 'n'|| $input[$i] === 'o') {
        echo '6';
    }
    elseif($input[$i] === 'p' || $input[$i] === 'q'|| $input[$i] === 'r' || $input[$i] === 's') {
        echo '7';
    }
    elseif($input[$i] === 't' || $input[$i] === 'u'|| $input[$i] === 'v') {
        echo '8';
    }
    elseif($input[$i] === 'w' || $input[$i] === 'x'|| $input[$i] === 'y' || $input[$i] === 'z') {
        echo '9';
    }
    else{
        echo ' ';
    }

}
echo ' '.PHP_EOL;
for($i = 0; $i < strlen($input); $i++){
    switch ($input[$i]){
        case 'a':
        case 'b':
        case 'c':
            echo '2';
            break;
        case 'd':
        case 'e':
        case 'f':
            echo '3';
            break;
        case 'g':
        case 'h':
        case 'i':
            echo '4';
            break;
        case 'j':
        case 'k':
        case 'l':
            echo '5';
            break;
        case 'm':
        case 'n':
        case 'o':
            echo '6';
            break;
        case 'p':
        case 'q':
        case 'r':
        case 's':
            echo '7';
            break;
        case 't':
        case 'u':
        case 'v':
            echo '8';
            break;
        case 'w':
        case 'x':
        case 'y':
        case 'z':
            echo '9';
            break;
        default:
                echo " ";
            break;
    }
}