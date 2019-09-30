<?php

namespace BrainGames\Games\GreatestCommonDivisor;

use function BrainGames\BaseForGames\createGame;

const RULES_OF_THE_GAME = "Find the greatest common divisor of given numbers.";

function isCommonDivisor($firstDividend, $secondDividend, $divisor)
{
    return $firstDividend % $divisor == 0 && $secondDividend % $divisor == 0;
}

function gcd($firstValueForGCD, $secondValueForGCD)
{
    $greatestCommonDivisor = 1;
    for ($i = 1; $i <= $firstValueForGCD, $i <= $secondValueForGCD; $i++) {
        if (isCommonDivisor($firstValueForGCD, $secondValueForGCD, $i)) {
            $greatestCommonDivisor = $i;
        }
    }
    return $greatestCommonDivisor;
}

function findGCD()
{
    return createGame(
        RULES_OF_THE_GAME,
        function () {
            $valuesForRound = [];
            $firstValueForGCD = rand(1, 100);
            $secondValueForGCD = rand(1, 100);
            $question = "{$firstValueForGCD} {$secondValueForGCD}";
            $valuesForRound[$question] = gcd($firstValueForGCD, $secondValueForGCD);
            return $valuesForRound;
        }
    );
}
