<?php

namespace BrainGames\Games\Progression;

use function BrainGames\BaseForGames\createGame;

// phpcs:ignore
const PROGRESSION_GAME_TASK = "What number is missing in the progression?";
// phpcs:ignore
const PROGRESSION_LENGTH = 10;

function makeProgressionGame()
{
    return createGame(
        PROGRESSION_GAME_TASK,
        function () {
            $firstValueOfProgression = rand(0, 100);
            $differenceStep = rand(1, 10);
            $progression = [];
            for ($i = 0; $i < PROGRESSION_LENGTH; $i++) {
                $progression[] = $firstValueOfProgression + $differenceStep * $i;
            }
            $hiddenElementKey = array_rand($progression, 1);
            $answer = $progression[$hiddenElementKey];
            $progression[$hiddenElementKey] = "..";
            $question = implode(" ", $progression);
            return [$question, $answer];
        }
    );
}
