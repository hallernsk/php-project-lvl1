<?php

namespace BrainGames\games;

use function Cli\line;
use function Cli\prompt;

const NUM_OF_ROUNDS = 3;

function runGame($task, $question, $correctAnswer)
{
    line("Welcome to the Brain Games!");
    line("$task");
    line("\n");

    $name = prompt("May I have your name?");
    line("Hello, %s!", $name);
    line("\n");

    for ($i = 0; $i < NUM_OF_ROUNDS; $i++) {
        line("Question: {$question[$i]}");
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
