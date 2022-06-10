<?php
$firstWord = readline('Enter first word: '.PHP_EOL);
$secondWord = readline('Enter second word: '.PHP_EOL);

$loopLength = 30 - strlen($firstWord) - strlen($secondWord);

echo $firstWord;
for($i = 0; $i < $loopLength; $i++){
    echo '.';
}
echo $secondWord.PHP_EOL;


