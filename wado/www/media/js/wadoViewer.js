(function($){

	var myImage,
		// Which interactive mode {zoom, scroll, pan, w/l}
		mode,
		// The jQuery element of the viewer
		$viewer,
		// The DOM element of the viewer (viewer[0])
		viewerDOM,
		// The status if we should do manipulation
		status,
		// Total number of images in viewer
		totalImages,
		// The 0-based index for the current image
		index,
		// The current cover (active) image (jQuery)
		$current,
		// The current cover (active) image (DOM)
		currentDOM,
		// The Window Center (for speed)
		wC,
		// The Window Width (for speed)
		wW,
		// The pageX (for speed)
		pageX,
		// The pageY (for speed)
		pageY,
		// The series object storing metadata series and images
		seriesData,
		// Variable to know how many images to update
		updateRange = 101;
		
	// Preset values for CT and MR. Coded in Window Center & Window Width
	var presets = []; //c,w
		presets['CT'] = [];
		presets['CT']['Default'] = [0,0];
		presets['CT']['Bone'] = [400,200];
		presets['CT']['Abdomen'] = [55,426];
		presets['CT']['Lung'] = [-585,1800];
		presets['CT']['Head'] = [50,150];
		presets['CT']['PE'] = [100,70];
		presets['CT']['Liver'] = [100,300];
		presets['CT']['Lung Sharp Med'] = [-550,1800];
		presets['CT']['PET WB 103'] = [8000,15000];
		presets['CT']['Lung Enhance'] = [-600,2000];

		presets['MR'] = [];
		presets['MR']['Default'] =[0,0];
		presets['MR']['Head T2'] = [800,1500];
		presets['MR']['Head Flair'] = [300,900];
		presets['MR']['Head T1'] = [500,1000];
		presets['MR']['Head MPRAGE'] = [900,200];
		presets['MR']['Head IR'] = [1700,1000];
		presets['MR']['Head Diffusion'] = [200,700];
		presets['MR']['Head T2* eoi'] = [110,2000];
		presets['MR']['Head GE T2*'] = [1000,1000];
		presets['MR']['Head MRA'] = [300,1000];
		presets['MR']['Spine T1'] = [300,1000];
		presets['MR']['Spine T2,7ET'] = [500,1500];
		presets['MR']['Spine T2,15ET'] = [400,1500];
		presets['MR']['Head MIP'] = [3700,1000];

	/*
	if (window.stop !== undefined) {
		window.stop();
	}
	else if (document.execCommand !== undefined) {
		document.execCommand('Stop', false);
	} 
	*/

	/*
	* This set of functions are used for the image manipulation
	*/
	$('.images').bind('mousedown touchstart', wadoViewer.start);
	$('.images').bind('mouseup touchend', wadoViewer.moving);
	$('.images').bind('mousemove touchmove', wadoViewer.end);
	
	var wadoViewer = {
	
		/* 
		* This function is used when mouse or finger is down
		*/
		start : function(e) {
			// Stop everything
			e.stopPropagation();
			e.preventDefault();

			// Normalize based on device
			e = (typeof e.originalEvent.touches == 'undefined') ? e : e.originalEvent.touches[0];

			$viewer   = $(this).closest('.viewer');
			viewerDOM = $viewer[0];
			status = 'active';
			pageX  = e.pageX;
			pageY  = e.pageY;
			
			// Activate the viewer status
			$.data(viewerDOM, 'status', status);
			// Save current X of mouse
			$.data(viewerDOM, 'x', pageX);
			// Save current U of mouse
			$.data(viewerDOM, 'y', pageY);

			
			mode = $.data($('#main')[0], 'mode');
			$.data(viewerDOM, 'mode', mode);
			
			// Get the Window Width from viewer
			wW	       = $.data(viewerDOM, 'wWidth');
			// Get the Window Center from viewer
			wC	       = $.data(viewerDOM, 'wCenter');
			// Get the series metadata
			seriesData = $.data(viewerDOM, 'series');
			// Get the current index 
			index      = seriesData.image;
			// Get the current "cover" or active image
			current    = $viewer.find('img.activeImage');
			// Get the current image DOM
			currentDOM = current[0];

			if (mode == 'imgWindow')
			{
				/* Load  image */
				myImage = null;
				myImage = new Image(1,1);
				myImage.onload = function() { if (myImage != null) currentDOM.src = myImage.src; myImage = null;};
				myImage.src = $.data(viewerDOM, 'src')+'&rows=256&windowCenter='+wC+'&windowWidth='+wW;
				//myImage.src = $.data(viewerDOM, 'src')+'&rows=256&windowCenter='+wC+'&windowWidth='+wW+'&imageQuality=9';
			}
		},
		
		/* 
		* This function is used when mouse or finger is moving
		*/
		moving : function(e) {
			// Stop everything
			e.stopPropagation();
			e.preventDefault();

			// Normalize based on device
			e = (typeof e.originalEvent.touches == 'undefined') ? e : e.originalEvent.touches[0];

			// Only do stuff is mouse is down (status == active)
			if (status == 'active')
			{
				// Scroll (easy)
				if (mode == 'imgScroll')
				{
					// Calculate "delta" from mouse movement
					var d1 = (pageY - e.pageY);
					var d2 = (pageX - e.pageX);
					var d = (Math.abs(d1) > Math.abs(d2)) ? d1 : d2;
					
					// TODO: smart scrolling?
					
					// Scroll the scrolled images
					wadoViewer.scroll($viewer, d);
					
					// Sync the viewers
					if ($('#imgSync').is(':checked'))
					{
						// Other
						var $other = $viewer.siblings('.half').eq(0);
						// Scroll (should start at the same index???)
						wadoViewer.scroll($other, d);
					}
				}
				
				// Pan (easy)
				if (mode == 'imgPan')
				{
					// Find top
					var top  = parseInt($current.css('top'));
					// Find left
					var left = parseInt($current.css('left'));
					// Check for "Not a Number" cases
					top = isNaN(top) ? 0 : top;
					left = isNaN(left) ? 0 : left;

					// Calculate new top and left
					top  = top - (pageY - e.pageY);
					left = left - (parseX - e.pageX);

					wadoViewer.pan($viewer.find('img'), {top:top, left:left});
					
					// Sync the viewers
					if ($('#imgSync').is(':checked'))
					{
						// Other
						var $other = $viewer.siblings('.half').eq(0);
						// Do the trick
						wadoViewer.pan($other.find('img'), {top:top, left:left});
					}
				}
				
				// Zoom (working fine)
				if (mode == 'imgZoom')
				{
					// Find top
					var top  = parseInt($current.css('top'));
					// Find left
					var left = parseInt($current.css('left'));
					// Check for "Not a Number" cases
					top = isNaN(top) ? 0 : top;
					left = isNaN(left) ? 0 : left;

					// Find width of image
					var w = $current.width();
					// Find height of image
					var h = $current.height();
					// Calculate ratio
					var ratio = w/h;
					// Calculate "delta" from mouse movement
					var yDiff = (pageY - e.pageY);
					// Calucalte x-coordinate difference
					var xDiff = yDiff*ratio;
					// Calculate new height
					h = h - yDiff;
					// Calculate new width
					w = h*ratio;
					// Calculate new top and left
					top += parseInt(yDiff/2);
					left += parseInt(xDiff/2);
					// Save new "width"
					$.data(elem, 'cols', w);
					// Update current image
					$current.height(h).css({top:top, left:left});
					// Update stack of images
					$viewer.find('img').width(w).height(h).css({top:top, left:left});

					// Sync the viewers
					if ($('#imgSync').is(':checked'))
					{
						// Other
						var other = $viewer.siblings('.half').eq(0);
						// Update
						$other.find('img').width(w).height(h).css({top:top, left:left});
					}
				}
				
				// Window/Level
				if (mode == 'imgWindow')
				{
					// Update Window Width and Window Center
					wW -= (pageY - e.pageY);
					wC -= (pageX - e.pageX);
					// Update the text for W/L
					$viewer.find('.winlev').html('win:'+wW+'<br />lev:'+wC);
					
					if ( myImage == null  || myImage.complete) 
					{
						if (myImage != null) myImage = null;
						myImage = new Image(1,1);
						myImage.onload = function() { if (myImage != null) { $current.src = myImage.src; myImage = null;}};
						myImage.src = $.data(viewerDOM, 'src')+'&rows=256&windowCenter='+wC+'&windowWidth='+wW;
					}
				}
			}
			return false;
		},

		/* 
		* This function is used when mouse or finger is up
		*/
		end : function(e) {
			// Stop everything
			e.stopPropagation();
			e.preventDefault();
			
			// Saving  x and y
			$.data(elem, 'x', pageX);
			$.data(elem, 'y', pageY);
			
			// Saving wW and wC
			$.data(elem, 'wWidth', wW);
			$.data(elem, 'wCenter', wC);

			// Update the number of cols
			$.data(elem, 'cols', $current.width());

			// Remove status
			$.data(elem, 'status', '');

			// Update the dimensions
			wadoViewer.updateDimensions(viewer);

			if (/^(imgZoom|imgWindow)$/.test(mode))
			{

				// Only for Zoom and W/L do something. First update width (cols)
				myImage = null;

				var url = seriesData.seriesImages[index]+'&windowCenter='+wC+'&windowWidth='+wW;
				$currentDOM.src = url;

				// Then update sorrounging images
				wadoViewer.update($viewer, updateRange, 0);
			}
			// Extend the life of session
			wadoSession.extendSession();
		},

		/* 
		* This function resets the images in viewer
		* @param	jquery	the viewer used
		*/
		reset : function($viewer)
		{
			// Get the viewer DOM
			var viewerDOM = $viewer[0];
			// Get the Series metadata
			var seriesData = $.data(viewerDOM, 'series');
			// Get the current index
			var index = seriesData.image;
			// Get the total
			var total = seriesData.frames;
			// Get the HTML for the display (resetted)
			var img = wadoQueue.getImagesSource(0, index, total, $viewer, 'object');
			// Get the data for current image
			var data = img[index];
			// Update current image
			$viewer.find('.activeImage').attr('src', data.src).css({left:data.l+'px', top:data.t+'px'}).width(data.w).height(data.h);
			// Get the default Window Center and Window Width
			var defaultWCenter = $.data(viewerDOM, 'defaultWCenter');
			var defaultWWidth  = $.data(viewerDOM, 'defaultWWidth');
			// Save back the default values 
			$.data(viewerDOM, 'wCenter', defaultWCenter);
			$.data(viewerDOM, 'wWidth', defaultWWidth);
			$viewer.find('.winlev').html('win:'+defaultWWidth+'<br />lev:'+defaultWCenter);

			for (var i = 0; i < total; i++)
			{
				if (i == index) continue;
				// Get image
				var $image = $viewer.find('img').eq(i);
				data = img[i];
				// Reset positioning and size
				$image.css({left:data.l+'px', top:data.t+'px'}).width(data.w).height(data.h);
				// Find src
				var src = $image.attr('src');
				// Get URL out of source
				var url = src.substring(src.indexOf(shared_path) + shared_path.length);
				// Compare if different (this check is done to prevent cases when the same image is loaded from an alias)
				if (data.url != url)
				{
					// Update then
					$image.attr('src', data.src);
				}
			}
			
			wadoViewer.updateDimensions($viewer);
		},

		/* 
		* This function updates images from viewer in the background
		* @param	jquery	the viewer used
		* @param	integer	the number of images to load
		* @param	integer	the direction (think of it as a stack of images) for the upload
		*/
		update : function($viewer, range, direction)
		{
			// direction 1 => scroll up, index is decreased, top of stack

			// Get the width (cols) according to viewer
			var cols  = $.data(viewerDOM, 'cols');

			var viewerId = $viewer.attr('id');
			
			var serversLength = servers[viewerId].length;
			var myServers     = servers[viewerId];

			// Navigate all images
			// TODO: improve to only navigate allowed range
			$viewer.find('img').each( function(i){
				// Variable to find out if current image is in range
				var inRange = false;
				// Check direction and range
				switch (direction)
				{ 
				  case -1: inRange = ((i >= index) && (i <= index + range)); break;
				  case  0: inRange = ((i >= index - range/2) && (i <= index + range/2)); break;
				  case  1: inRange = ((i >= index - range) && (i <= index)); break;
				}
				// Verify if current image is in range or active image is actually current
				if (inRange)
				{
					var imgDOM = this[0];
					var url = seriesData.seriesImages[index]+'&windowCenter='+wC+'&windowWidth='+wW;
					var src = imgDOM.src;
					// Get URL out of source
					var oldUrl = src.substring(src.indexOf(shared_path) + shared_path.length);
					// Calculate new source
					if (oldUrl != url)
					{
						// Alternate servers
						var server = myServers[index % serversLength];
						var newSrc = server+shared_path+url;
						// Update source if new source is different than actual one
						imgDOM.src = newSrc;
					}
				}
			});
		},

		/* 
		* This function updates some dimensions to help the resize function
		* @param	jquery	the viewer used
		*/
		updateDimensions : function($viewer)
		{
			$.data(viewerDOM, 'dimensions', {vw:$viewer.width(), vh:$viewer.height(), h:$current.width(), 
				w:$current.height(), t:parseInt($current.css('top')), l:parseInt($current.css('left'))});
		},

		/* 
		* This function updates the display of current viewable image. It triggers the update of rest of images
		* @param	jquery	the viewer used
		* @param	integer	the number of images to hop (increase/decrease)
		*/
		scroll : function($viewer, d) {
			// Check if not defined
			if (typeof seriesData == 'undefined') return false;
			// Calculate the delta
			d = Math.round(d);
			// Set limits to max 5 images at a time (to avoid to fast scrolling)
			d = (d < -5) ? ((d == -999) ? d : -5) : ((d > 5) ? ((d == 999) ? d : 5) : d);
			// Update index
			index -= d;
			// Calculate direction
			d = (d < 0) ? -1 : 1;
			// Check limits
			index = (index >= seriesData.frames) ? (seriesData.frames - 1) : (index < 0 ? 0 : index);
			// Deactive current "cover" image. Hide them all.
			$current.addClass('none').removeClass('activeImage');
			// Find new "cover" image index
			$current = $viewer.find('.images img').eq(index);
			// Now active new "cover" image
			$current.removeClass('none').addClass('activeImage');
			// Update the images
			wadoViewer.update($viewer, updateRange, d);
			// Update the index bar
			$viewer.find('.totalImages').html((index + 1) +' out of '+seriesData.frames);
			// Save back the new index
			seriesData.image = index;
			// Setting the src for current image and updating the series (for index)
			$.data(viewerDOM, 'series', seriesData);
			$.data(viewerDOM, 'src', seriesData.seriesImages[index]);
		},
		
		/* 
		* This function pans
		* @param	jquery	the viewer used
		* @param	map of values
		*/
		pan : function($elements, map) {
			// Update values for all images
			$elements.css({top:map.top, left:map.left});
		},
		
	};
	
	window.wadoViewer = wadoViewer;
	window.wadoViewer.presets = presets;
	
})(jQuery);
