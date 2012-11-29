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

ConvertNumberIntoLCD = function(number){
	
	var symbols = {
		
		"2": "._.\n" + 
			 "._|\n" + 
			 "|_.",
		"1": "...\n" + 
			 "..|\n" + 
			 "..|",
		"0": "._.\n" + 
			 "|.|\n" + 
			 "|_|"
			}

	// Phase one
	// if (number === 0){
	// 	console.log(symbols[0]);
	// 	return symbols[0];
	// }
	// if (number === 1){
	// 	console.log(symbols[1]);
	// 	return symbols[1];
	// }
	// if (number === 2){
	// 	console.log(symbols[2]);
	// 	return symbols[2];
	// }

	// Phase two - refactoring
	for (var key in symbols){
		if (symbols.hasOwnProperty(key)) {
			if (number.toString() == key){
				console.log(symbols[key]);
				return symbols[key]
			}
		}
	}


}
