<?php

namespace BrainGames\games\progression;

use function BrainGames\games\runGame;

use const BrainGames\games\NUM_OF_ROUNDS;

function run()
{
    $task = "What number is missing in the progression?";
    $correctAnswer = [];
    $arrProgression = [];
    $questionRow = [];
    $lengthOfRow = 10;
    for ($i = 0; $i < NUM_OF_ROUNDS; $i++) {
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
    runGame($task, $questionRow, $correctAnswer);
}
