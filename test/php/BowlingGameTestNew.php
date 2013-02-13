<?php


/**
 * Bowling Game kata
 * @author Rolland Orgonas I.
 */




class BowlingGameTestNew extends PHPUnit_Framework_TestCase
{

	public function setUP() {
		include 'http://localhost:8080/KataLibrary/dev/app/php/BowlingGameNew.php';
		
	}

	public function testIfPlayerHitsAllInOneShot() {
		$test = array(
			'0' => array(2,8),
			'1' => array(0,0));

		$this->assertEquals(true, Frame::isStrike($test));
	}

	
}






 ?>