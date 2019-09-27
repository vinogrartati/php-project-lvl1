<?php

namespace BrainGames\Games\GreatestCommonDivisor;
use function BrainGames\BaseForGames\createGame;

const RULES_OF_THE_GAME = "Find the greatest common divisor of given numbers.";
function isCommonDivisor($value1, $value2, $divisor) {
  return $value1 % $divisor == 0 && $value2 % $divisor == 0;
}

function gcd($value1, $value2)
{
  $gcd = 1;
  $a = 1;
  for($i = 1; $i <= $value1, $i <=$value2; $i++)
  {
    if(isCommonDivisor($value1, $value2, $i))
    {
      $gcd = $i;
    }
  }
  return $gcd;
}

function findGCD()
{
	return createGame(
        RULES_OF_THE_GAME,
	function () {
            $result = [];
            $value1 = rand(1, 100);
            $value2 = rand(1, 100);
            $question = "{$value1} {$value2}";
	    $result[$question] = gcd($value1, $value2);
	    return $result;
        }
    );
}
