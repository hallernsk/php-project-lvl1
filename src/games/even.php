<?php

namespace BrainGames\games\even;

use function BrainGames\games\runGame;

use const BrainGames\games\NUM_OF_ROUNDS;

function isEven($num)
{
    return ($num % 2 === 0) ? true : false;
}

function run()
{
    $task = 'Answer "yes" if the number is even, otherwise answer "no".';
    $questionsAnswers = [];
    for ($i = 0; $i < NUM_OF_ROUNDS; $i++) {
        $questionNum = mt_rand(1, 100);
        $correctAnswer = isEven($questionNum) ? "yes" : "no";
        $questionsAnswers[$i] = [$questionNum, $correctAnswer];
    }
    runGame($task, $questionsAnswers);
}
