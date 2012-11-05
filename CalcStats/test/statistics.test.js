// TEKCraft - 2012
// Method: TDD
// Kata: Calcul Statistics
// Author: Rolland Orgonas I.


// ---------------------------------------------------------------

test("Given array of integer with ONE value get value back", function(){
	equal(Calculate.Min(1), 1);
	equal(Calculate.Min(2), 2);
});

test("Given array with more values check return", function(){
	equal(Calculate.Min(2,3,4),2);
	equal(Calculate.Min(2,3,4, 7, 8, 1, -2, 3),-2);
})