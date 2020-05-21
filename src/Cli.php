<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function run($rule)
{
    line("Welcome to Brain Games!");
    line($rule);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}
function ask($question, $correct_answer, $name)
{
    line("Question: %s", $question);
    $answer = prompt("Your answer");
    if ($answer === $correct_answer) {
        line("Correct!");
        return true;
    } else {
        line('"%s" is wrong answer ;(. Correct answer was "%s". Let\'s try again, %s!', $answer, $correct_answer, $name);
        return false;
    }
}
function congrat($name)
{
    line("Congratulations, %s!", $name);
}