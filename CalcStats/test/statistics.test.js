// TEKCraft - 2012
// Method: TDD
// Kata: Calcul Statistics
// Author: Rolland Orgonas I.


// ---------------------------------------------------------------

test("Module Minimum value", function(){	
	equal(Calculate.Min(1), 1, "Test when for 1 return 1");
	equal(Calculate.Min(2), 2, "Test when for 2 return 2");
	equal(Calculate.Min(2,3,4),2, "Test for a squence of 3");
	equal(Calculate.Min(2,3,4, 7, 8, 1, -2, 3),-2, "Test for a bigger squence also with negative elements");
});

test("Module Maximumum value: Given array with more values return bigest integer", function(){	
	equal(Calculate.Max(2,3,4),4);
	equal(Calculate.Max(2,3,4, 7, 8, 1, -2, 3),8);
});

test("Module Number of element in sequence: Given array return number of integers", function(){
	equal(Calculate.Num(1),1, "Test for one value");
	equal(Calculate.Num(1,2),2, "Test for two value");
});

test("Module Avarage value", function(){
	equal(Calculate.Average(1),1, "Test avarage when sequence has one element");
	equal(Calculate.Average(1, 3), 2, "Test avarage for 1 and 3 is 2");	
	equal(Calculate.Average(1, 3, 5, 1), 2.5, "Test avarage for 1,3,5, 1 is 2.5");
	equal(Calculate.Average(-1, 3, 5, 0), 1.75, "Test avarage for -1,3,5, 0 is 1.75");
})

test("When no parameter are passed to the function return Undefined", function(){
	equal(Calculate.Min(), undefined);
	equal(Calculate.Max(),undefined);
	equal(Calculate.Num(), undefined);
	equal(Calculate.Average(), undefined);
});
