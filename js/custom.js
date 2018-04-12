// iife starts
(function () { 

	console.log('A');
    
	var appendInput = $('#appendInput');
	var radiusInput = $('<input id="radiusInput" type="number" name="number" value="" placeholder="Enter the radius">');
	var lengthInput = $('<input id="lengthInput" type="number" name="number" value="" placeholder="Enter the length">');
	var widthInput = $('<input id="widthInput" type="number" name="width" value="" placeholder="Enter the width">');
	var radioVal = $('input:checked').val();
	var formDiv = $('.form');


	$('input').on('click', function(){

		var radioVal = $('input:checked').val();

		if (radioVal == 'Rectangle'){

			console.log(radioVal);
			appendInput.append(lengthInput);
			appendInput.append(widthInput);
			$('#radiusInput').remove();
			// formDiv.addClass("formRect");
			// formDiv.removeClass("formCircle");

		} else if (radioVal == 'Circle'){

			console.log(radioVal);
			appendInput.append(radiusInput);
			$('#lengthInput').remove();
			$('#widthInput').remove();
			// formDiv.addClass("formCircle");
			// formDiv.removeClass("formRect");

		} else if (radioVal == 'Square'){

			console.log(radioVal);
			appendInput.append(lengthInput);
			$('#radiusInput').remove();
			$('#widthInput').remove();
			// formDiv.removeClass("formRect");
			// formDiv.removeClass("formCircle");

		};

	});

// if (SVG.supported) {
//   var draw = SVG('drawing')
//   var rect = draw.rect(100, 100)
// } else {
//   alert('SVG not supported')
// }

})(); //iife ends