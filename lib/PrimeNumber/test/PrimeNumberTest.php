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

	public $number; 

	public function setup() {
			$this->number = new PrimeNumber;
	}

	public function testTwoShouldReturnTwo()
	{
		
		$this->assertEquals(array(2), $this->number->getPrimes(2));
	}

	public function testThreeShouldReturnThree()
	{
		$this->assertEquals(array(3), $this->number->getPrimes(3));
	}

	public function testFourShouldReturnTwoTwo()
	{
		$this->assertEquals(array(2,2), $this->number->getPrimes(4));
	}

	public function testFiveShouldReturnFive()
	{
		$this->assertEquals(array(5), $this->number->getPrimes(5));
	}

	public function testSixShouldReturnTwoThree()
	{
		$this->assertEquals(array(2,3), $this->number->getPrimes(6));
	}

	public function testEightShouldReturnTwoTwoTwo()
	{
		$this->assertEquals(array(2,2,2), $this->number->getPrimes(8));
	}

	public function testNineShouldReturnThreeThree()
	{
		$this->assertEquals(array(3,3), $this->number->getPrimes(9));
	}

	public function testTwentySevenShouldReturnThreeThreeThree()
	{
		$this->assertEquals(array(3,3,3), $this->number->getPrimes(27));
	}

	public function testTwentyFiveShouldReturnFiveFive()
	{
		$this->assertEquals(array(5,5), $this->number->getPrimes(25));
	}

	public function testFortyEightShouldReturnTwoTwoTwoTwoThree()
	{
		$this->assertEquals(array(2,2,2,2,3), $this->number->getPrimes(48));
	}

	public function testFortyNineShouldReturnSevenSeven()
	{
		$this->assertEquals(array(7,7), $this->number->getPrimes(49));
	}

	public function test121ShouldReturnElevenEleven()
	{
		$this->assertEquals(array(11,11), $this->number->getPrimes(121));
	}

	public function test8877ShouldReturn3x11x269()
	{
		$this->assertEquals(array(3,11,269), $this->number->getPrimes(8877));
	}

}

?>