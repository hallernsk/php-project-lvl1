<?php

namespace BrainGames\games\calc;

use function BrainGames\games\runGame;

use const BrainGames\games\NUM_OF_ROUNDS;

function run()
{
    $task = "What is the result od the expression?";
    $questionExpression = [];
    $correctAnswer = [];
    for ($i = 0; $i < NUM_OF_ROUNDS; $i++) {
        $num1 = mt_rand(1, 10);
        $num2 = mt_rand(1, 10);
        $numSign = mt_rand(0, 2);
        $arrSign = ["+", "-", "*"];
        $sign = $arrSign[$numSign];
        $questionExpression[$i] = "{$num1} {$sign} {$num2}";
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
    runGame($task, $questionExpression, $correctAnswer);
}
