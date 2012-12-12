<?php

class BowlingGame
{
	
	public function score($roll = array(0)) 
	{
		$roll_count = count($roll);
		
		if ( $roll_count > 1){
			$spare_count = $roll[0] + $roll[1];
			
			if ( $spare_count == 10){
				// spare
				$next_frame_count = $roll[2] + $roll[3];
				return $spare_count + $roll[2] + $next_frame_count;
			}
		}

		if (($roll_count % 2 != 0) && ($roll_count > 1)){
			$complete_rolls = array_slice($roll, 0, $roll_count-1);
			return array_sum($complete_rolls);
		}


		
		
		return array_sum($roll);
	}


}

?>