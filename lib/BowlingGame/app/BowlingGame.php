<?php

class BowlingGame
{
	public function __construct()
	{
		// no need for now
	}

	public function score($rolls1 = NULL, $rolls2 = NULL) 
	{
		$score = 0;
		
		if (!isset($rolls1)){
			$rolls1 = array(0);
		}

		if (!isset($rolls2)){
			$rolls2 = array(0);
		}
		
		$frames = array(
			array($rolls1), 
			array($rolls2)
			);

		foreach($rolls1 as $value){
				$score += $value;
		}

		foreach($rolls2 as $value){
				$score += $value;
		}
		return $score;
	}


}

?>