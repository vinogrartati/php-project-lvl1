<?php

namespace BrainGames\Games\Calculation;

use function BrainGames\BaseForGames\createGame;

define('RULES_OF_THE_CALCULATION_GAME', 'What is the result of the expression?');

function calculate()
{
    return createGame(
        RULES_OF_THE_CALCULATION_GAME,
        function () {
            $valuesForRound = [];
            $firstValueForExpression = rand(0, 100);
            $secondValueForExpression = rand(0, 100);
            $expression = ["*", "+", "-"];
            $randomExpression = $expression[array_rand($expression, 1)];
            $question = "{$firstValueForExpression} {$randomExpression} {$secondValueForExpression}";
            switch ($randomExpression) {
                case "*":
                    $answer = $firstValueForExpression * $secondValueForExpression;
                    break;
                case "+":
                    $answer = $firstValueForExpression + $secondValueForExpression;
                    break;
                case "-":
                    $answer = $firstValueForExpression - $secondValueForExpression;
                    break;
            }
            $valuesForRound[$question] = $answer;
            return $valuesForRound;
        }
    );
}
