<?php


/**
 * Bowling Game kata
 * @author Rolland Orgonas I.
 */



require_once 'PHPUnit/Autoload.php';
require_once '../../app/php/BowlingGame.php';


class BowlingGameTest extends PHPUnit_Framework_TestCase
{

	public $game;

	public function __construct()
	{
		$this->game = new BowlingGame;
	}

	public function testOneRoll()
	{
		$this->assertEquals(1, $this->game->roll(array(1)));
	}

	public function testOneFrame()
	{
		$this->assertEquals(6, $this->game->roll(array(2,4)));
	}

	public function testOneIncompleteFrame()
	{
		$this->assertEquals(6, $this->game->roll(array(2,4,2)));
	}

	public function testSecondIncompleteFrame()
	{
		$this->assertEquals(9, $this->game->roll(array(2,4,2,1,0)));
	}

	public function testOneSpare()
	{
		$this->assertEquals(17, $this->game->roll(array(2,8,3,1)));
	}

	public function testTurnSpareTurn()
	{
		$this->assertEquals(21, $this->game->roll(array(2,3,3,7,1,4)));
	}

	public function testOneTurnAndOneSpare()
	{
		$this->assertEquals(15, $this->game->roll(array(2,3,3,7)));
	}

	public function testOneTurnTwoSparesOneTurn()
	{
		$this->assertEquals(38, $this->game->roll(array(2,3,5,5,6,4,1,5)));
	}

	public function testOneTurnTwoSparesOneRoll()
	{
		$this->assertEquals(32, $this->game->roll(array(2,3,5,5,6,4,1)));
	}

	public function testIllegalStrikePoint()
	{
		$this->assertEquals(30, $this->game->roll(array(10,10)));
	}

	public function testTwoStrikesAndOneRoll()
	{
		$this->assertEquals(45, $this->game->roll(array(10,10,3,3)));
	}

	public function testOneRollAndOneStrike()
	{
		//$this->assertEquals(16, $this->game->roll(array(3,3,10,0)));
	}

	public function testThreeStrikes()
	{
		//$this->assertEquals(50, $this->game->roll(array(10,0,10,0,10,0)));
	}

	public function testIllegalStrikePointAndOneStrike()
	{
		//$this->assertEquals(30, $this->game->roll(array(10,10,10,0)));
	}

	public function testIllegalStrikePointAndIncompleteFrame()
	{
		//$this->assertEquals(20, $this->game->roll(array(10,10,10)));
	}
	
	public function testOneStrikeOneSpare()
	{
		//$this->assertEquals(30, $this->game->roll(array(10,0,5,5)));
	}

	public function testOneStrikeOneSpareAndIncompleteFrame()
	{
		//$this->assertEquals(32, $this->game->roll(array(10,0,5,5,2)));
	}

	public function testOneSpareOneStrike()
	{
		//$this->assertEquals(30, $this->game->roll(array(2,8,10,0)));
	}

	public function testAllFrameAreStrikes()
	{
		//$this->assertEquals(300, $this->game->roll(array(10,10,10,10,10,10,10,10,10,10)));
	}

}






 ?>