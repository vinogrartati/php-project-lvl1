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
            $firstValueForExpression = rand(0, 100);
            $secondValueForExpression = rand(0, 100);
	    $choiceExpression = [
                "{$firstValueForExpression} * {$secondValueForExpression}",
		"{$firstValueForExpression} + {$secondValueForExpression}",
                "{$firstValueForExpression} - {$secondValueForExpression}"];
            $randomKey = array_rand($choiceExpression, 1);
            return $choiceExpression[$randomKey];
        },
        function ($question) {
            $questionValue = explode(" ", $question);
            if ($questionValues[1] == "*") {
                return $questionValue[0] * $questionValue[2];
            } elseif ($questionValue[1] == "+") {
                return $questionValue[0] + $questionValue[2];
            } else {
                return $questionValue[0] - $questionValue[2];
            }
        }
    );
}
