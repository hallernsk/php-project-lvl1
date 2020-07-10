<?php

namespace BrainGames\games;

use function Cli\line;
use function Cli\prompt;

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
//        if ($num1 > $num2) {
//            [$num1, $num2] = [$num2, $num1];
//        }
        $min = min($num1, $num2);
        for ($j = $min; $j >= 1; $j--) {
            if ($num1 % $j === 0 && $num2 % $j === 0) {
                $correctAnswer[$i] = $j;
                break;
            }
        }
    }
    rungame($task, $expr, $correctAnswer);
}
