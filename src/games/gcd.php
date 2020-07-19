<?php

namespace BrainGames\games\gcd;

use function BrainGames\games\runGame;

use const BrainGames\games\NUM_OF_ROUNDS;

function getGCD($a, $b)
{
    while ($a !== 0 && $b !== 0) {
        if ($a > $b) {
            $a =  $a % $b;
        } else {
            $b = $b % $a;
        }
    }
    return $a + $b;
}

function run()
{
    $task = "Find the greatest common divisor of given numbers.";
    $questionsAnswers = [];
    for ($i = 0; $i < NUM_OF_ROUNDS; $i++) {
        $num1 = mt_rand(1, 100);
        $num2 = mt_rand(1, 100);
        $questionNums = "{$num1} {$num2}";
        $correctAnswer = (string) getGCD($num1, $num2);
        $questionsAnswers[$i] = [$questionNums, $correctAnswer];
    }
    runGame($task, $questionsAnswers);
}
