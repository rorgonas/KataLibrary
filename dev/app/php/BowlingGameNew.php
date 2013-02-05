<?php

class BowlingGame
{
	public function getScore($p_frame = array())
	{

		return array_sum($p_frame);
	}
}

?>