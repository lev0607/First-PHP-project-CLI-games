<?php

namespace BrainGames\Kernel;

use function cli\line;
use function cli\prompt;

const COUNT_ROUND_GAME = 3;
const RANGE_MIN = 1;
const RANGE_MAX = 100;

function getRandNumber()
{
    return rand(RANGE_MIN, RANGE_MAX);
}


function runKernel($getDataGame, $taskGame)
{
    line('Welcome to the Brain Game!');
    line($taskGame);
    line();
    $userName = prompt('May I have your name?');
    line("Hello, %s!", $userName);
    line();
    $countRound = COUNT_ROUND_GAME;

    while ($countRound) {
        $data = $getDataGame();
        line("Question: {$data['question']}");
        $answer = trim(fgets(STDIN));
        $correctAnswer = $data['correctAnswer'];
        line("Your answer: {$answer}");
        if ($answer == $correctAnswer) {
            line("Correct!");
            $countRound--;
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '${correctAnswer}'.");
            line("Let's try again, {$userName}!");
            exit();
        }
    }

    line("Congratulations, {$userName}!");
}
