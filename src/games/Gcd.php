<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\BaseForGames\createGame;

// phpcs:ignore
const GCD_GAME_TASK = 'Find the greatest common divisor of given numbers.';

function findGcd($first, $second)
{
    $greatestCommonDivisor = 1;
    for ($i = 1; $i <= $first, $i <= $second; $i++) {
        if ($first % $i == 0 && $second % $i == 0) {
            $greatestCommonDivisor = $i;
        }
    }
    return $greatestCommonDivisor;
}

function makeGcdGame()
{
    return createGame(
        GCD_GAME_TASK,
        function () {
            $a = rand(1, 100);
            $b = rand(1, 100);
            $question = "$a $b";
            $answer = findGcd($a, $b);
            return [$question, $answer];
        }
    );
}
