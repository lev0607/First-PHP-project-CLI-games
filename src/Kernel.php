<?php

namespace BrainGames\Kernel;

use function cli\line;
use function cli\prompt;

const COUNT_ROUND_GAME = 3;
const RANGE_MIN = 1;
const RANGE_MAX = 1;


function getCountRound()
{
    return COUNT_ROUND_GAME;
}

function getRandNumber()
{
    return rand(RANGE_MIN, RANGE_MAX);
}


function kernel($getDataGame, $taskGame)
{
    line('Welcome to the Brain Game!');
    line($taskGame);
    line();
    $userName = prompt('May I have your name?');
    line("Hello, %s!", $userName);
    line();
    $countRound = getCountRound();

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
