(function($){
	$('#options').click( function(e) {
		// No propagation nor default
		e.stopPropagation();
		e.preventDefault();
		if ($(this).text() == '+')
		{
			$('.optional').toggle('slow');
			$(this).text('-');
		}
		else
		{
			$('.optional').hide();
			$(this).text('+');
		}
	});
	$(document).ready(function() {
		if ($('#filter').val() != '')
		{
			$('.optional').show();
			$('#options').text('-');
		}
	});
	$('#submit_search').click( function(e) {
		
		if ($('#search').val() == '')
		{
			e.stopPropagation();
			e.preventDefault();
			window.location='admin';
		}
	});
})(jQuery);
