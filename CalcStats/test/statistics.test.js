// TEKCraft - 2012
// Method: TDD
// Kata: Calcul Statistics
// Author: Rolland Orgonas I.


// ---------------------------------------------------------------

test("Given array of integer with ONE value return value", function(){
	equal(Calculate.Min(1), 1);
	equal(Calculate.Min(2), 2);
});

test("Given array with more values return smalest integer", function(){
	equal(Calculate.Min(2,3,4),2);
	equal(Calculate.Min(2,3,4, 7, 8, 1, -2, 3),-2);
});

test("Given array with more values return bigest integer", function(){
	equal(Calculate.Max(2,3,4),4);
	equal(Calculate.Max(2,3,4, 7, 8, 1, -2, 3),8);
});