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

	public function testTwoShouldReturnTwo()
	{
		$this->assertEquals(prime(2), array(2));
	}

	public function testThreeShouldReturnThree()
	{
		$this->assertEquals(prime(3), array(3));
	}

	public function testFourShouldReturnTwoTwo()
	{
		$this->assertEquals(prime(4), array(2,2));
	}

	public function testFiveShouldReturnFive()
	{
		$this->assertEquals(prime(5), array(5));
	}

	public function testSixShouldReturnTwoThree()
	{
		$this->assertEquals(prime(6), array(2,3));
	}

	public function testEightShouldReturnTwoTwoTwo()
	{
		$this->assertEquals(prime(8), array(2,2,2));
	}

	public function testNineShouldReturnThreeThree()
	{
		$this->assertEquals(prime(9), array(3,3));
	}

	public function testTwentySevenShouldReturnThreeThreeThree()
	{
		$this->assertEquals(prime(27), array(3,3,3));
	}

	public function testTwentyFiveShouldReturnFiveFive()
	{
		$this->assertEquals(prime(25), array(5,5));
	}

	public function testFortyEightShouldReturnTwoTwoTwoTwoThree()
	{
		$this->assertEquals(prime(48), array(2,2,2,2,3));
	}

	public function testFortyNineShouldReturnSevenSeven()
	{
		$this->assertEquals(prime(49), array(7,7));
	}

	public function test121ShouldReturnElevenEleven()
	{
		$this->assertEquals(prime(121), array(11,11));
	}

	public function test8877ShouldReturn3x11x269()
	{
		$this->assertEquals(prime(8877), array(3,11,269));
	}
}






 ?>