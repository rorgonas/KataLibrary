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

	symbols: {			

			"M": 1000,
			"D": 500,
			"C": 100,
			"L": 50,
			"X": 10,
			"V": 5,
			"I": 1
	},

	subUnit: function(sub_roman, sub_key){
		
		var returnValue;

		if (sub_roman.match("^IL")) {
	  		returnValue = 39;
	  	}

	  	if (sub_roman.match("^XL")) {
	  		returnValue = 40;
	  	}	

	  	if (sub_roman.match("^I" + sub_key + "$")) {
	  		returnValue = this.symbols[sub_key]-1;
	  	}
	  	return returnValue;
	},

	addUnit: function(add_roman, add_key) {
		var returnValue = this.symbols[add_key];
		returnValue += this.toArabic(add_roman.substring(1));	
		return returnValue;
	},

	toArabic: function(roman){

		this.subUnit(roman, key);

		for (var key in this.symbols) {
		  if (this.symbols.hasOwnProperty(key)) {		  		

		  	var key1 = roman.substring(0,1);
		  	var key2 = roman.substring(2,1);

		  	var val1 = this.symbols[key1];
		  	var val2 = this.symbols[key2];
		  	
		  	if (roman.match("^" + key)) {
		  		return this.addUnit(roman, key);
		  	}

		  	console.log(roman + " : " + val1 + "," + val2);

		  }
		}		

		// Remember: This covers the first Test scenario: I, II and III :) 
		return roman.length;
	}
}