
// Convert convert Roman numbers into Arabic

// Split Roman numbers in units and apply pattern when need
// At the end unit lenght is the Number

// Symbol	Value
// I	1
// V	5
// X	10
// L	50
// C	100
// D	500
// M	1,000



var Roman = {

	toArabic: function(roman){
		var returnValue;
		var symbolsValue = {
			"V": 5,
			"X": 10
		}

		var lessValue = {
			"IV": 4,
			"IX": 9
		}

		function addUnit(romanNumber, symbol) {
			var returnValue;
			var numberOfI = 0;

			if (roman.match("^" + symbol)) {
				returnValue = symbolsValue[symbol];
				numberOfI = roman.split(symbol)[1].length;

				for(var i = 0; i < numberOfI; i++){
					returnValue += 1;
				}
			}

			return returnValue;
		}

		for (var key in symbolsValue) {
		  if (symbolsValue.hasOwnProperty(key)) {
		  	if (roman.match("^" + key)) {
		  		return addUnit(roman, key);
		  	}
		  }
		}

		// if (roman == "IX"){
		// 	return 9;
		// }

		// if (roman == "IV"){
		// 	return 4;
		// }

		for (var key in lessValue) {
		  if (lessValue.hasOwnProperty(key)) {
		  	if (roman.match("^" + key)) {
		  		return lessValue[key];
		  	}
		  }
		}

		return roman.length;
	}
}