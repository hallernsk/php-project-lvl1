<?php

namespace BrainGames\games;

use function Cli\line;
use function Cli\prompt;

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

function runprime()
{
    $task = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $maxNumOfRounds = 3;
    $expr = [];
    $correctAnswer = [];
    for ($i = 0; $i < $maxNumOfRounds; $i++) {
        $num = mt_rand(1, 100);
        $expr[$i] = "{$num}";
        $correctAnswer[$i] = (isPrime($num)) ? "yes" : "no";
    }
    rungame($task, $expr, $correctAnswer);
}
