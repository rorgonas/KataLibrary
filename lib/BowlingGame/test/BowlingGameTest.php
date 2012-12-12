<?php


/**
 * Bowling Game kata
 * @author Rolland Orgonas I.
 */



require_once 'PHPUnit/Autoload.php';
require_once 'app/BowlingGame.php';


class BowlingGameTest extends PHPUnit_Framework_TestCase
{

	public $game;

	public function __construct()
	{
		$this->game = new BowlingGame;
	}

	public function testEmptyRoll()
	{
		$this->assertEquals($this->game->score(),0);
	}

	public function testOneRoll()
	{
		$this->assertEquals($this->game->score(array(1)),1);
	}

	public function testOneFrame()
	{
		$this->assertEquals($this->game->score(array(2,4)),6);
	}

	public function testOneIncompleteFrame()
	{
		$this->assertEquals($this->game->score(array(2,4,2)),6);
	}

	public function testSecondIncompleteFrame()
	{
		$this->assertEquals($this->game->score(array(2,4,2,1,0)),9);
	}

	public function testASpare()
	{
		$this->assertEquals($this->game->score(array(2,8,3,1)),17);
	}


	
}






 ?>