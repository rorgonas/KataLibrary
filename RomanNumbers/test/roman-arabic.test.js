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

test("When I is preceded by another Roman number, substract one unit", function(){
	equal(Convert.toArabic('IV'), 4, "IV should return 4");
	equal(Convert.toArabic('IX'), 9, "IX should return 9");
});

test("Matching all Roman Numerals", function(){
	equal(Convert.toArabic('V'), 5, "V should return 5");
	equal(Convert.toArabic('X'), 10, "X should return 10");
	equal(Convert.toArabic('L'), 50, "L should return 50");
	equal(Convert.toArabic('C'), 100, "C should return 100");
	equal(Convert.toArabic('D'), 500, "D should return 500");
	equal(Convert.toArabic('M'), 1000, "M should return 1000");
});

test("VI should return 6", function(){
	equal(Convert.toArabic('VI'), 6);
});

test("VII should return 7", function(){
	equal(Convert.toArabic('VII'), 7);
});

test("VIII should return 8", function(){
	equal(Convert.toArabic('VIII'), 8);
});

test("XI should return 11", function(){
	equal(Convert.toArabic('XI'), 11);
});

test("XII should return 12", function(){
	equal(Convert.toArabic('XII'), 12);
});

test("XIV should return 14", function(){
	equal(Convert.toArabic('XIV'), 14);
});

test("XVII should return 17", function(){
	equal(Convert.toArabic('XVII'), 17);
});

test("XX should return 20", function(){
	equal(Convert.toArabic('XX'), 20);
});

test("XXX should return 30", function(){
	equal(Convert.toArabic('XXX'), 30);
});

test("XL should return 40", function(){
	equal(Convert.toArabic('XL'), 40);
});

test("IL should return 39", function(){
	equal(Convert.toArabic('IL'), 39);
});

