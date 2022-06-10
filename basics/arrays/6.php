<?php
function getWord($words): string{
    return $words[rand(0, 9)];
}

$words = ['song', 'chemistry', 'phone', 'revenue', 'celebration', 'psychology', 'diamond','property', 'tale',
    'audience'];
$question = "again";
while($question != "quit"){
    $word = str_split(getWord($words));

    $guessArray = array_fill(0, count($word), '_');

    $guessed = false;
    $misses = [''];


    while(!$guessed){
        if(in_array('_', $guessArray)) {
            if (count($misses) != 15) {
                echo '-=-=-=-=-=-=-=-=-=-=-=-=-=-' . PHP_EOL;
                echo 'Word: ' . implode(' ', $guessArray) . PHP_EOL;
                echo 'Misses: ' . implode($misses) . PHP_EOL;
                $guess = readline('Guess: ');

                if(in_array($guess, $word)) {
                    for($i = 0; $i < count($word); $i++){
                        if($word[$i] === $guess){
                            $guessArray[$i] = $guess;
                        }
                    }
                } else {
                    $misses[] = $guess;
                }
            } else {
                $guessed = true;
            }
        }
        else{
            $guessed = true;
        }
    }
    if(count($misses) != 15){
        echo "YOU GOT IT!";
    }else{
        echo 'sorry you lost';
    }
    echo 'Play "again" or "quit"? ';
    $question = readline();
}



