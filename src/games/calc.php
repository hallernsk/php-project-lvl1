<?php

namespace BrainGames\games\calc;

use function BrainGames\games\runGame;

use const BrainGames\games\NUM_OF_ROUNDS;

function calc($num1, $num2, $sign)
{
    switch ($sign) {
        case "+":
            return $num1 + $num2;
        case "-":
            return $num1 - $num2;
        case "*":
            return $num1 * $num2;
        default:
            return null;
    }
}

function run()
{
    $task = "What is the result of the expression?";
    $questionsAnswers = [];
    $operators = ["+", "-", "*"];
    for ($i = 0; $i < NUM_OF_ROUNDS; $i++) {
        $num1 = mt_rand(1, 10);
        $num2 = mt_rand(1, 10);
        $operatorIndex = array_rand($operators);
        $sign = $operators[$operatorIndex];
        $question = "{$num1} {$sign} {$num2}";
        $correctAnswer = (string) calc($num1, $num2, $sign);
        $questionsAnswers[$i] = [$question, $correctAnswer];
    }
    runGame($task, $questionsAnswers);
}
