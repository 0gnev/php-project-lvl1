<?php

namespace BrainGames\Engine;

use BrainGames\Cli;
use function cli\line;

function compare($answer, $correctAnswer, $name)
{
    if ($answer == $correctAnswer) {
        line("Correct!");
        return true;
    } else {
        line(
            '"%s" is wrong answer ;(. Correct answer was "%s". Let\'s try again, %s!',
            $answer,
            $correctAnswer,
            $name
        );
        return false;
    }
}
function game($intro, $questions)
{
    $name = Cli\run($intro);
    $count = 0;
    while ($count < count($questions)) {
        $answer = Cli\ask($questions[$count]['question']);
        if (compare($answer, $questions[$count]['answer'], $name)) {
            $count++;
        } else {
            return;
        }
    }

    Cli\congrat($name);
}
