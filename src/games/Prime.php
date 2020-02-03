<?php

namespace BrainGames\games\Prime;

use function BrainGames\Kernel\getRandNumber;
use function BrainGames\Kernel\runKernel;

const TASK_GAME = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime($number)
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

function startGame()
{
    $getDataGame = function () {
        $data = [];
        $data['question'] = getRandNumber();
        $data['correctAnswer'] = isPrime($data['question']) ? 'yes' : 'no';

        return $data;
    };

    runKernel($getDataGame, TASK_GAME);
}
