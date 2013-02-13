var Convert = {

	toRoman: function(number){

		var numRoman = "";
	
		var symbols = {
			 4 : "IV",
			 5 : "V",
			 9: "IX",
			 10: "X"
		}

		for (var i = 0;i < number; i++)
		{
			

			if(number == 4){
				number = number - 4;	
		 		numRoman += symbols[4];
		 	}

			if (number >= 5 && number <= 8)
			{
				number = number - 5;								
				numRoman = symbols[5];
			}
			
			if (number == 9 )
			{
				numRoman = symbols[9];
			}
			
			
			if (number >= 10)
			{
				number = number - 10;								
				numRoman = symbols[10];
			}

			if (number > 0 && number < 4)
			{
				numRoman += "I";
			}

		}

		return numRoman;
	}
}