<?php 

/**
 * File Manipulation Helpers Class
 * @author: rorgonas
 */

class File
{

	public static Reader()
	{
		// open file for read		
		$data = file('description.txt') or die ('Canot open the file');

		// get the title 
		$title = trim($data[0]);
		echo "<h2>$title</h2>";

		// remove first line from array
		array_shift($data);

		// iterate over content and print it
		foreach ($data as $line) {
			echo nl2br($line);
		}
	}

}


?>