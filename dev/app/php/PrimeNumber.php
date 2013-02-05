<?php
	
class PrimeNumber
{
	private $prime_list = array();
	private $number;

	private function addMultiplesOfDivisor($divisor)
	{
		while ($this->number % $divisor === 0) 
		{
			// Start building prime number list
			$this->number = $this->number / $divisor;			
			array_push($this->prime_list, $divisor);  			
		}
	}
	
	public function getPrimes($n)
	{

		$this->number = $n;

		for ($value = 2; $value <= $this->number; $value++) 
		{
			$this->addMultiplesOfDivisor($value);
		}
		
		return $this->prime_list;
	}
}

?>