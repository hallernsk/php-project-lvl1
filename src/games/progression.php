<?php

namespace BrainGames\games;

use function Cli\line;
use function Cli\prompt;

function runprogression()
{
    $task = "What number is missing in the progression?";
    $maxNumOfRounds = 3;
    $correctAnswer = [];
    $expr = [];
    $arrProgression = [];
    for ($i = 0; $i < $maxNumOfRounds; $i++) {
        $startNum = mt_rand(1, 10);
        $step = mt_rand(2, 9);
        $missNum = mt_rand(1, 8);
        $arrProgression[0] = $startNum;
        for ($j = 1; $j < 10; $j++) {
            $arrProgression[$j] = $arrProgression[$j - 1] + $step;
        }
        $correctAnswer[$i] = $arrProgression[$missNum];
        $arrProgression [$missNum] = '..';
        $expr[$i] = implode(' ', $arrProgression);
    }
    rungame($task, $expr, $correctAnswer);
}
