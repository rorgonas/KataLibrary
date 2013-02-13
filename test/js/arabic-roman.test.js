// TEKCraft - 2012
// Method: TDD
// Kata: Convert Arabic to Roman
// Author: Rolland Orgonas I.
// Coach:  Vincent Simard

// ---------------------------------------------------------------

test("Convert 1,2,3,4 and 5", function(){
	equal(Convert.toRoman(1), "I", "I should return I");
	equal(Convert.toRoman(2), "II", "I should return II");
	equal(Convert.toRoman(4), "IV", "I should return IV");
	equal(Convert.toRoman(5), "V", "I should return V");
});

test("Convert 6 to 8", function(){
	equal(Convert.toRoman(6), "VI", "I should return VI");
	equal(Convert.toRoman(8), "VIII", "I should return VIII");
});

test("Convert 9", function(){
	equal(Convert.toRoman(9), "IX", "I should return IX");
});

test("Convert 10,11,12,13", function(){
	equal(Convert.toRoman(10), "X", "I should return X");
	equal(Convert.toRoman(13), "XIII", "Return XIII");
	equal(Convert.toRoman(14), "XIV", "Return XIV");
});