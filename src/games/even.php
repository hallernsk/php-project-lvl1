<?php

namespace BrainGames\games;

use function Cli\line;
use function Cli\prompt;

function runeven()
{
    $task = 'Answer "yes" if the number is even, otherwise answer "no".';
    $maxNumOfRounds = 3;
    $num = [];
    $correctAnswer = [];
    for ($i = 0; $i < $maxNumOfRounds; $i++) {
        $num[$i] = mt_rand(1, 100);
        $correctAnswer[$i] = ($num[$i] % 2 == 0) ? "yes" : "no";
    }
    rungame($task, $num, $correctAnswer);
}
