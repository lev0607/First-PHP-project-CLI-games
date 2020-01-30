<?php

namespace BrainGames\Even;

use function BrainGames\Kernel\getCountRound;
use function BrainGames\Kernel\getRandNumber;
use function BrainGames\Kernel\kernel;

const TASK_GAME = 'Answer "yes" if the number is even, otherwise answer "no"';

function startGame()
{
    $getDataGame = function () {
        $data = [];
        $data['question'] = getRandNumber();
        $isEven = $data['question'] % 2 === 0;
        $data['correctAnswer'] = $isEven ? 'yes' : 'no';
        return $data;
    };

    kernel($getDataGame, TASK_GAME);
}
