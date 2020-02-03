<?php

namespace BrainGames\games\Progression;

use function BrainGames\Kernel\getRandNumber;
use function BrainGames\Kernel\runKernel;

const TASK_GAME = 'What number is missing in the progression?';

function getProgression($progressionStartingNumber, $stepProgression, $progressionLength)
{
    $arrProgression = [$progressionStartingNumber];
    for ($i = 1; $i <= $progressionLength; $i++) {
        $arrProgression[$i] = $arrProgression[$i - 1] + $stepProgression;
    }

    return $arrProgression;
}

function startGame()
{
    $getDataGame = function () {
        $data = [];
        $progressionLength = 10;
        $progressionStartingNumber = getRandNumber();
        $stepProgression = getRandNumber();
        $arrProgression = getProgression($progressionStartingNumber, $stepProgression, $progressionLength);
        $randKey = array_rand($arrProgression, 1);
        $string = implode(' ', $arrProgression);
        $data['correctAnswer'] = $arrProgression[$randKey];
        $data['question'] = str_replace($data['correctAnswer'], '..', $string);

        return $data;
    };

    runKernel($getDataGame, TASK_GAME);
}
