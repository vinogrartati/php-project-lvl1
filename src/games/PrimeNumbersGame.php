<?php
namespace BrainGames\Games\PrimeNumbersGame;
use function \cli\line;
use function \cli\prompt;
use function BrainGames\BaseForGames\game;

function primeNumbers()
{
    return game(
        'Answer "yes" if given number is prime. Otherwise answer "no".',
        function () {
            return rand(0, 100);
        },
        function ($questionValue) {
            if ($questionValue < 2) {
                return "no";
            }
            for ($i = $questionValue - 1; $i > 1; $i--) {
                if ($questionValue % $i === 0) {
                    return "no";
                }
            }
            return "yes";
        }
    );
}
