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

	private function getOneInstanceObj($num){
		// some sort of Singleton Pattern implementation: create only one instance of PrimeNumber class
		$oneNumberObj = new PrimeNumber;
		$result = $oneNumberObj->calcul($num);
		return $result;
	}  
	
	public function testTwoShouldReturnTwo()
	{
		//$reference = $this->getOneInstanceObj();
		$this->assertEquals($this->getOneInstanceObj(2), array(2));
	}
/*
	public function testThreeShouldReturnThree()
	{
		$this->assertEquals($this->getOneInstanceObj()->calcul(3), array(3));
	}

	public function testFourShouldReturnTwoTwo()
	{
		$this->assertEquals($this->getOneInstanceObj()->calcul(4), array(2,2));
	}

	public function testFiveShouldReturnFive()
	{
		$this->assertEquals($this->getOneInstanceObj()->calcul(5), array(5));
	}

	public function testSixShouldReturnTwoThree()
	{
		$this->assertEquals($this->getOneInstanceObj()->calcul(6), array(2,3));
	}

	public function testEightShouldReturnTwoTwoTwo()
	{
		$this->assertEquals($this->getOneInstanceObj()->calcul(8), array(2,2,2));
	}

	public function testNineShouldReturnThreeThree()
	{
		$this->assertEquals($this->getOneInstanceObj()->calcul(9), array(3,3));
	}

	public function testTwentySevenShouldReturnThreeThreeThree()
	{
		$this->assertEquals($this->getOneInstanceObj()->calcul(27), array(3,3,3));
	}

	public function testTwentyFiveShouldReturnFiveFive()
	{
		$this->assertEquals($this->getOneInstanceObj()->calcul(25), array(5,5));
	}

	public function testFortyEightShouldReturnTwoTwoTwoTwoThree()
	{
		$this->assertEquals($this->getOneInstanceObj()->calcul(48), array(2,2,2,2,3));
	}

	public function testFortyNineShouldReturnSevenSeven()
	{
		$this->assertEquals($this->getOneInstanceObj()->calcul(49), array(7,7));
	}

	public function test121ShouldReturnElevenEleven()
	{
		$this->assertEquals($this->getOneInstanceObj()->calcul(121), array(11,11));
	}

	public function test8877ShouldReturn3x11x269()
	{
		$this->assertEquals($this->getOneInstanceObj()->calcul(8877), array(3,11,269));
	}
*/

}






 ?>