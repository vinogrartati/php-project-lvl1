<?php

namespace BrainGames\BaseForGames;

use function cli\line;
use function cli\prompt;

// phpcs:ignore
const ROUNDS_COUNT = 3;

function createGame($gameTask, $questionAnswer)
{
    $question = [];
    line('Welcome to the Brain Game!');
    line('%s', $gameTask);
    line('');
    $playerName = prompt('May I have your name?');
    line("Hello, %s!", $playerName);
    line('');
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $valuesForRound = $questionAnswer();
        [$question, $correctAnswer] = $valuesForRound;
        line('Question:%s', $question);
        $playerAnswer = prompt('Your answer');
        if ($correctAnswer == $playerAnswer) {
            line('Correct!');
        } else {
              line('\'%s\' is wrong answer ;(. Correct answer was \'%s\'', $playerAnswer, $correctAnswer);
              line('Let\'s try again, %s!', $playerName);
              return false;
        }
    }
    line('Congratulations, %s!', $playerName);
}
