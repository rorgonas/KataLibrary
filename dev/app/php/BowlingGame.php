<?php

class BowlingGame
{
	
	private $point_buffer = array();  // save all the spare and strike points

	private function collectPoints($next)
	{
		array_push($this->point_buffer, $next);
	}

	public function roll($rolls) 
	{
		$roll_count = count($rolls);		
		$spare_count = 0;
		$strike_count = 0;

		for($i = 0; $i < $roll_count; $i += 2){			

			$current = $rolls[$i];
			// Strike situation
			if ($current == 10){											

				if (isset($rolls[$i+1]) && $rolls[$i+1] == 10){
					$this->collectPoints($rolls[$i+1]);
				}
			

			}
			
			elseif (isset($rolls[$i+1])){
				$next = $rolls[$i+1];
				$spare_count = $current + $next;
				
				// Spare situation
				if ( $spare_count == 10){			
					if(isset($rolls[$i+2])){
						$this->collectPoints($rolls[$i+2]);
					}
				}
			}
		
		}	

		// Incomplete frame situation
		if ($roll_count % 2 != 0 && $roll_count > 1){
			$rolls = array_slice($rolls, 0, $roll_count-1);
		}

		// collect and add points for all spares
		$rolls = array_merge($rolls, $this->point_buffer);
		return array_sum($rolls);
	}


}

?>