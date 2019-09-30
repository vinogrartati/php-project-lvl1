<?php

namespace BrainGames\Games\PrimeNumbers;

use function BrainGames\BaseForGames\createGame;

define('RULES_OF_PRIME_GAME', 'Answer "yes" if given number is prime. Otherwise answer "no".');

function isDivisionWithoutRemainder($dividend, $divider)
{
    return $dividend % $divider == 0;
}

function primeNumbers()
{
    return createGame(
        RULES_OF_PRIME_GAME,
        function () {
            $valuesForRound = [];
            $question =  rand(0, 100);
            if ($question < 2) {
                $valuesForRound[$question] = "no";
                return $valuesForRound;
            }
            for ($i = $question - 1; $i > 1; $i--) {
                if (isDivisionWithoutRemainder($question, $i)) {
                    $valuesForRound[$question] = "no";
                    return $valuesForRound;
                }
            }
            $valuesForRound[$question] = "yes";
            return $valuesForRound;
        }
    );
}
