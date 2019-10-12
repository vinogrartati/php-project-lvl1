<?php

namespace BrainGames\Games\EvenNumbers;

use function BrainGames\BaseForGames\createGame;

// phpcs:ignore
const EVEN_GAME_TASK = 'Answer "yes" if number even otherwise answer "no"';

function isEven($value)
{
    return $value % 2 == 0;
}

function makeEvenGame()
{
    return createGame(
        EVEN_GAME_TASK,
        function () {
            $question = rand(0, 100);
            isEven($question) ? $answer = "yes" : $answer = "no";
            return [$question, $answer];
        }
    );
}
