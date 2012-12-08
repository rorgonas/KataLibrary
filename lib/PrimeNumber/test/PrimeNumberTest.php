<?php


/**
 * Prime Number kata
 * @author: Vincent Simmard
 *          Rolland Orgonas
 */



require_once 'PHPUnit/Autoload.php';
require_once 'app/PrimeNumber.php';


class PrimeNumberTest extends PHPUnit_Framework_TestCase
{

	private function actualNumber($num){
		/**
		 * Some sort of Singleton Pattern implementation: 
		 * create only one instance of PrimeNumber class
		 */

		$number = new PrimeNumber;
		$result = $number->getPrimes($num);
		return $result;
	}  
	
	public function testTwoShouldReturnTwo()
	{
		$this->assertEquals($this->actualNumber(2), array(2));
	}

	public function testThreeShouldReturnThree()
	{
		$this->assertEquals($this->actualNumber(3), array(3));
	}

	public function testFourShouldReturnTwoTwo()
	{
		$this->assertEquals($this->actualNumber(4), array(2,2));
	}

	public function testFiveShouldReturnFive()
	{
		$this->assertEquals($this->actualNumber(5), array(5));
	}

	public function testSixShouldReturnTwoThree()
	{
		$this->assertEquals($this->actualNumber(6), array(2,3));
	}

	public function testEightShouldReturnTwoTwoTwo()
	{
		$this->assertEquals($this->actualNumber(8), array(2,2,2));
	}

	public function testNineShouldReturnThreeThree()
	{
		$this->assertEquals($this->actualNumber(9), array(3,3));
	}

	public function testTwentySevenShouldReturnThreeThreeThree()
	{
		$this->assertEquals($this->actualNumber(27), array(3,3,3));
	}

	public function testTwentyFiveShouldReturnFiveFive()
	{
		$this->assertEquals($this->actualNumber(25), array(5,5));
	}

	public function testFortyEightShouldReturnTwoTwoTwoTwoThree()
	{
		$this->assertEquals($this->actualNumber(48), array(2,2,2,2,3));
	}

	public function testFortyNineShouldReturnSevenSeven()
	{
		$this->assertEquals($this->actualNumber(49), array(7,7));
	}

	public function test121ShouldReturnElevenEleven()
	{
		$this->assertEquals($this->actualNumber(121), array(11,11));
	}

	public function test8877ShouldReturn3x11x269()
	{
		$this->assertEquals($this->actualNumber(8877), array(3,11,269));
	}


}






 ?>