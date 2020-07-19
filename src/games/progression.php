<?php

namespace BrainGames\games\progression;

use function BrainGames\games\runGame;

use const BrainGames\games\NUM_OF_ROUNDS;

function run()
{
    $task = "What number is missing in the progression?";
    $progression = [];
    $questionsAnswers = [];
    $progressionLength = 10;
    for ($i = 0; $i < NUM_OF_ROUNDS; $i++) {
        $startNum = mt_rand(1, 10);
        $step = mt_rand(2, 9);
        $missIndex = mt_rand(1, 8);
        $progression[0] = $startNum;
        for ($j = 1; $j < $progressionLength; $j++) {
            $progression[$j] = $progression[$j - 1] + $step;
        }
        $correctAnswer = (string) $progression[$missIndex];
        $progression [$missIndex] = '..';
        $questionRow = implode(' ', $progression);
        $questionsAnswers[$i] = [$questionRow, $correctAnswer];
    }
    runGame($task, $questionsAnswers);
}
