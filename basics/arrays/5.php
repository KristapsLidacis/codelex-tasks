<?php

$gameTable = [[' ', ' ', ' '], [' ', ' ', ' '], [' ', ' ', ' ']];
$winner = false;
$player = 0;


while(!$winner){
    switch($player){
        case 0:
            printTable($gameTable);
            //var_dump($gameTable);
            echo '\'O\', choose your location (row, column): ';
            $location = explode(' ', readline());
            if(is_numeric($location[0]) && is_numeric($location[1])){
                if((int)$location[0] < 3 && (int)$location[1] < 3){
                    if($gameTable[(int)$location[0]][(int)$location[1]] != ' '){
                        echo "it's already taken" .PHP_EOL;
                        break;
                    }else{
                        $gameTable[(int)$location[0]][(int)$location[1]] = 'O';
                    }
                }else {
                    echo "Write cords that are from 0 to 2" .PHP_EOL;
                    $player = 0;
                    break;
                }
            }else{
                echo "Write cords that are from 0 to 2" .PHP_EOL;
                $player = 0;
                break;
            }

            $winner = getWinner($gameTable);
            $player = 1;

            break;
        case 1:
            printTable($gameTable);
            //var_dump($gameTable);
            echo '\'X\', choose your location (row, column): ';
            $location = explode(' ', readline());
            if(is_numeric($location[0]) && is_numeric($location[1])){
                if((int)$location[0] < 3 && (int)$location[1] < 3){
                    if($gameTable[(int)$location[0]][(int)$location[1]] != ' '){
                        echo "it's already taken" .PHP_EOL;
                        break;
                    }else{
                        $gameTable[(int)$location[0]][(int)$location[1]] = 'X';
                    }
                }else {
                    echo "Write cords that are from 0 to 2" .PHP_EOL;
                    $player = 1;
                    break;
                }
            }else {
                echo "Write cords that are from 0 to 2" . PHP_EOL;
                $player = 1;
                break;
            }
            $winner = getWinner($gameTable);
            $player = 0;

            break;
    }
}

printTable($gameTable);
echo $player === 1 ? "The winner is 'O'!":"The winner is 'X'" .PHP_EOL;
echo 'Thank you for playing!';

function printTable(array $table): void{
    foreach ($table as $row){
        echo " " .implode(' | ', $row) .PHP_EOL;
        echo "---+---+---" .PHP_EOL;
    }
}
function getWinner(array $gameTable): bool{
    if($gameTable[0][0] === $gameTable[0][1]  && $gameTable[0][1] === $gameTable[0][2]){
        if($gameTable[0][0] != ' ') {
            return true;
        }
    }
    if($gameTable[1][0] === $gameTable[1][1]  && $gameTable[1][1] === $gameTable[1][2]){
        if($gameTable[1][0] != ' ') {
            return true;
        }
    }
    if($gameTable[2][0] === $gameTable[2][1]  && $gameTable[2][1] === $gameTable[2][2]){
        if($gameTable[2][0] != ' ') {
            return true;
        }
    }
    if($gameTable[0][0] === $gameTable[1][0]  && $gameTable[1][0] === $gameTable[2][0]){
        if($gameTable[0][0] != ' ') {
            return true;
        }
    }
    if($gameTable[0][1] === $gameTable[1][1]  && $gameTable[1][1] === $gameTable[2][1]){
        if($gameTable[0][1] != ' ') {
            return true;
        }
    }
    if($gameTable[0][2] === $gameTable[1][2]  && $gameTable[1][2] === $gameTable[2][2]){
        if($gameTable[0][2] != ' ') {
            return true;
        }
    }
    if($gameTable[0][0] === $gameTable[1][1]  && $gameTable[1][1] === $gameTable[2][2]){
        if($gameTable[0][0] != ' ') {
            return true;
        }
    }
    if($gameTable[0][2] === $gameTable[1][1]  && $gameTable[1][1] === $gameTable[2][0]){
        if($gameTable[0][2] != ' ') {
            return true;
        }
    }
    return false;
}