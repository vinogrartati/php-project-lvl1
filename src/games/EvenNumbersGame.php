<?php

namespace BrainGames\Games\EvenNumbersGame;

use function \cli\line;
use function \cli\prompt;
use function BrainGames\BaseForGames\game;


function evenNumbers()
{
    return game(
        'Answer "yes" if number even otherwise answer "no"',
        function () {
            return rand(0, 100);
        },
        function ($question) {
            if ($question % 2 == 0) {
                    return "yes";
            }
            return "no";
        }
    );
}
