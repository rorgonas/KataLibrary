// TEKCraft - 2012
// Method: TDD
// Kata: Creteate LCD Digit represeantation of an integer
// Author: Rolland Orgonas I.
// Coach:  Fernando

// ---------------------------------------------------------------

test("Convert one digit into correspondingLCD Digit", function(){
	equal(ConvertNumberIntoLCD(0), "._.\n" + 
								   "|.|\n" + 
			 					   "|_|", "For 1");
	equal(ConvertNumberIntoLCD(1), "...\n" + 
								   "..|\n" + 
			 					   "..|", "For 2");
	equal(ConvertNumberIntoLCD(2), "._.\n" + 
								   "._|\n" + 
			 					   "|_.", "For 3");
	equal(ConvertNumberIntoLCD(10), "._.\n" + 
								   "._|\n" + 
			 					   "|_.", "For 3");
})