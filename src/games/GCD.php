<?php

namespace BrainGames\games\GCD;

use function BrainGames\Kernel\getRandNumber;
use function BrainGames\Kernel\runKernel;

const TASK_GAME = 'Find the greatest common divisor of given numbers.';

// Gcd - greatest common divisor

function isGcd($randNumber1, $randNumber2)
{
    $correctAnswer = 0;
    $randNumber1 = abs($randNumber1);
    $randNumber2 = abs($randNumber2);

    $minNumber = ($randNumber1  >  $randNumber2) ? $randNumber1 : $randNumber2;
    for ($i = 1; $i <= $minNumber; $i++) {
        if ($randNumber1 % $i === 0 && $randNumber2 % $i === 0) {
            $correctAnswer = $i;
        }
    }

    return $correctAnswer;
}

function startGame()
{
    $getDataGame = function () {
        $data = [];
        $randNumber1 = getRandNumber();
        $randNumber2 = getRandNumber();
        $data['question'] = "{$randNumber1} {$randNumber2}";
        $data['correctAnswer'] = isGcd($randNumber1, $randNumber2);
        return $data;
    };

    runKernel($getDataGame, TASK_GAME);
}
