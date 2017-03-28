(function($){

	var sessionCheckInterval, cookieLifetime, checkSessionTimeout, cookieName = 'none' ;
	var originalHref = window.location.href;
	originalHref += (originalHref.indexOf('?') == -1) ? '?' : '&';

	$.getJSON('admin/ajax/session_timeout', function(json) {
		// Update the value accordingly
		cookieLifetime = sessionCheckInterval = parseInt(json.lifetime);
		cookieName = json.name;
		// Set the Timeout
		checkSessionTimeout = setTimeout(checkTimeout, sessionCheckInterval);
	});

	function checkTimeout()
	{
		// Wait until cookieName is set
		if (cookieName == 'none')
			return false;
			
		// Read cookie to find out if still exists
		var cookie = readCookie(cookieName);
		if (cookie == null)
		{
			// No cookie. Session expired
			window.location.href = originalHref+'message=Session Expired';
		}
		else
		{
			// Minimum interval is 10 seconds.
			if (sessionCheckInterval > 10*1000)
			{
				sessionCheckInterval = parseInt(sessionCheckInterval/2);
			}
			// Clear Timeout
			clearTimeout(checkSessionTimeout);
			// Check agagin the in new number of milliseconds.
			checkSessionTimeout = setTimeout(checkTimeout, sessionCheckInterval);
		}
	}

	function extendSession()
	{
		$.get('admin/ping', function(response, status, xhr) {
			// Clear Timeout
			clearTimeout(checkSessionTimeout);
			// Get new timeout (original + 1 second)
			sessionCheckInterval = cookieLifetime + 1000;
			// Rethrow the timeout
			checkSessionTimeout = setTimeout(checkTimeout, sessionCheckInterval);
		});
	}

	function readCookie(name) {
		var nameEQ = name + "=";
		var ca = document.cookie.split(';');
		for(var i=0;i < ca.length;i++) {
			var c = ca[i];
			while (c.charAt(0)==' ') c = c.substring(1,c.length);
			if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
		}
		return null;
	}

	// Expose the extendSession function to the global scope
	window.extendSession = extendSession;
	window.checkSession = checkTimeout;
})(jQuery);
