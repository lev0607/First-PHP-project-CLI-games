<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;
use function BrainGames\Even\even;

function run()
{
    line('Welcome to the Brain Game!');
    line('Answer "yes" if the number is even, otherwise answer "no"');
    even();
}
