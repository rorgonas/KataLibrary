// For a given natural number greater than zero return

//    “fizz” if the number is dividable by 3
//    “buzz” if the number is dividable by 5
//    “fizzbuzz” if the number is dividable by 1
// 	  for any other posibilities output the number

// 0
// 1
// 2
// fizz
// 4
// buzz
// fizz
// 7
// 8
// fizz
// buzz
// ...

// ---------------------------------------------------------------

test("Test when 3 is Divisible with 3", function(){
	var result = FizzBuzz.getResult(3);
	equal(result, "fizz", "If return value is fizz");
})

test("Test when 5 is Divisible with 5", function(){
	var result = FizzBuzz.getResult(5);
	equal(result, "buzz", "If return value is buzz");
})

test("Test when 15 is Divisible with 15", function(){
	var result = FizzBuzz.getResult(3*5);
	equal(result, "fizzbuzz", "If return value is fizzbuzz");
})

test("Test when 7 is Divisible with 7", function(){
	var result = FizzBuzz.getResult(7);
	equal(result, "7", "If return value is 7");
})