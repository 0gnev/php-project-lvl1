<?php

namespace BrainGames\BrainProgression;

use BrainGames\Cli;

const ROUNDS_COUNT = 3;
const MAX_RAND_NUMBER = 100;
const MIN_RAND_NUMBER = 1;
const INCRIMENT = 10;
const ARRAY_SIZE = 10;
function brain_progression()
{
    $name = Cli\run('What number is missing in the progression?');
    $count = 0;
    while ($count < ROUNDS_COUNT) {
        $a = rand(MIN_RAND_NUMBER, MAX_RAND_NUMBER);
        $k = rand(MIN_RAND_NUMBER, INCRIMENT);
        $m = rand(0, ARRAY_SIZE - 1);
        $question = '';
        for ($i = 0; $i < ARRAY_SIZE; $i++) {
            if ($i == $m) {
                $question .= '.. ';
            } else {
                $temp = $a + $k * $i;
                $question .= "{$temp} ";
            }
        }
        $correct_answer = $a + $k * $m;
        $count += Cli\ask($question, (string) $correct_answer, $name);
    }
    Cli\congrat($name);
}
