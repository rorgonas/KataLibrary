<?php


/**
 * Bowling Game kata
 * @author team effort
 */



require_once 'PHPUnit/Autoload.php';
require_once 'app/BowlingGameNew.php';


class BowlingGameTestNew extends PHPUnit_Framework_TestCase
{

	//public $game;

	public function testOnrRoll() {
		$game = new BowlingGame;
		$this->assertEquals(1, $game->getScore(array(1)));
	}

	public function testTwoRolls() {
		$game = new BowlingGame;
		$this->assertEquals(9, $game->getScore(array(4,5)));
	}

	public function testOneStrikeOneSpare() {
		$game = new BowlingGame;
		$this->assertEquals(31, $game->getScore(array(10,0,2,8,1)));
	}



}






 ?>