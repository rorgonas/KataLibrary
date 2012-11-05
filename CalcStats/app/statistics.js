// Your task is to process a sequence of integer numbers
// to determine the following statistics:

//     o) minimum value
//     o) maximum value
//     o) number of elements in the sequence
//     o) average value

// For example: [6, 9, 15, -2, 92, 11]

//     o) minimum value = -2
//     o) maximum value = 92
//     o) number of elements in the sequence = 6
//     o) average value = 21.833333

// ----------------------------------------------------------

var Calculate = {
	
	Min: function(){
		
		var minVal;

		if (arguments.length > 0){
			minVal = arguments[0];
		}

		// Before using arguments as Array we need to convert the Object
		var arg = Array.prototype.slice.call(arguments);
		var minVal = arg.sort()[0];

		return minVal;
	},

	Max: function(){
		
		var maxValue;

		if (arguments.length > 0){
			maxVal = arguments[0];
		}

		// Before using arguments as Array we need to convert the Object
		var arg = Array.prototype.slice.call(arguments);
		var argLength = arg.sort().length -1;
		var maxVal = arg.sort()[argLength];

		return maxVal;
	}
}