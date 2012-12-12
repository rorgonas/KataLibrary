<?php

class BowlingGame
{
	
	public function roll($rolls = array(0)) 
	{
		$roll_count = count($rolls);
		$rolls_to_count = $rolls;

		if ( $roll_count > 1){

			for($i = 0; $i < $roll_count; $i += 2){

				// Check if next ball is set or not
				if (isset($rolls[$i+1])){
					$spare_count = $rolls[$i] + $rolls[$i+1];
				}
			
				// Spare situation
				if ( $spare_count == 10){			
					array_push($rolls_to_count, $rolls[$i+2]);
				}

			}	

			// Incomplete frame situation
			if ($roll_count % 2 != 0){
				$rolls_to_count = array_slice($rolls, 0, $roll_count-1);
			}		
		
		}

		return array_sum($rolls_to_count);
	}


}

?>