<?php

namespace BrainGames\games\calc;

use function Cli\line;
use function Cli\prompt;

function rungame($task, $expr, $correctAnswer)
{
    line("Welcome to the Brain Games!");
    line("$task");
    line("\n");

    $name = prompt("May I have your name?");
    line("Hello, %s!", $name);
    line("\n");

    $maxNumOfRounds = 3;
    for ($i = 1; $i <= $maxNumOfRounds; $i++) {
        line("Question: {$expr[$i]}");
        $answer = prompt("Your answer");
        if ($correctAnswer[$i] != $answer) {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer[$i]}'.");
            line("Let`s try again, {$name}!");
            return;
        } else {
            line("Correct!");
        }
    }
    line("Congratulations, {$name}!");
    return;
}
