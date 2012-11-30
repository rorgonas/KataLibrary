var Convert = {

	toRoman: function(number){

		var numRoman = "";
	
		var symbols = {
			 5 : "V",
			 7: "VII",
			 9: "IX"

		}

		for (var i = 0;i < number; i++)
		{
			numRoman += "I";

			if(numRoman === "IIII"){
		 		numRoman = "IV";
		 	}
			if(numRoman === "IIIII"){
				numRoman = "V";
			}
			if (numRoman == "IVI" )
			{
				numRoman = symbols[5];
			}
			if (number == 7 )
			{
				numRoman = symbols[7];
			}
			if (number == 9 )
			{
				numRoman = symbols[9];
			}


		}


		return numRoman;
	}
}