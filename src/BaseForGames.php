<?php

namespace BrainGames\BaseForGames;

use function \cli\line;
use function \cli\prompt;

function game($instruction, $questionCreate, $answerCreate)
{
    $question = [];
    line('Welcome to the Brain Game!');
    line('%s', $instruction);
    line('');
    $playerName = prompt('May I have your name?');
    line("Hello, %s!", $playerName);
    line('');
    for ($i = 0; $i < 3; $i++) {
            $question[$i] = $questionCreate();
            $correctAnswer = $answerCreate($question[$i]);
            line('Question:%s', $question[$i]);
            $playerAnswer = prompt('Your answer');
        if ($correctAnswer == $playerAnswer) {
                line('Correct!');
            if ($i == 2) {
                    line('Congratulations, %s!', $playerName);
            }
        } else {
                line('\'%s\' is wrong answer ;(. Correct answer was \'%s\'', $playerAnswer, $correctAnswer);
                line('Let\'s try again, %s!', $playerName);
                break;
        }
    }
}
