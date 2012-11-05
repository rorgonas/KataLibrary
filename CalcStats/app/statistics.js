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
		console.log(arguments.length);
		var index,
			minVal;

		if (arguments.length > 0){
			minVal = arguments[0];
		}

		// Before using arguments as array we need to convert form Object
		var arg = Array.prototype.slice.call(arguments);
		var array_sort = arg.sort();
		minVal = array_sort[0];

		return minVal;
	},

	Max: function(){
		return 4;
	}
}