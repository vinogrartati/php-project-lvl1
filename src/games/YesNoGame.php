<?php

namespace BrainGames\Games\YesNoGame;

use function \cli\line;
use function \cli\prompt;
use function BrainGames\BaseForGames\game;


function yesOrNo()
{
    return game(
        'Answer "yes" if number even otherwise answer "no"',
        function () {
            return rand(0, 100);
        },
        function ($value) {
            if ($value % 2 == 0) {
                    return "yes";
            }
            return "no";
        }
    );
}
