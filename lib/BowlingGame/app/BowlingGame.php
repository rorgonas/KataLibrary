<?php

class BowlingGame
{
	public function __construct()
	{
		// no need for now
	}

	public function score($rolls1 = array(0), $rolls2 = array(0), $rolls3 = array(0)) 
	{
		$score = array();		
		$turns = array(
			array('roll'=> $rolls1, 'score'=>'0'), 
			array('roll' => $rolls2, 'score'=>'0'),
			array('roll'=> $rolls3, 'score' =>'0')
			);

		for ($i = 0; $i < count($turns); $i++){

			$rolls = $turns[$i]['roll'];
			foreach($rolls as $value){
					//$score += $value;
					$turns[$i]['score'] += $value;
					$score[$i] = $turns[$i]['score'];
			}

		}
		return array_sum($score);
	}


}

?>