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
    
    for ($i = 2; $i < $number; $i++) {
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
        $number = getRandNumber();
        $data['correctAnswer'] = isPrime($number) ? 'yes' : 'no';
        $data['question'] = $number;

        return $data;
    };

    runKernel($getDataGame, TASK_GAME);
}
