<?php

namespace BrainGames\Games\GreatestCommonDivisor;

use function \cli\line;
use function \cli\prompt;
use function BrainGames\BaseForGames\game;

function gcd()
{
    return game(
        'Find the greatest common divisor of given numbers.',
        function () {
            $firstNumberForGCD = rand(0, 100);
            $secondNumberForGCD = rand(0, 100);
            return "$firstNumberForGCD $secondNumberForGCD";
        },
        function ($question) {
            $questionValue = explode(" ", $question);
            return gmp_gcd($questionValue[0], $questionValue[1]);
        }
    );
}
