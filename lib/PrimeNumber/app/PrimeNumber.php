<?php
	
class PrimeNumber
{
	private $primes = array();
	private $number;

	public function __construct($number)
	{
		$this->number = $number;
	}

	private function addMultiplesOfDivisor(&$number, $value, &$primes)
	{
		while ($number % $value === 0) {
			array_push($primes, $value);
			$number = $number / $value;
		}
	}
	
	public function getPrimes()
	{
		$number = $this->number;
		$primes = $this->primes;
		
		for ($value = 2; $value < $number; $value++) {
			$this->addMultiplesOfDivisor($number, $value, $primes);
		}
		
		if ($number > 1) {
			array_push($primes, $number);
		}

		return $primes;
	}
}

?>