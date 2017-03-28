(function( $, window ) {

	// Use the correct document accordingly with window argument (sandbox)
	var document = window.document;
	
	// Our object here
	var queue = {

		process: function() {
		},

		add: function() {
		},
	
		remove: function() {
		}
	
		stop: function() {
		},

		retry: function() {
		},

		/* 
		* This function returns the HTML source to be injected with the images
		* @param	integer	the starting image (usually 0)
		* @param	integer	the current image (for the "cover" or displayed one)
		* @param	integer	the total images (if -1 it takes all the available frames. Usually is -1)
		* @param	jquery	the viewer used
		* @param	the type of data returned. Either "html" or "anything else" (for json)
		*/
		getImagesSource: function(start, current, total, $viewer, returnFormat) {
			// Get the Width and Height of the current images container (viewer)
			var viewerW = $viewer.width();
			var viewerH = $viewer.height();
			var viewerId = $viewer.attr('id');
			var viewerDOM = $viewer[0];
			// Get the Window Width from viewer
			var wW     = $.data(viewerDOM, 'wWidth');
			// Get the Window Center from viewer
			var wC     = $.data(viewerDOM, 'wCenter');
			// Series metadata
			var seriesData = $.data(viewerDOM, 'series');
			// Check if defined
			if (typeof seriesData == 'undefined') return false;
			// Variable that holds the html to be injected with the images
			var img = '';
			// Calculate the total appropriately
			total = (total == -1) ? seriesData.frames : total;
			// Return value
			var data = [];
			var iImage;
			// Navigate the set of images
			for(var i = start; i < total; i++)
			{
				// First image is active. Show it!
				imgClass = (i == current)? 'activeImage' : 'none';
				// Values to calculate: width, height, left, top and dimensions
				var w, h, l, t, d, dims;
				
				if (seriesData.ratio[i] <= (viewerW/viewerH))
				{
					// Calculate values for "portrait" case
					h = viewerH;
					w = parseInt(seriesResponse.ratio[i]*viewerH);
					l = (viewerW - w)/2;
					t = 0;
					d = '&rows='+h;
					dims = 'height:'+h+'px;';
				}
				else
				{
					// Calculate values for "wide screen case"
					w = viewerW;
					h = parseInt(viewerW/seriesResponse.ratio[i]);
					l = 0;
					t = (viewerH - h)/2;
					d = '&columns='+w;
					dims = 'width:'+w+'px;';
				}
				// For first 40 images show "real" image, for others, initialize it with "cover" image (bandwidth)
				// src = (i > 40) ? seriesResponse.seriesImages[0]+d : seriesResponse.seriesImages[i]+d;
				var server = servers[viewerId][i % servers[viewerId].length];
				// Get the base url
				var url    = seriesData.seriesImages[i];
				src = server+shared_path+url;
				// Set the proper Window Center and Width
				src += '&windowCenter='+wC+'&windowWidth='+wW;
				
				data[data.length] = {h : h, w: w, l: l, t: t, src: src, url: url, c: imgClass};
				
				// TODO: work on the queue
				// Create the image object
				img += '<img  class="abs '+imgClass+'" style="left:'+l+'px;top:'+t+'px;'+dims+'" src="'+src+'" onload="updateCount('+i+', \''+$viewer.attr('id')+'\');" />';
			}
			// Save the width (cols)
			$.data(viewerDOM, 'cols', w);

			data = (returnFormat == 'html') ? img : data;
			return data;
		},
	
		changeServer: function() {
			/*
			var aborted = $('#debug').text();
			aborted = (aborted == '') ? 0 : parseInt(aborted);
			aborted++;
			*/
			//$('#debug').show().text(aborted);
		},
		
		changeServer1: function() {
			/*
			var aborted = $('#debug').text();
			aborted = (aborted == '') ? 0 : parseInt(aborted);
			aborted++;
			*/
			//$('#debug').show().text(aborted+' aborted');
		},

		updateCount: function(id, viewer) {
			var $viewer = $('#'+viewer);
			var viewerDOM = $viewer[0];
			$viewer.find('.loading').show();
			var loaded = parseInt($.data(viewerDOM, 'loaded'));
			loaded++;
			$.data(viewerDOM, 'loaded', loaded);
			var total = $.data(viewerDOM, 'total');
			
			$viewer.find('.loading').text(parseInt(100*loaded/total)+'%');
			if (total == loaded || $viewer.find('.loading').text() == '100%')
			{
				// Get the start time
				var start = parseInt($.data(viewerDOM, 'start'));
				var today = new Date();
				// Find difference
				var diff = today.getTime() - start;
				// Reset total loaded
				$.data(viewerDOM, 'loaded', 0);
				// Update the new start time
				$.data(viewerDOM, 'start', today.getTime());
				// Show difference in time
				$viewer.find('.loading').text(diff);
			}
			if (total <= loaded)
			{
				queue.changeServer();
			}
		}
		
	};
	
	window.wadoQueue = queue;
	
})(jQuery);
