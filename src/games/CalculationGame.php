<?php

namespace BrainGames\Games\CalculationGame;

use function \cli\line;
use function \cli\prompt;
use function BrainGames\BaseForGames\game;


function calculate()
{
    return game(
        'What is the result of the expression?',
        function () {
            $value1 = rand(0, 100);
            $value2 = rand(0, 100);
            $array = ["{$value1} * {$value2}", "{$value1} + {$value2}", "{$value1} - {$value2}"];
            $key = array_rand($array, 1);
            return $array[$key];
        },
        function ($question) {
            $array = explode(" ", $question);
            if ($array[1] == "*") {
                return $array[0] * $array[2];
            } elseif ($array[1] == "+") {
                return $array[0] + $array[2];
            } else {
                return $array[0] - $array[2];
            }
        }
    );
}
