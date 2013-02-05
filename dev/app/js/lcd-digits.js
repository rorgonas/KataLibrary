// Your task is to create an LCD string representation of an
// integer value using a 3x3 grid of space, underscore, and 
// pipe characters for each digit. Each digit is shown below 
// (using a dot instead of a space)

// ._.   ...   ._.   ._.   ...   ._.   ._.   ._.   ._.   ._.
// |.|   ..|   ._|   ._|   |_|   |_.   |_.   ..|   |_|   |_|
// |_|   ..|   |_.   ._|   ..|   ._|   |_|   ..|   |_|   ..|


// Example: 910

// ._. ... ._.
// |_| ..| |.|
// ..| ..| |_|

// ----------------------------------------------------------


ConvertIntegerIntoDigit = function(number){

	var symbols = {
		"0": ["._."
			 ,"|.|",
			  "|_|"],

		"1": ["..."
			 ,"..|",
			  "..|"],

		"2": ["._."
			 ,"._|",
			  "|_."],

		"3": ["._.",
			  "._|",
			  "._|"],

		"4": ["...",
			  "|_|",
			  "..|"],

		"5": ["._.",
			  "|_.",
			  "._|"],

		"6": ["._."
			 ,"|_.",
			  "|_|"],

		"7": ["._."
			 ,"..|",
			  "..|"],

		"8": ["._."
			 ,"|_|",
			  "|_|"],

		"9": ["._.",
			  "|_|",
			  "._|"]
	}
	
	
	// Convert number into string
	number = number.toString();


	var lines = buildLCD();
	var output = refactorLCD(lines);

	// Build the 3 lines for output
	function buildLCD(){
		
		var lines = ["", "", ""]; 		// Init empty array for lines
		numbers = number.split(""); 	// Transform into an array the number
		
		for (var i=0; i < numbers.length; i++){
			number = numbers[i];
			for (var idx = 0; idx < 3; idx ++){
				lines[idx] += symbols[number][idx] + " ";	
			}
		}
		return lines;
	}
	
	// Refactor the output removing space from the end of each line
	function refactorLCD(lines){
		for (var idx = 0; idx < 3; idx ++){
			lines[idx] = lines[idx].substring(0, lines[idx].length -1);
		}
		return lines;
	}

	return output.join("\n")

}