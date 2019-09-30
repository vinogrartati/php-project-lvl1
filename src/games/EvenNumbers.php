<?php

namespace BrainGames\Games\EvenNumbers;

use function BrainGames\BaseForGames\createGame;

define('RULES_OF_EVEN_GAME', 'Answer "yes" if number even otherwise answer "no"');

function isEven($value)
{
    return $value % 2 == 0;
}

function evenNumbers()
{
    return createGame(
        RULES_OF_EVEN_GAME,
        function () {
            $valuesForRound = [];
            $question = rand(0, 100);
            if (isEven($question)) {
                $valuesForRound[$question] = "yes";
                return $valuesForRound;
            }
            $valuesForRound[$question] = "no";
            return $valuesForRound;
        }
    );
}
