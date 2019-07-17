<?php

namespace App;

class FizzBuzz
{
	public function calc(int $count, array $result = [], int $iteration = 1)
	{
		if ($iteration > $count) return $result;

		$result[$iteration] = $this->isFizzOrBuzz($iteration)
				    ? $this->isFizz($iteration) . $this->isBuzz($iteration)
				    : $iteration;

		$iteration++;

		return $this->calc($count, $result, $iteration);
	}

	public function isFizz(int $number)
	{
		return $number % 3 === 0 
			? 'Fizz' 
			: false;
	}

	public function isBuzz($number)
	{
		return $number % 5 === 0 
			? 'Buzz' 
			: false;
	}

	public function isFizzOrBuzz($number)
	{
		return $this->isFizz($number) || $this->isBuzz($number);

	}
}
