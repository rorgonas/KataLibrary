
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
		var symbolsValue = {
			"X": 10,
			"V": 5
		}
		
		function addUnit(romanNumber, symbol) {
			var returnValue = symbolsValue[symbol];
			returnValue += Roman.toArabic(roman.split(symbol)[1]);

			return returnValue;
		}

		for (var key in symbolsValue) {
		  if (symbolsValue.hasOwnProperty(key)) {
		  	if (roman.match("^" + key)) {
		  		return addUnit(roman, key);
		  	}

		  	if (roman.match("^I" + key + "$")) {
		  		return symbolsValue[key]-1;
		  	}
		  }
		}		

		return roman.length;
	}
}