
// Create FizzBuzz obj
var FizzBuzz = {

	getResult: function(num){
		
		var message = "";

		if (num % 3 == 0){			
			message += "fizz";
		}

		if (num % 5 == 0){			
			message += "buzz";
		}

		return message || num;
	}
}