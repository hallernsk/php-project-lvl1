<?php

namespace Brain\Games\even;

use function Cli\line;
use function Cli\prompt;

function run()
{
    line("Welcome to the Brain Games!");
    line('Answer "yes" if the number is even, otherwise answer "no".');
    line("\n");

    $name = prompt("May I have your name?");
    line("Hello, %s!", $name);
    line("\n");

    $numOfQuestions = 3;
    for ($i = 1; $i <= $numOfQuestions; $i++) {
        $num = mt_rand(1, 100);
        line("Question: {$num}");
        $answer = prompt("Your answer");
        $correctAnswer = ($num % 2 == 0) ? "yes" : "no";
        if ($correctAnswer !== $answer) {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let`s try again, {$name}!");
            return;
        } else {
            line("Correct!");
        }
    }
    line("Congratulations, {$name}!");
    return;
}
