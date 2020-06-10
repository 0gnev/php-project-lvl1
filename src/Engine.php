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
function play($intro, $gameData)
{
    $name = Cli\introduce($intro);
    $count = 0;
    while ($count < count($gameData)) {
        $answer = Cli\ask($gameData[$count]['question']);
        if (compare($answer, $gameData[$count]['answer'], $name)) {
            $count++;
        } else {
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
