<?php

namespace BrainGames\games;

use function Cli\line;
use function Cli\prompt;

const NUM_OF_ROUNDS = 3;

function runGame($task, $questionAnswer)
{
    line("Welcome to the Brain Games!");
    line($task);
    line(); // empty line separator
    $name = prompt("May I have your name?");
    line("Hello, {$name}");
    line();

    for ($i = 0; $i < NUM_OF_ROUNDS; $i++) {
        line("Question: {$questionAnswer[$i][0]}");
        $answer = prompt("Your answer");
        if ($questionAnswer[$i][1] !== $answer) {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$questionAnswer[$i][1]}'.");
            line("Let`s try again, {$name}!");
            return;
        }
        line("Correct!");
    }
    line("Congratulations, {$name}!");
}
