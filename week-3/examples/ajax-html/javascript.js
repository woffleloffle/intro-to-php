$('document').ready(function(){

	$.ajax({
		type: "GET",
		url: "test.html"
	})
	.done(function(response) {

		// Do things
		console.log('This is what is returned:', response);

		$('#plonk').html(response);

	});

});