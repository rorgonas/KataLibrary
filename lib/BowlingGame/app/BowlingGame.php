<?php

class BowlingGame
{
	
	public function roll($rolls = array(0)) 
	{
		$roll_count = count($rolls);
		$point_buffer = array();  // save all the spare and strike points

		if ( $roll_count > 1){

			for($i = 0; $i < $roll_count; $i += 2){

				if (isset($rolls[$i+1])){
					$spare_count = $rolls[$i] + $rolls[$i+1];
				}
			
				if ( $spare_count == 10){			
					if(isset($rolls[$i+2])){
						array_push($point_buffer, $rolls[$i+2]);
					}
				}
			}	

			// Incomplete frame situation
			if ($roll_count % 2 != 0){
				$rolls = array_slice($rolls, 0, $roll_count-1);
			}		
		
		}

		// collect and add points for all spares
		$rolls = array_merge($rolls, $point_buffer);
		return array_sum($rolls);
	}


}

?>