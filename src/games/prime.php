<?php

namespace BrainGames\games\prime;

use function BrainGames\games\runGame;

use const BrainGames\games\NUM_OF_ROUNDS;

function isPrime($num)
{
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

function run()
{
    $task = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $questionNum = [];
    $correctAnswer = [];
    for ($i = 0; $i < NUM_OF_ROUNDS; $i++) {
        $num = mt_rand(1, 100);
        $questionNum[$i] = "{$num}";
        $correctAnswer[$i] = (isPrime($num)) ? "yes" : "no";
    }
    runGame($task, $questionNum, $correctAnswer);
}
