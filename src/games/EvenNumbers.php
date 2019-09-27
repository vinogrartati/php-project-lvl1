<?php

namespace BrainGames\Games\EvenNumbers;
use function BrainGames\BaseForGames\createGame;

const RULES_OF_THE_GAME = 'Answer "yes" if number even otherwise answer "no"';
function isEven($value) {
    return $value % 2 == 0;
}

function evenNumbers()
{
    return createGame(
	    RULES_OF_THE_GAME,
	function () {
            $result = [];
            $question = rand(0, 100);
            if (isEven($question)) {
                $result[$question] = "yes";
                return $result;
            }
            $result[$question] = "no";
            return $result;
        }
    );
}
