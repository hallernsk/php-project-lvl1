<?php

namespace BrainGames\games\gcd;

use function BrainGames\games\runGame;

use const BrainGames\games\NUM_OF_ROUNDS;

function getGcd($a, $b)
{
    while ($a != $b) {
        if ($a > $b) {
            $a =  $a - $b;
        } else {
            $b = $b - $a;
        }
    }
    return $b;
}

function run()
{
    $task = "Find the greatest common divisor of given numbers.";
    $questionNums = [];
    $correctAnswer = [];
    for ($i = 0; $i < NUM_OF_ROUNDS; $i++) {
        $num1 = mt_rand(1, 100);
        $num2 = mt_rand(1, 100);
        $questionNums[$i] = "{$num1} {$num2}";
        $correctAnswer[$i] = getGcd($num1, $num2);
    }
    runGame($task, $questionNums, $correctAnswer);
}
