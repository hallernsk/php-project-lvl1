<?php

namespace BrainGames\games;

use function Cli\line;
use function Cli\prompt;

function runprogression()
{
    $task = "What number is missing in the progression?";
    $maxNumOfRounds = 3;
    $correctAnswer = [];
    $arrProgression = [];
    $questionRow = [];
    $lengthOfRow = 10;
    for ($i = 0; $i < $maxNumOfRounds; $i++) {
        $startNum = mt_rand(1, 10);
        $step = mt_rand(2, 9);
        $missNum = mt_rand(1, 8);
        $arrProgression[0] = $startNum;
        for ($j = 1; $j < $lengthOfRow; $j++) {
            $arrProgression[$j] = $arrProgression[$j - 1] + $step;
        }
        $correctAnswer[$i] = $arrProgression[$missNum];
        $arrProgression [$missNum] = '..';
        $questionRow[$i] = implode(' ', $arrProgression);
    }
    rungame($task, $questionRow, $correctAnswer);
}
