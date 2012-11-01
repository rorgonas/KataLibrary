// TEKCraft - 2012
// Method: TDD
// Kata: Convert Roman number into Arabic
// Author: Rolland Orgonas I.
// Coach:  Vincent Simard

// ---------------------------------------------------------------

test("For I, II, III return the number of 'I'", function(){
	equal(Convert.toArabic('I'), 1, "I should return 1");
	equal(Convert.toArabic('II'), 2, "II should return 2");
	equal(Convert.toArabic('III'), 3, "III should return 3");
});

test("Matching all Roman Numerals", function(){
	equal(Convert.toArabic('V'), 5, "V should return 5");
	equal(Convert.toArabic('X'), 10, "X should return 10");
	equal(Convert.toArabic('L'), 50, "L should return 50");
	equal(Convert.toArabic('C'), 100, "C should return 100");
	equal(Convert.toArabic('D'), 500, "D should return 500");
	equal(Convert.toArabic('M'), 1000, "M should return 1000");
});

test("Multiples of X", function(){
	equal(Convert.toArabic('XX'), 20, "XX should return 20");
	equal(Convert.toArabic('XXX'), 30, "XXX should return 30");
});


test("When Roman number is prefixed by I, II or III", function(){
	equal(Convert.toArabic('VI'), 6, "VI should return 6");
	equal(Convert.toArabic('VII'), 7, "VII should return 7");
	equal(Convert.toArabic('VIII'), 8, "VIII should return 8");
	equal(Convert.toArabic('XI'), 11, "XI should return 11");
	equal(Convert.toArabic('XII'), 12, "XII should return 12");	
	equal(Convert.toArabic('XVII'), 17, "XVII should return 17");
});

test("When Roman number is preceded by I", function(){
	equal(Convert.toArabic('IV'), 4, "IV should return 4");
	equal(Convert.toArabic('IX'), 9, "IX should return 9");
	equal(Convert.toArabic('XL'), 40, "XL should return 40");
	//equal(Convert.toArabic('XLV'), 45, "XLV should return 45");
});

/*
test("When Roman number is preceded by smaller number", function(){
	equal(Convert.toArabic('XIV'), 14, "XIV should return 14");
	equal(Convert.toArabic('IL'), 39, "IL should return 39");
	equal(Convert.toArabic('XL'), 40, "XL should return 40");
});
*/