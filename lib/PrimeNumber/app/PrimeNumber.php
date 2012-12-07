<?php
	
	
	function addMultiplesOfDivisor(&$number, $value, &$primes){
		while ($number % $value === 0) {
			array_push($primes, $value);
			$number = $number / $value;
		}
	}
	
	function prime($number){
		$primes = array();
		
		for ($value = 2; $value < $number; $value++) {
			addMultiplesOfDivisor($number, $value, $primes);
		}
		
		if ($number > 1) {
			array_push($primes, $number);
		}

		return $primes;
	}

?>