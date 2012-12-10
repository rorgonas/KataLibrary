<?php

class BowlingGame
{
	public function __construct()
	{
		//$this->rolls = $rolls;
	}

	public function score($rolls = Array(0)) {
		$rolls;
		$score = 0;

		foreach($rolls as $value){
				$score += $value;
		}
		return $score;
	}
}

?>