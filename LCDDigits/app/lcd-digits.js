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

	var symbol = {
		"0": ["._.","|.|","|_|"],
		"1": ["...","..|","..|"],
		"2": ["._.","._|","|_."],
		"3": ["._.","._|","._|"],
		"4": ["...","|_|","..|"],
		"5": ["._.","|_.","._|"]
	}
	
	var lines = ["", "", ""];

	lines[0] = lines[0] + symbol[number][0];
	lines[1] = lines[1] + symbol[number][1];
	lines[2] = lines[2] + symbol[number][2];

	return lines.join("\n")

}