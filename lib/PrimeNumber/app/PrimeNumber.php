<?php
	
class PrimeNumber
{
	public function addMultiplesOfDivisor(&$number, $value, &$primes)
	{
		while ($number % $value === 0) {
			array_push($primes, $value);
			$number = $number / $value;
		}
	}
	
	public function calcul($number)
	{
		$primes = array();
		
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