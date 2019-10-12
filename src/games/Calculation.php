<?php

namespace BrainGames\Games\Calculation;

use function BrainGames\BaseForGames\createGame;

// phpcs:ignore
const CALCULATION_GAME_TASK = 'What is the result of the expression?';

function createExpression()
{
    $expression = ["*", "+", "-"];
    return $expression[array_rand($expression, 1)];
}

function makeCalculationGame()
{
    return createGame(
        CALCULATION_GAME_TASK,
        function () {
            $a = rand(0, 100);
            $b = rand(0, 100);
            $expression = createExpression();
            $question = "$a $expression $b";
            switch ($expression) {
                case "*":
                    $answer = $a * $b;
                    break;
                case "+":
                    $answer = $a + $b;
                    break;
                case "-":
                    $answer = $a - $b;
                    break;
            }
            return [$question, $answer];
        }
    );
}
