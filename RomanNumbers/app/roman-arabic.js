// Convert Roman numbers into Arabic

// Split _Roman numbers in units and apply pattern when need


// Symbol	Value
// I	1
// V	5
// X	10
// L	50
// C	100
// D	500
// M	1,000

// ----------------------------------------------------------

var Convert = {
	
	toArabic: function(roman){

		var arabic;
		var symbols = {			

			"M":  1000,
			"CM": 900,
			"D":  500,
			"CD": 400,
			"C":  100,
			"XC": 90,
			"L":  50,
			"XL": 40,
			"X":  10,
			"IX": 9,
			"V":  5,
			"IV": 4,
			"I":  1
		}

		for (var key in symbols) {
		  if (symbols.hasOwnProperty(key)) {		  		

		  	// grab the first Roman symbol
		  	var symbol = roman.match("^" + key);

		  	if (( symbol == "XL") || ( symbol == "IX") || ( symbol == "IV") || ( symbol == "XC") ||	( symbol == "CD") || ( symbol == "CM")){				
					arabic = symbols[key];
					arabic += Convert.toArabic(roman.substring(2));				
					return arabic;
			}

		  	if (symbol != null) {
		  		
		  		// save his arabic number corespondence
		  		arabic = symbols[key];
				arabic += Convert.toArabic(roman.substring(1));				
				return arabic;
		  	}

		  }

		}		

		// Remember: This covers the first Test scenario: I, II and III :) 
		return roman.length;
	}
}