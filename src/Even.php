<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;

function even()
{
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    $countAnswerTrue = 3;
    while ($countAnswerTrue) {
        $randNumber = rand(1, 100);
        $isEven = $randNumber % 2 === 0;
        line("Question: {$randNumber}");
        $answer = trim(fgets(STDIN));
        $correctAnswer = $isEven ? 'yes' : 'no';
        line("Your answer: {$answer}");

        if ($answer === $correctAnswer) {
            line("Correct!");
            $countAnswerTrue--;
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '${correctAnswer}'.");
            line("Let's try again, {$name}!");
            exit();
        }
    }
    line("Congratulations, {$name}!");
}
