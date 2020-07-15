<?php

namespace BrainGames\games\even;

use function BrainGames\games\runGame;

use const BrainGames\games\NUM_OF_ROUNDS;

function isEven($num)
{
    if ($num % 2 == 0) {
        return true;
    }
    return false;
}

function run()
{
    $task = 'Answer "yes" if the number is even, otherwise answer "no".';
    $questionNum = [];
    $correctAnswer = [];
    for ($i = 0; $i < NUM_OF_ROUNDS; $i++) {
        $questionNum[$i] = mt_rand(1, 100);
        $correctAnswer[$i] = (isEven($questionNum[$i])) ? "yes" : "no";
    }
    runGame($task, $questionNum, $correctAnswer);
}
