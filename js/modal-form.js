$(document).ready(function() {
	$('button#open_modal_form').click( function(event){
		event.preventDefault();
			$('#modal_form')
				.css('display', 'block')
				.animate({opacity: 1, top: '50%'}, 200);
	});
	$('#modal_close').click( function(){
		$('#modal_form')
			.animate({opacity: 0, top: '45%'}, 200,
				function(){
					$(this).css('display', 'none');
				}
			);
	});
});