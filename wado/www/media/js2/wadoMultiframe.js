(function($){

	// When a Play is clicked
	$('.play').click(function(e){
		// Stop everything
		e.stopPropagation();
		e.preventDefault();
		// Find viewer
		var viewer = $(this).closest('.half');
		// Get the mode
		var mode = $(this).text().toLowerCase();
		// Get current status
		var text = ($(this).text() == 'Play') ? 'Pause' : 'Play';
		// Update text
		$('.play').text(text);

		// Do the playback
		playBack(viewer, mode, 50);
		
		// Sync the viewers
		if ($('#imgSync').is(':checked'))
		{
			// Other
			var other = $(viewer).siblings('.half').eq(0);
			// Do the playback
			playBack($(other), mode, 50);
		}
	});

	// When a Play is clicked
	$('.rewind').click(function(e){
		// Stop everything
		e.stopPropagation();
		e.preventDefault();
		// Find viewer
		var viewer = $(this).closest('.half');

		// Rewind
		navigate(viewer, 999);
		playBack(viewer, 'pause', 50);
		$(viewer).find('.play').text('Play');
		
		// Sync the viewers
		if ($('#imgSync').is(':checked'))
		{
			// Other
			var other = $(viewer).siblings('.half').eq(0);
			// Do the playback
			navigate($(other), 999);
			playBack($(other), 'pause', 50);
			$(other).find('.play').text('Play');
		}
	});

	/* 
	* This function plays a video
	* @param	jquery	the viewer used
	* @param	string	the mode
	* @param	integer	the playback speed in milliseconds
	*/
	function playBack(viewer, mode, speed)
	{
		speed = (typeof speed == 'undefined') ? 100 : speed;
		
		switch (mode)
		{
			case 'play' :
				var t = setInterval(function(){ doPlay(viewer); }, speed);
				$(viewer).data('interval', t);
				break;
			case 'pause':
				clearInterval($(viewer).data('interval'));
				break;
		}
	}

	function doPlay(viewer)
	{
		// Load the series
		var series = $(viewer).data('series');
		// Get the current image index
		var index = parseInt(series.image);
		// Get total
		var total = parseInt(series.frames);
		// Check what to do
		if (index + 1 >= total)
		{
			clearInterval($(viewer).data('interval'));
		}
		else
		{
			navigate(viewer, -1);
		}
	}
	
})(jQuery);
