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
            $value1 = rand(0, 100);
            $value2 = rand(0, 100);
            return "$value1 $value2";
        },
        function ($string) {
            $array = explode(" ", $string);
            return gmp_gcd($array[0], $array[1]);
        }
    );
}
