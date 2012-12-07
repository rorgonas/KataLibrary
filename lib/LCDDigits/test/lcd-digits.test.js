// TEKCraft - 2012
// Method: TDD
// Kata: Creteate LCD Digit represeantation of an integer
// Author: Rolland Orgonas I.
// Coach:  Fernando

// ---------------------------------------------------------------

test("Convert one integer into LCD Digit format", function(){
	equal(ConvertIntegerIntoDigit(0), "._.\n" +
									  "|.|\n" +
									  "|_|", "Return Digit for 0");
	
	equal(ConvertIntegerIntoDigit(1), "...\n" +
									  "..|\n" +
									  "..|", "Return Digit for 1");
	
	equal(ConvertIntegerIntoDigit(2), "._.\n" +
									  "._|\n" + 
									  "|_.", "Return Digit for 2");
	
	equal(ConvertIntegerIntoDigit(3), "._.\n" +
									  "._|\n" + 
									  "._|", "Return Digit for 3");
	
	equal(ConvertIntegerIntoDigit(4), "...\n" +
									  "|_|\n" +
									  "..|", "Return Digit for 4");
	
	equal(ConvertIntegerIntoDigit(5), "._.\n" +
									  "|_.\n" +
									  "._|", "Return Digit for 5");
})

test("Convert 2 digits in LCD format", function(){
	equal(ConvertIntegerIntoDigit(15), "... ._.\n" + 
									   "..| |_.\n" +
									   "..| ._|", "Return Digit for 15");
	
	equal(ConvertIntegerIntoDigit(25), "._. ._.\n" + 
									   "._| |_.\n" +
									   "|_. ._|", "Return Digit for 25");
});

test("Convert n digits in LCD format", function(){
	equal(ConvertIntegerIntoDigit(150), "... ._. ._.\n" + 
									    "..| |_. |.|\n" +
									    "..| ._| |_|", "Return Digit for 150");

	equal(ConvertIntegerIntoDigit(997), "._. ._. ._.\n" + 
									    "|_| |_| ..|\n" +
									    "._| ._| ..|", "Return Digit for 997");

});

