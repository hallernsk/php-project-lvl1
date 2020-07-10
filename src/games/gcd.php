<?php

namespace BrainGames\games;

use function Cli\line;
use function Cli\prompt;

function get_gcd($a, $b)
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

function rungcd()
{
    $task = "Find the greatest common divisor of given numbers.";
    $maxNumOfRounds = 3;
    $expr = [];
    $correctAnswer = [];
    for ($i = 0; $i < $maxNumOfRounds; $i++) {
        $num1 = mt_rand(1, 100);
        $num2 = mt_rand(1, 100);
        $expr[$i] = "{$num1} {$num2}";
        $correctAnswer[$i] = get_gcd($num1, $num2);
    }
    rungame($task, $expr, $correctAnswer);
}
