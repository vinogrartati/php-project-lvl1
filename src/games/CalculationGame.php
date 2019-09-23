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
            $choiceExpression = ["{$value1} * {$value2}", "{$value1} + {$value2}", "{$value1} - {$value2}"];
            $randomKey = array_rand($choiceExpression, 1);
            return $choiceExpression[$randomKey];
        },
        function ($question) {
            $questionValues = explode(" ", $question);
            if ($questionValues[1] == "*") {
                return $questionValues[0] * $questionValues[2];
            } elseif ($questionValues[1] == "+") {
                return $questionValues[0] + $questionValues[2];
            } else {
                return $questionValues[0] - $questionValues[2];
            }
        }
    );
}
