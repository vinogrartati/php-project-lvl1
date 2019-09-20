<?php

namespace BrainGames\CalculationGame;

use function \cli\line;
use function \cli\prompt;

function instruction()
{
    return "What is the result of the expression?";
}
function getQuestion()
{
    $value1 = rand(1, 100);
    $value2 = rand(1, 100);
    $array = ["{$value1} * {$value2}", "{$value1} + {$value2}", "{$value1} - {$value2}"];
    $key = array_rand($array, 1);
    return $array[$key];
}
function correctAnswer($question)
{
    $array = explode(" ", $question);
    if ($array[1] == "*") {
        return $array[0] * $array[2];
    } elseif ($array[1] == "+") {
        return $array[0] + $array[2];
    } else {
        return $array[0] - $array[2];
    }
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
