(function( $, window ) {

	// Use the correct document accordingly with window argument (sandbox)
	var document = window.document;
	
	// Our function here
	var wadoSession = function() {

		// Defining some variables
		var sessionCheckInterval,
			cookieLifetime,
			checkSessionTimeout,
			cookieName = 'none',
			originalHref = window.location.href,
			lastPing = 0;
		
		// Right original HREF
		originalHref += (originalHref.indexOf('?') == -1) ? '?' : '&';

		$.getJSON('admin/ajax/session_timeout', function(json) {
			// Update the value accordingly
			cookieLifetime = sessionCheckInterval = parseInt(json.lifetime);
			cookieName = json.name;
			// Set the Timeout
			checkSessionTimeout = setTimeout(_checkTimeout, sessionCheckInterval);
		});

		// Function to check the timeout
		var	_checkTimeout = function() {
				
			// Wait until cookieName is set
			if (cookieName == 'none')
				return false;
				
			// Read cookie to find out if still exists
			var cookie = _readCookie(cookieName);
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
				checkSessionTimeout = setTimeout(_checkTimeout, sessionCheckInterval);
			}
		},

		_extendSession = function() {
			var today = new Date();
			// Check how soon we have extended the session
			if (today.getTime() - lastPing < cookieLifetime/2)
			{
				return false;
			}
			$.get('admin/ping', function(response, status, xhr) {
				// Last ping
				lastPing = today.getTime();
				// Clear Timeout
				clearTimeout(checkSessionTimeout);
				// Get new timeout (original + 1 second)
				sessionCheckInterval = cookieLifetime + 1000;
				// Rethrow the timeout
				checkSessionTimeout = setTimeout(_checkTimeout, sessionCheckInterval);
			});
		},

		_readCookie = function(name) {
			var nameEQ = name + '=';
			var ca = document.cookie.split(';');
			for(var i=0; i < ca.length; i++) {
				var c = ca[i];
				while (c.charAt(0) == ' ') c = c.substring(1, c.length);
				if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
			}
			return null;
		};

		this.extendSession = _extendSession;
		this.checkTimeout  = _checkTimeout;
		
		return this;
	};

	// Expose wadoSession to the window object
	window.wadoSession = wadoSession();
	
	// Trick to keep the connections alive!!! Saves establishing a new connection (expensive with SSL!!!)
	setInterval(function() { $.get('admin/ping');}, 20000);

})(jQuery, window);