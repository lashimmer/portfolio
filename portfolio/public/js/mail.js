$(function() {

    var form = $('#form');

    $(form).submit(function(event) {
	    // Stop the browser from submitting the form.
	    event.preventDefault();

	    var formData = $(form).serialize();
	    $.ajax({
		    type: 'POST',
		    url: $(form).attr('action'),
		    data: formData
		}).done(function(response) {
			$('.error').hide();
		    $('.msg').fadeIn();

		    // Clear the form.
		    $('#name').val('');
		    $('#email').val('');
		    $('#message').val('');
		}).fail(function(data) {
			$('.msg').hide();
		    $('.error').fadeIn();

		});


	});


});