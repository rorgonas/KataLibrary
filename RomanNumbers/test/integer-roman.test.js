// Convert Roman number into Arabic

// ---------------------------------------------------------------

test("should return the number of 'I' for I, II, III", function(){
	equal(Roman.toArabic('I'), 1);
	equal(Roman.toArabic('II'), 2);
	equal(Roman.toArabic('III'), 3);
})

test("IV should return 4", function(){
	equal(Roman.toArabic('IV'), 4);
})

test("V should return 5", function(){
	equal(Roman.toArabic('V'), 5);
})

test("VI should return 6", function(){
	equal(Roman.toArabic('VI'), 6);
})

test("VII should return 7", function(){
	equal(Roman.toArabic('VII'), 7);
})

test("VIII should return 8", function(){
	equal(Roman.toArabic('VIII'), 8);
})

test("IX should return 9", function(){
	equal(Roman.toArabic('IX'), 9);
})

test("X should return 10", function(){
	equal(Roman.toArabic('X'), 10);
})

test("XI should return 11", function(){
	equal(Roman.toArabic('XI'), 11);
})