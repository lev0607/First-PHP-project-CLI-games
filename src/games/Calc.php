<?php

namespace BrainGames\Calc;

use function BrainGames\Kernel\getCountRound;
use function BrainGames\Kernel\getRandNumber;
use function BrainGames\Kernel\kernel;

const TASK_GAME = 'What is the result of the expression?';

function startGame()
{
    $getDataGame = function () {
        $data = [];
        $operators = ["+", "-", "*"];
        $randOperator = $operators[array_rand($operators, 1)];
        $randNumber1 = getRandNumber();
        $randNumber2 = getRandNumber();
        $data['question'] = "{$randNumber1} {$randOperator} {$randNumber2}";
        
        switch ($randOperator) {
            case '+':
                $data['correctAnswer'] = $randNumber1 + $randNumber2;
                break;
            case '-':
                $data['correctAnswer'] = $randNumber1 - $randNumber2;
                break;
            case '*':
                $data['correctAnswer'] = $randNumber1 * $randNumber2;
                break;
        }
        return $data;
    };

    kernel($getDataGame, TASK_GAME);
}
