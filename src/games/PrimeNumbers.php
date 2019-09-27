<?php
namespace BrainGames\Games\PrimeNumbers;
use function BrainGames\BaseForGames\createGame;

const RULES_OF_THE_GAME = 'Answer "yes" if given number is prime. Otherwise answer "no".';
function isDivisionWithoutRemainders($dividend, $divider)
{
    return $dividend % $divider == 0;
}

function primeNumbers()
{
    return createGame(
        RULES_OF_THE_GAME,
	function () {
            $result = [];
	    $question =  rand(0, 100);
            if ($question < 2) {
                $result[$question] = "no";
                return $result;
            }
            for ($i = $question - 1; $i > 1; $i--) {
                if (isDivisionWithoutRemainders($question ,$i)) {
                    $result[$question] = "no";
                    return $result;
                }
            }
	    $result[$question] = "yes";
	    return $result;
        }
    );
}
