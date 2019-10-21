<?php

namespace BrainGames\Games\Calculation;

use function BrainGames\BaseForGames\createGame;

// phpcs:ignore
const CALCULATION_GAME_TASK = 'What is the result of the expression?';
// phpcs:ignore
const EXPRESSIONS = ["-", "+", "*"];

function makeCalculationGame()
{
    return createGame(
        CALCULATION_GAME_TASK,
        function () {
            $a = rand(0, 100);
            $b = rand(0, 100);
            $expressions = EXPRESSIONS;
            $expression = $expressions[array_rand($expressions, 1)];
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
