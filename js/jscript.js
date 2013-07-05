var apac = {
	bangalore : 'Bangalore',
	beijing: 'Beijing',
	chennai: 'Chennai',
	hongkong: 'Hong Kong',
	kualalumpur: 'Kuala Lumpur',
	mumbai: 'Mumbai',
	newdelhi: 'New Delhi',
	shanghai: 'Shanghai',
	singapore: 'Singapore',
	sydney: 'Sydney',
	tokyo: 'Tokyo'
};
var emea = {
	amsterdam: 'Amsterdam',
	copenhagen: 'Copenhagen',
	johannesburg: 'Johannesburg',
	london: 'London',
	madrid: 'Madrid',
	milan: 'Milan',
	munich: 'Munich',
	paris: 'Paris',
	stockholm: 'Stockholm'
};
var na = {
	boston: 'Boston',
	newyork: 'New York',
	rochester: 'Rochester',
	sanfrancisco: 'San Francisco'
};

$(document).ready(function() {
	$('#region').change(function() {
		var region = $(this).val();
		var val = '';
		var city = '';
		$('#location').empty();
		$('<option/>').val('').text('--Select--').appendTo($('#location'));
		switch (region) {
			case 'APAC':
			for(city in apac) {
				val = apac[city];
				$('<option/>').val(city).text(val).appendTo($('#location'));
			}
			break;
			case 'EMEA':
			for(city in emea) {
				val = emea[city];
				$('<option/>').val(city).text(val).appendTo($('#location'));
			}
			break;
			case 'NA':
			for(city in na) {
				val = na[city];
				$('<option/>').val(city).text(val).appendTo($('#location'));
			}
			break;
		}
	});

	$('#infoForm').validate({
		rules: {
			name: 'required',
			email: {
				required: true,
				email: true
			},
			age: 'required',
			region: 'required',
			location: 'required',
			position: 'required'
		},
		errorPlacement: function(error, element) {
			error.insertBefore(element);
		},
		submitHandler: function(form) {
			form.submit();
		}
	});
});