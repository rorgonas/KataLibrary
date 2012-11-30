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
			  "._|"]
	}
	
	var lines = ["", "", ""];
	
	// Convert number into string
	number = number.toString();

	// Make array
	numbers = number.split("");

	for (var i=0; i < numbers.length; i++){
		
		number = numbers[i];

		lines[0] += symbols[number][0] + " ";
		lines[1] += symbols[number][1] + " ";
		lines[2] += symbols[number][2] + " ";

	}

	// Remove last space from each line
	lines[0] = lines[0].substring(0, lines[0].length -1);
	lines[1] = lines[1].substring(0, lines[1].length -1);
	lines[2] = lines[2].substring(0, lines[2].length -1);

	return lines.join("\n")

}