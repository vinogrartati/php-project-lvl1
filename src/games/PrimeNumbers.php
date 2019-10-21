<?php

namespace BrainGames\Games\PrimeNumbers;

use function BrainGames\BaseForGames\createGame;

// phpcs:ignore
const PRIME_GAME_TASK = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime($value)
{
    if ($value < 2) {
        return false;
    }
    for ($i = $value - 1; $i > 1; $i--) {
        if ($value % $i == 0) {
            return false;
        }
    }
    return true;
}


function makePrimeGame()
{
    return createGame(
        PRIME_GAME_TASK,
        function () {
            $question =  rand(0, 100);
            isPrime($question) ? $answer = "yes" : $answer = "no";
            return [$question, $answer];
        }
    );
}
