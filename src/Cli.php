<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function run()
{
    line("Welcome to Brain Games!");
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}
function ask($name)
{
    $rand_number = rand(1, 100);
    line("Question: %s", $rand_number);
    $answer = prompt("Your answer");
    $correct_answer = $rand_number % 2 == 0 ? "yes" : "no";
    if ($rand_number % 2 === 0 && $answer === "yes" || $rand_number % 2 !== 0 && $answer === "no") {
        line("Correct!");
        return true;
    } else {
        line('"%s" is wrong answer ;(. Correct answer was "%s". Let\'s try again, %s!', $answer, $correct_answer, $name);
        return false;
    }
}
