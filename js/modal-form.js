$(document).ready(function() {
	$('button#open_modal_form').click( function(event){
		event.preventDefault();
			$('#modal_form')
				.css('display', 'block')
				.animate({opacity: 1, top: '70%'}, 200);
	});
	$('#modal_close, #submit-1').click( function(){
		$('#modal_form')
			.animate({opacity: 0, top: '45%'}, 200,
				function(){
					$(this).css('display', 'none');
				}
			);
	});
});

$(document).ready(function() {
	$('button#open_modal_form-2').click( function(event){
		event.preventDefault();
			$('#modal_form-2')
				.css('display', 'block')
				.animate({opacity: 1, top: '75%'}, 200);
	});
	$('#modal_close-2, #submit-2').click( function(){
		$('#modal_form-2')
			.animate({opacity: 0, top: '45%'}, 200,
				function(){
					$(this).css('display', 'none');
				}
			);
	});
});