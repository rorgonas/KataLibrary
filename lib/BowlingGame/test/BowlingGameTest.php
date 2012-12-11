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

	public function testOneTurn()
	{
		$this->assertEquals($this->game->score(array(2,3)),5);
	}

	public function testTwoTurnsWithSecondEmpty(){
		$this->assertEquals($this->game->score(array(1,2), array()),3);
	}

	public function testTwoTurns(){
		$this->assertEquals($this->game->score(array(1,2), array(3,4)),10);
	}

	public function testThreeTurns(){
		//$expected = array(array(1,2), array(3,4), array());
		$this->assertEquals($this->game->score(array(1,2), array(3,4), array()),10);
		$this->assertEquals($this->game->score(array(1,2), array(3,4), array(2,2)),14);
	}

	
}






 ?>