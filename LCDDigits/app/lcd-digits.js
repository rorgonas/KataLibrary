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
	
	var lines = ["", "", ""];
	
	// Convert number into string
	number = number.toString();

	// Transform into an array the number
	numbers = number.split("");

	for (var i=0; i < numbers.length; i++){
		
		number = numbers[i];
		
		// Build the 3 lines for output
		for (var idx = 0; idx < 3; idx ++){
			lines[idx] += symbols[number][idx] + " ";	
		}

	}

	// Remove space from each line
	for (var idx = 0; idx < 3; idx ++){
		lines[idx] = lines[idx].substring(0, lines[idx].length -1);
	}

	return lines.join("\n")

}