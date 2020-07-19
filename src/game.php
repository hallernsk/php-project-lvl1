<?php

namespace BrainGames\games;

use function Cli\line;
use function Cli\prompt;

const NUM_OF_ROUNDS = 3;

function runGame($task, $questionsAnswers)
{
    line("Welcome to the Brain Games!");
    line($task);
    line(); // empty line separator
    $name = prompt("May I have your name?");
    line("Hello, {$name}");
    line();

    foreach ($questionsAnswers as [$question, $answer]) {
        line("Question: {$question}");
        $userAnswer = prompt("Your answer");
        if ($userAnswer !== $answer) {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$answer}'.");
            line("Let`s try again, {$name}!");
            return;
        }
        line("Correct!");
    }
    line("Congratulations, {$name}!");
}
