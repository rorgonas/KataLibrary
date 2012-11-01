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

		var symbols = {			

			"M": 1000,
			"D": 500,
			"C": 100,
			"L": 50,
			"XL": 40,
			"X": 10,
			"IX": 9,
			"V": 5,
			"IV": 4,
			"I": 1
		}

		function addUnit(number, index) {
			// var arabic = symbols[index];
			// // if (number = "IV"){
			// //  	//return 4;			
			// // }
			// arabic += Convert.toArabic(number.substring(1));	
			// return arabic;
		}

		for (var key in symbols) {
		  if (symbols.hasOwnProperty(key)) {		  		

		  	if (roman.match("^" + key)) {
		  		//return addUnit(roman, key);
		  		var arabic = symbols[key];
				
				if ( roman == "XL"){
					console.log('The numbers starts with XL');
					return symbols[key];
				}

				if ( roman == "IX"){
					console.log('The numbers starts with IX');
					return symbols[key];
				}

				if ( roman == "IV"){
					console.log('The numbers starts with IV');
					return symbols[key];
				}				

				arabic += Convert.toArabic(roman.substring(1));	
				return arabic;
		  	}

		  }
		}		

		// Remember: This covers the first Test scenario: I, II and III :) 
		return roman.length;
	}
}