<?php

namespace BrainGames\YesNoGame;

use function \cli\line;
use function \cli\prompt;

function instruction()
{
    return 'Answer "yes" if number even otherwise answer "no"';
}
function getQuestion()
{
    return rand(1, 100);
}
function correctAnswer($question)
{
    if ($question % 2 == 0) {
        return "yes";
    }
    return "no";
}
function game()
{
    $question = [];
    line('Welcome to the Brain Game!');
    line('%s', instruction());
    line('');
    $playerName = prompt('May I have your name?');
    line("Hello, %s!", $playerName);
    line('');
    for ($i = 0; $i < 3; $i++) {
            $question[$i] = getQuestion();
            $correctAnswer = correctAnswer($question[$i]);
            line('Question:%d', $question[$i]);
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
