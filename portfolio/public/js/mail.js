$(function() {

    var form = $('#form');

    $(form).submit(function(event) {
	    // Stop the browser from submitting the form.
	    console.log("hi");
	    event.preventDefault();

	    var formData = $(form).serialize();
	    $.ajax({
		    type: 'POST',
		    url: $(form).attr('action'),
		    data: formData
		}).done(function(response) {		    

		    // Clear the form.
		    $('#name').val('');
		    $('#email').val('');
		    $('#message').val('');
		}).fail(function(data) {
		    console.log(data.responseText);
		});

		$('.msg').fadeIn();
		$('#name').val('');
		$('#email').val('');
		$('#message').val('');

	});


});