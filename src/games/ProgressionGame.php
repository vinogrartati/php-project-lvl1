<?php
namespace BrainGames\Games\ProgressionGame;
use function \cli\line;
use function \cli\prompt;
use function BrainGames\BaseForGames\game;

function progression()
{
    return game(
        'What number is missing in the progression?',
        function () {
            $firstValueOfProgression = rand(0, 100);
            $differenceStep = rand(1, 10);
            $progression = [];
            for ($i = 0; $i < 10; $i++) {
                $progression[] = $firstValueOfProgression + $differenceStep * $i;
            }
            $randomKey = array_rand($progression, 1);
            $progression[$randomKey] = "..";
            return implode(" ", $progression);
        },
        function ($question) {
            $progression = explode(" ", $question);
            foreach ($progression as $key => $value) {
                if ($progression[$key] === "..") {
                    if (isset($progression[$key - 1]) && isset($progression[$key - 2])) {
                        return $progression[$key - 1] * 2 - $progression[$key - 2];
                    }
                    return $progression[$key + 1] * 2 - $progression[$key + 2];
                }
            }
        }
    );
}
