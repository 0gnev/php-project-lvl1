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
function ask($question)
{
    line("Question: %s", $question);
    $answer = prompt("Your answer");
    return $answer;
}
function congrat($name)
{
    line("Congratulations, %s!", $name);
}
