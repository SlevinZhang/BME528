(function($){

	$.fn.menuScroll = function() {

		// Check if there is any matched element first!
		if ( ! this.length) return this;
		
		// This is the available height for the panels: menu, left and right (including bar for tools)
		var diff = $(window).height() - 37;
		var menuOffset = 25;

		return this.each(function() {

			var elem = this;
			/*
			* This set of functions are used for the scrolling of the menu using the button at the bottom
			*/
			// Scroll to the top
			$(this).find('.scrollTop').click(function() {
				// Check if menu height is within limits
				if ($(elem).height() < diff) return false;
				// Set the top to 0
				$(elem).css('top', 0);
				return false;
			});
			// Scroll some pixels up
			$(this).find('.scrollUp').click(function() {
				scrollMenu(elem, 50);
				return false;
			});
			// Scroll some pixels down
			$(this).find('.scrollDown').click(function() {
				scrollMenu(elem, -50);
				return false;
			});
			// Scroll to the bottom
			$(this).find('.scrollBottom').click(function() {
				// Check if menu height is within limits
				if ($(elem).height() < diff) return false;
				// Calculate the height of menu
				var menuH = $(elem).height() - diff + menuOffset;
				// Set top to the negative value of the menu height
				$(elem).css('top', -1 * menuH);
				return false;
			});
		});

		/* 
		* This function scrolls the menu up or down
		* @param	the jquey element
		* @param	integer	the number of pixels to scroll
		*/
		function scrollMenu(elem, d)
		{
			// Check if menu height is within limits
			if ($(elem).height() < diff) return false;
			// Get the height of the menu
			var menuH = $(elem).height() - diff + 18;
			// Get current top
			var top = parseInt($(elem).css('top'));
			// Add "delta" pixels
			top += d;
			// Check for the limits
			top = (top > 0) ? 0 : ((top < -1 * (menuH)) ? (-1 * (menuH)) : top);
			// Set new top
			$(elem).css('top', top);
		}
	}
})(jQuery);
	