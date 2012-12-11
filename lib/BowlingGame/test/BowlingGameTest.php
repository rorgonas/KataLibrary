<?php


/**
 * Bowling Game kata
 * @author Rolland Orgonas I.
 */



require_once 'PHPUnit/Autoload.php';
require_once 'app/BowlingGame.php';


class BowlingGameTest extends PHPUnit_Framework_TestCase
{

	public function __construct()
	{
		// Create one instance of the BowlingGame Class
		$this->game = new BowlingGame;
	}

	public function testNoRolls()
	{
		$this->assertEquals($this->game->score(),0);
	}

	public function testOneRoll()
	{
		$this->assertEquals($this->game->score(array(1)), 1);
		$this->assertEquals($this->game->score(array(5)),5);
	}

	public function testOneFrame()
	{
		$this->assertEquals($this->game->score(array(2,3)),5);
	}

	public function testTwoFramesWithSeconFrameEmpty(){
		$this->assertEquals($this->game->score(array(1,2), array()),3);
	}

	public function testTwoFrames(){
		$this->assertEquals($this->game->score(array(1,2), array(3,4)),10);
	}

	// public function testThreeFrames(){
	// 	$this->assertEquals($this->game->score(array(2,4,0,6,1,2)),15);
	// }


}






 ?>