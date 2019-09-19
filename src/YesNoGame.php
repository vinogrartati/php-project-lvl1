<?php

namespace BrainGames\YesNoGame;

use function \cli\line;
use function \cli\prompt;

function game()
{
	$value = [];
	line('Welcome to the Brain Game!');
	line('Answer "yes" if number even otherwise answer "no"');
	line('');
   	$name = prompt('May I have your name?');
    	line("Hello, %s!", $name);
	line('');
	for($i = 0; $i < 3; $i++) {
		$value[$i] = rand();
		line('Question:%d', $value[$i]);
		$answer = prompt('Your answer');
		if ($value[$i] % 2 == 0 && $answer == 'yes' || $value[$i] % 2 != 0 && $answer == 'no') {
			line('Correct!');
			if ($i == 2) {
				line('Congratulations, %s!', $name);
			}
		} else {
			$correctAnswer = 'no';
			if($value[$i] % 2 == 0)
			{
				$correctAnswer = 'yes';
			}
			line('\'%s\' is wrong answer ;(. Correct answer was \'%s\'', $answer, $correctAnswer);
			line('Let\'s try again, %s!', $name);
			break;
		
		}

	
	}
}
