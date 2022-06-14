<?php

//Kafijas aparāts -> izveidot programmu, kur ir Maks, kur atrodas Monētas (5 - 1 centi, 3 -2 centi, 5 -5 centi)
//sākumā iemet monētas  - iemest 10, 3- neeksistē, 2 - - 0.12$
//izvēlas dzērienu
//atlikums ir jāizdod monētas (šākot no lielākās)
$wallet =[
    1 => 15,
    2 => 10,
    5 => 4,
    10 => 7,
    20 => 5,
    50 => 3,
    100 => 3,
    200 => 2,
];
$drinkBought = false;
$insertedAmount = 0;
$cost = 120;
$drinks = ['Black Coffee', 'Coffee with milk', 'Chocolate', 'Soup'];
while(!$drinkBought){

    foreach ($wallet as $coin => $amount){
        echo "$coin ($amount) | ";
    }
    echo PHP_EOL;
    $insertedCoin = (int)readline('Insert coin: ');
    echo PHP_EOL;

    if(!isset($wallet[$insertedCoin])){
        echo "Coin not real";
        exit;
    }
    if($wallet[$insertedCoin] <= 0){
        echo "You don't have such coin";
        exit;
    }
    $wallet[$insertedCoin] -= 1;
    $insertedAmount += $insertedCoin;
    echo "Inserted Amount: $insertedAmount".PHP_EOL;

    if($insertedAmount >= $cost){
        echo "Choose Drink ";
        for($i = 0; $i < count($drinks); $i++){
            echo $i. " " .$drinks[$i]." | ";
        }
        echo PHP_EOL;
        $drinkNumber = (int)readline();
        $change = $insertedAmount - $cost;

        $reversed = array_combine(array_reverse(array_keys($wallet)),array_reverse(array_values($wallet)));

        foreach ($reversed as $coin=>$amount){
            $divider = intdiv($change, $coin);
            if($divider != 0) {
                $change -= $coin;
                $wallet[$coin] += 1;
            }
        }


        echo "you bought: ". $drinks[$drinkNumber]. " | Change: ". ($insertedAmount-$cost) .PHP_EOL;

        foreach ($wallet as $coin => $amount){
            echo "$coin ($amount) | ";
        }

        $drinkBought = true;
    }

}

