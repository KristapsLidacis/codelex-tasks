<?php
$hand = ['rock', 'paper', 'scissors', 'lizard', 'spock'];
$conditions =[
    'rock' => ['scissors', 'lizard'],
    'paper' => ['rock', 'spock'],
    'scissors' => ['lizard', 'paper'],
    'lizard' => ['paper', 'spock'],
    'spock' => ['rock', 'scissors'],
];
$playerHand = readline(implode(',', $hand).' - what you choose? ');
$pcHand = $hand[array_rand($hand)];
if($pcHand === $playerHand){
    echo 'It\'s a tie'.PHP_EOL;
}
if(in_array($pcHand, $conditions[$playerHand])){
    echo 'Player won!'.PHP_EOL;
}
echo 'PC won!'.PHP_EOL;
echo 'Thanks for playing!' .PHP_EOL;

//$turns= 3;
//$playerWon =0;
//$pcWon = 0;
//$gameStop = false;
//while(!$gameStop){
//    $pcHand = $hand[array_rand($hand)];
//    echo "Score PC: $pcWon | Player: $playerWon".PHP_EOL;
//    $playerHand = readline(implode(',', $hand).' - what you choose? ');
//    if($pcHand === $playerHand){
//        echo 'It\'s a tie'.PHP_EOL;
//    }
//    if($pcHand === 'rock'){
//        if($playerHand === 'paper' || $playerHand === 'spock'){
//            echo 'Player won!'.PHP_EOL;
//            $playerWon++;
//        }
//        if($playerHand === 'scissors' || $playerHand === 'lizard'){
//            echo 'PC won!'.PHP_EOL;
//            $pcWon++;
//        }
//    }
//    if($pcHand === 'paper'){
//        if($playerHand === 'rock' || $playerHand === 'spock'){
//            echo 'PC won!'.PHP_EOL;
//            $pcWon++;
//        }
//        if($playerHand === 'scissors' || $playerHand === 'lizard'){
//            echo 'Player won!'.PHP_EOL;
//            $playerWon++;
//        }
//    }
//    if($pcHand === 'scissors'){
//        if($playerHand === 'rock' || $playerHand === 'spock'){
//            echo 'Player won!'.PHP_EOL;
//            $playerWon++;
//        }
//        if($playerHand === 'paper' || $playerHand === 'lizard'){
//            echo 'PC won'.PHP_EOL;
//            $pcWon++;
//        }
//    }
//    if($pcHand === 'spock'){
//        if($playerHand === 'lizard' || $playerHand === 'paper'){
//            echo 'Player won!'.PHP_EOL;
//            $playerWon++;
//        }
//        if($playerHand === 'rock' || $playerHand === 'scissors'){
//            echo 'PC won'.PHP_EOL;
//            $pcWon++;
//        }
//    }
//    if($pcHand === 'lizard'){
//        if($playerHand === 'rock' || $playerHand === 'scissors'){
//            echo 'Player won!'.PHP_EOL;
//            $playerWon++;
//        }
//        if($playerHand === 'paper' || $playerHand === 'spock'){
//            echo 'PC won'.PHP_EOL;
//            $pcWon++;
//        }
//    }
//    if($pcWon === $turns || $playerWon === $turns){
//        $gameStop = true;
//    }
//}
//
