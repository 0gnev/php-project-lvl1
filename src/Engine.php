<?php

namespace BrainGames\Engine;

use BrainGames\Cli;

use const BrainGames\Config\ROUNDS_COUNT;

function game($intro, $questions, $answers)
{
    $name = Cli\run($intro);
    $count = 0;
    while ($count < count($questions)) {
        if (Cli\ask($questions[$count], (string) $answers[$count], $name)) {
            $count++;
        } else {
            return;
        }
    }
        Cli\congrat($name);
}
