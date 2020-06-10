<?php

namespace BrainGames\Engine;

use function cli\prompt;
use function cli\line;

function play($intro, $gameData)
{
    line("Welcome to Brain Games!");
    line($intro);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    foreach ($gameData as $round) {
        line("Question: %s", $round['question']);
        $answer = prompt("Your answer");
        if ($answer == $round['answer']) {
            line("Correct!");
        } else {
            line(
                '"%s" is wrong answer ;(. Correct answer was "%s". Let\'s try again, %s!',
                $answer,
                $round['answer'],
                $name
            );
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
