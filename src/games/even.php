<?php

namespace BrainGames\games\even;

use function BrainGames\games\runGame;

use const BrainGames\games\NUM_OF_ROUNDS;

function isEven($num)
{
    return $num % 2 === 0;
}

function run()
{
    $task = 'Answer "yes" if the number is even, otherwise answer "no".';
    $questionsAnswers = [];
    for ($i = 0; $i < NUM_OF_ROUNDS; $i++) {
        $question = (string) mt_rand(1, 100);
        $correctAnswer = isEven($question) ? "yes" : "no";
        $questionsAnswers[$i] = [$question, $correctAnswer];
    }
    runGame($task, $questionsAnswers);
}
