<?php

namespace BrainGames\Progression;

use function BrainGames\Kernel\getCountRound;
use function BrainGames\Kernel\getRandNumber;
use function BrainGames\Kernel\kernel;

const TASK_GAME = 'What number is missing in the progression?';

function getArrProgression($startNumberProgression, $stepProgression, $longProgression)
{
    $arrProgression = [$startNumberProgression];
    for ($i = 1; $i <= $longProgression; $i++) {
        $arrProgression[$i] = $arrProgression[$i - 1] + $stepProgression;
    }

    return $arrProgression;
}

function startGame()
{
    $getDataGame = function () {
        $data = [];
        $longProgression = 10;
        $startNumberProgression = getRandNumber();
        $stepProgression = getRandNumber();
        $arrProgression = getArrProgression($startNumberProgression, $stepProgression, $longProgression);
        $randKey = array_rand($arrProgression, 1);
        $string = implode(' ', $arrProgression);
        $data['correctAnswer'] = $arrProgression[$randKey];
        $data['question'] = str_replace($data['correctAnswer'], '..', $string);

        return $data;
    };

    kernel($getDataGame, TASK_GAME);
}
