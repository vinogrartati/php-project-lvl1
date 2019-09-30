<?php

namespace BrainGames\BaseForGames;

use function cli\line;
use function cli\prompt;

function createGame($rulesOfTheGame, $valuesForRound)
{
    $question = [];
    line('Welcome to the Brain Game!');
    line('%s', $rulesOfTheGame);
    line('');
    $playerName = prompt('May I have your name?');
    line("Hello, %s!", $playerName);
    line('');
    $rounds = 3;
    for ($i = 0; $i < $rounds; $i++) {
        $questionAnswer = $valuesForRound();
        $question[$i] = key($questionAnswer);
        $correctAnswer = $questionAnswer[$question[$i]];
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
