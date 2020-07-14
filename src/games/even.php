<?php

namespace BrainGames\games;

use function Cli\line;
use function Cli\prompt;

function runeven()
{
    $task = 'Answer "yes" if the number is even, otherwise answer "no".';
    $maxNumOfRounds = 3;
    $questionNum = [];
    $correctAnswer = [];
    for ($i = 0; $i < $maxNumOfRounds; $i++) {
        $questionNum[$i] = mt_rand(1, 100);
        $correctAnswer[$i] = ($questionNum[$i] % 2 == 0) ? "yes" : "no";
    }
    rungame($task, $questionNum, $correctAnswer);
}
