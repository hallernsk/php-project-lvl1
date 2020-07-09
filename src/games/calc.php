<?php

namespace BrainGames\games\calc;

use function Cli\line;
use function Cli\prompt;

function runcalc()
{
    $task = "What is the result od the expression?";
    $maxNumOfRounds = 3;
    $expr = [];
    $correctAnswer = [];
    for ($i = 1; $i <= $maxNumOfRounds; $i++) {
        $num1 = mt_rand(1, 10);
        $num2 = mt_rand(1, 10);
        $numSign = mt_rand(0, 2);
        $arrSign = ["+", "-", "*"];
        $sign = $arrSign[$numSign];
        $expr[$i] = "{$num1} {$sign} {$num2}";
        switch ($numSign) {
            case 0:
                $correctAnswer[$i] = $num1 + $num2;
                break;
            case 1:
                $correctAnswer[$i] = $num1 - $num2;
                break;
            default:
                $correctAnswer[$i] = $num1 * $num2;
        }
    }
    rungame($task, $expr, $correctAnswer);
}
