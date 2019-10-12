<?php

namespace BrainGames\BaseForGames;

use function cli\line;
use function cli\prompt;

function createGame($gameTask, $questionAnswer)
{
    $question = [];
    line('Welcome to the Brain Game!');
    line('%s', $gameTask);
    line('');
    $playerName = prompt('May I have your name?');
    line("Hello, %s!", $playerName);
    line('');
    $roundsCount = 3;
    for ($i = 0; $i < $roundsCount; $i++) {
        $valuesForRound = $questionAnswer();
        $question = $valuesForRound[0];
        $correctAnswer = $valuesForRound[1];
        line('Question:%s', $question);
        $playerAnswer = prompt('Your answer');
        if ($correctAnswer == $playerAnswer) {
            line('Correct!');
        } else {
              line('\'%s\' is wrong answer ;(. Correct answer was \'%s\'', $playerAnswer, $correctAnswer);
              return line('Let\'s try again, %s!', $playerName);
        }
    }
    return line('Congratulations, %s!', $playerName);
}
