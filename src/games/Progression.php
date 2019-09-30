<?php

namespace BrainGames\Games\Progression;

use function BrainGames\BaseForGames\createGame;

const RULES_OF_THE_GAME = "What number is missing in the progression?";

function progression()
{
    return createGame(
        RULES_OF_THE_GAME,
        function () {
            $valuesForRound = [];
            $firstValueOfProgression = rand(0, 100);
            $differenceStep = rand(1, 10);
            $progression = [];
            for ($i = 0; $i < 10; $i++) {
                $progression[] = $firstValueOfProgression + $differenceStep * $i;
            }
            $randomKey = array_rand($progression, 1);
            $answer = $progression[$randomKey];
            $progression[$randomKey] = "..";
            $question = implode(" ", $progression);
            $valuesForRound[$question] = $answer;
            return $valuesForRound;
        }
    );
}
