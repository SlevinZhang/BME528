(function($) {

	var	// Which interactive mode {zoom, scroll, pan, w/l}
		mode,
		// The jQuery element of the viewer
		$viewer,
		// The DOM element of the viewer (viewer[0])
		viewerDOM,
		// The status if we should do manipulation
		status = '',
		// Total number of images in viewer
		totalImages,
		// The 0-based index for the current image
		index,
		// The current cover (active) image (jQuery)
		$current,
		$activeImage,
		// The current cover (active) image (DOM)
		currentDOM,
		// current dcm Images in active viewer
		$currentDCMs,
		// The Window Center (for speed)
		wC,
		// The Window Width (for speed)
		wW,
		// The pageX (for speed)
		pageX,
		// The pageY (for speed)
		pageY,
		// The initialX
		initX,
		// The initialY
		initY,
		// The initialIndex
		initIndex,
		// The series object storing metadata series and images
		seriesData,
		// Find out if gesture event is on
		gestureOn = false,
		// Variable to know how many images to update
		updateRange = 7,
		// Fabric
		fab,
		// Fabric Ratio
		fabRatio,
		offset,
		savedDataDLJSON;

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

	var wadoViewer = {
	
		twoFingers: function(e) {
			// Normalize based on device
			return (typeof e.originalEvent.touches == 'undefined')
				? false
				: (typeof e.originalEvent.touches[1] == 'undefined') ? false : true;
		},
		
		/* 
		* This function is used when mouse or finger is down
		*/
		start: function(e) {
			if (gestureOn || wadoViewer.twoFingers(e)) return false;
			// Stop everything
			e.stopPropagation();
			e.preventDefault();

			// Normalize based on device
			e = (typeof e.originalEvent.touches == 'undefined') ? e : e.originalEvent.touches[0];

			$viewer   = $(this).closest('.viewer');
			viewerDOM = $viewer[0];
			status = 'active';
			pageX  = (typeof e.pageX == 'undefined') ? $.data(viewerDOM, 'x') : e.pageX;
			pageY  = (typeof e.pageY == 'undefined') ? $.data(viewerDOM, 'y') : e.pageY;
			initX  = pageX;
			initY  = pageY;
			
			// Activate the viewer status
			$.data(viewerDOM, 'status', status);
			// Save current X of mouse
			$.data(viewerDOM, 'x', pageX);
			// Save current Y of mouse
			$.data(viewerDOM, 'y', pageY);

			mode = ($(this).hasClass('scrollee')) ? 'imgScroll' : $.data($('#main')[0], 'mode');
			$.data(viewerDOM, 'mode', mode);
			
			// Get imgMeasure
			imgMeasure = $.data(viewerDOM, 'imgMeasure');

			// Get the Window Width from viewer
			wW	       = $.data(viewerDOM, 'wWidth');
			// Get the Window Center from viewer
			wC	       = $.data(viewerDOM, 'wCenter');
			// Get the series metadata
			seriesData = $.data(viewerDOM, 'series');
			// Get the current index 
			index      = parseInt(seriesData.image, 10);
			// Get the total images
			totalImages = seriesData.frames;
			// Set as initial index
			initIndex  = index;
			// Get the current "cover" or active image container
			$current   = $viewer.find('.activeImage');
			$activeImage = $current;
			// Get the current image DOM
			currentDOM = $current.find('.dcm').eq(0)[0];
			// Get the set of dcm images
			//$currentDCMs = $current.find('.dcm');
			fab = wadoViewer.getFabric($current);
			fabRatio = fab.getWidth()/$activeImage.width();
			offset = $activeImage.offset();
					
			// Handle ROI
			if (mode == 'imgROI'){
				fab.freeDrawingColor = 'yellow';
				fab.freeDrawingLineWidth = 5;
				fab.isDrawingMode = true;
				wadoViewer.preparePath($viewer, {x:pageX, y:pageY});
				wadoViewer.drawingPath($viewer, {x:pageX, y:pageY});
				//fab.isDrawingMode = true;
				// Stop the automatic line when moving mouse:
				fab._isCurrentlyDrawing = false;
			}	else{
				fab.isDrawingMode = false;
			}
			
			if (mode == 'imgWindow') {
				wadoQueue.halt().purge('realtime', viewerDOM.id);
				wadoQueue.purge('live', viewerDOM.id);
				wadoQueue.purge('flash', viewerDOM.id);

				//var source = $.data(viewerDOM, 'src')+'&windowCenter='+wC+'&windowWidth='+wW+'&columns=64';
				//var source = $.data(viewerDOM, 'src')+'&windowCenter='+wC+'&windowWidth='+wW+'&columns=64&imageQuality=10';
				/*
				var columns = '&columns='+parseInt(($current.data('origw')/4), 10);
				var source = $.data(viewerDOM, 'src')+'&windowCenter='+wC+'&windowWidth='+wW+columns+'&imageQuality=10';
				wadoQueue.prepend(currentDOM, source, 'realtime', viewerDOM.id);
				//wadoQueue.process();
				*/
				$.get('admin/ping');
				wadoQueue.start(0);
			}
			
			// Handle annotations
			if (mode == 'imgAnnotate') {
				var AnnoText = prompt("Please input the Annotatation");
				if (AnnoText)
					wadoViewer.annotate($viewer, {x:pageX, y:pageY},AnnoText);
			}
			
			// Handle measurements
			if (mode == 'imgMeasure') {
				if (imgMeasure == '') {
					$.data(viewerDOM, 'imgMeasure', 'start');
					wadoViewer.measure($viewer, {x:pageX, y:pageY}, 'start');
				}
			}
		},
		
		/* 
		* This function is used when mouse or finger is down
		*/
		startGesture: function(e) {
			gestureOn = true;
			// Stop everything
			e.stopPropagation();
			e.preventDefault();

			$viewer   = $(this).closest('.viewer');
			viewerDOM = $viewer[0];
			status = 'activeZoom';

			mode = 'imgZoom';

			// Get the series metadata
			seriesData = $.data(viewerDOM, 'series');
			// Get the current index 
			index      = parseInt(seriesData.image, 10);
			// Get the current "cover" or active image container
			$current    = $viewer.find('.activeImage');
			// Get the current image DOM
			currentDOM = $current.find('.dcm').eq(0)[0];
			// Get the set of dcm images
			//$currentDCMs = $current.find('.dcm');
			
			//wadoQueue.flush('live', viewerDOM.id);
			//wadoQueue.flush('flash', viewerDOM.id);
			//wadoQueue.flush('realtime', viewerDOM.id);
			//wadoQueue.halt();
		},

		/* 
		* This function is used when mouse or finger is moving
		*/
		moving: function(e) {
			if (gestureOn || wadoViewer.twoFingers(e)) return false;
			// Stop everything
			e.stopPropagation();
			e.preventDefault();

			// Normalize based on device
			e = (typeof e.originalEvent == 'undefined' || typeof e.originalEvent.touches == 'undefined') ? e : e.originalEvent.touches[0];

			// Only do stuff is mouse is down (status == active)
			if (status == 'active')
			{
				// Scroll (easy)
				if (mode == 'imgScroll')
				{
					var scrolling = 'delta';
					if ($(this).hasClass('scrollee')) {
						scrolling = 'index';
						var d = (initY - e.pageY);
						var h = $(this).find('.bar').height();
						var delta = parseInt(d*(totalImages)/h, 10);
						//console.log('h: '+h+' d: '+d+' delta: '+delta);
						// Scroll to the given index
						wadoViewer.scroll($viewer, initIndex - delta, scrolling);
					} else {
						// Calculate "delta" from mouse movement
						var d1 = (pageY - e.pageY);
						var d2 = (pageX - e.pageX);
						var d = (Math.abs(d1) > Math.abs(d2)) ? d1 : d2;
						
						// TODO: smart scrolling?
						
						// Scroll the scrolled images
						wadoViewer.scroll($viewer, d, scrolling);
					}
					
					// Sync the viewers
					if ($('#imgSync').is(':checked'))
					{
						// Other
						var $other = $viewer.siblings('.viewer').eq(0);
						// Scroll (should start at the same index???)
						wadoViewer.scroll($other, d);
					}
				}
				
				// Pan (easy)
				if (mode == 'imgPan')
				{
					// Find top
					var top  = parseInt($current.css('top'), 10);
					// Find left
					var left = parseInt($current.css('left'), 10);
					// Check for "Not a Number" cases
					top = isNaN(top) ? 0 : top;
					left = isNaN(left) ? 0 : left;

					// Calculate new top and left
					top  = top - (pageY - e.pageY);
					left = left - (pageX - e.pageX);

					wadoViewer.pan($viewer.find('.viewerImg'), {top:top, left:left});
					
					// Sync the viewers
					if ($('#imgSync').is(':checked'))
					{
						// Other
						var $other = $viewer.siblings('.viewer').eq(0);
						// Do the trick
						wadoViewer.pan($other.find('.viewerImg'), {top:top, left:left});
					}
				}
				
				// Zoom (working fine)
				if (mode == 'imgZoom')
				{
					// Calculate "delta" from mouse movement
					var yDiff = (e.pageY - pageY);
					yDiff = yDiff/10;

					wadoViewer.zoom($current, viewerDOM, $viewer, yDiff, true);

					// Sync the viewers
					if ($('#imgSync').is(':checked'))
					{
						// Other
						var $other    = $viewer.siblings('.viewer').eq(0);
						$otherCurrent = $other.find('.activeImage');
						// Update
						wadoViewer.zoom($otherCurrent, $other[0], $other, yDiff, true);
						//$other.find('img').width(w).height(h).css({top:top, left:left});
					}
				}
				
				// Window/Level
				if (mode == 'imgWindow')
				{
					// Update Window Width and Window Center
					wW += (pageY - e.pageY);
					wC -= (pageX - e.pageX);
					wadoViewer.winlevLive(wW, wC, $current);
/*====================================
					// Update the text for W/L
					$viewer.find('.winlev').html('win:'+wW+'<br />lev:'+wC);
					
					//var source = $.data(viewerDOM, 'src')+'&windowCenter='+wC+'&windowWidth='+wW+'&columns=64';
					source = $.data(viewerDOM, 'src')+'&windowCenter='+wC+'&windowWidth='+wW+'&columns=64&imageQuality=15';
					//currentDOM.src = source;
					wadoQueue.prepend(currentDOM, source, 'realtime', viewerDOM.id);
					//wadoQueue.process();
					wadoQueue.start();
//====================================*/
				}
				
				if (mode == 'imgMeasure') {
					distance = wadoViewer.measure($viewer, {x:pageX, y:pageY}, 'end');
					if (distance > 1) {
						// Value was OK, remove the signature for measurement, was 2 points
						$.data(viewerDOM, 'imgMeasure', '');
					}
				}
				
				if (mode == 'imgROI'){
					wadoViewer.drawingPath($viewer, {x:pageX, y:pageY});
				}
			
				pageX = e.pageX;
				pageY = e.pageY;
			}
		},

		/* 
		* This function is used when mouse or finger is moving
		*/
		movingGesture: function(e) {
			// Stop everything
			e.stopPropagation();
			e.preventDefault();

			// Only do stuff is mouse is down (status == active)
			if (status == 'activeZoom')
			{
				// Zoom (working fine)
				if (mode == 'imgZoom')
				{
					// Calculate "delta" from mouse movement
					//var yDiff = -1*parseInt((e.scale - 1)*100, 0);
					var yDiff = (e.originalEvent.scale > 1) ? 10 : -10;
					wadoViewer.zoom($current, viewerDOM, $viewer, yDiff, true);

					// Sync the viewers
					if ($('#imgSync').is(':checked'))
					{
						// Other
						var $other    = $viewer.siblings('.viewer').eq(0);
						$otherCurrent = $other.find('.activeImage');
						// Update
						wadoViewer.zoom($otherCurrent, $other[0], $other, yDiff, true);
						//$other.find('img').width(w).height(h).css({top:top, left:left});
					}
				}
			}
		},

		/* 
		* This function is used when mouse or finger is up
		*/
		end: function(e) {
			if (gestureOn || wadoViewer.twoFingers(e)) return false;

			// Stop everything
			e.stopPropagation();
			e.preventDefault();
			
			//wadoQueue.flush('live', viewerDOM.id);
			//wadoQueue.flush('flash', viewerDOM.id);

			// Normalize based on device
			e = (typeof e.originalEvent == 'undefined' || typeof e.originalEvent.touches == 'undefined') ? e : e.originalEvent.touches[0];

			// Saving  x and y
			$.data(viewerDOM, 'x', pageX);
			$.data(viewerDOM, 'y', pageY);
			
			// Saving wW and wC
			$.data(viewerDOM, 'wWidth', wW);
			$.data(viewerDOM, 'wCenter', wC);

			// Update the number of cols
			$.data(viewerDOM, 'cols', $current.width());

			$.data(viewerDOM, 'mode', mode);

			// Only do stuff is mouse is down (status == active)
			if (status == 'active')
			{
			
				// Get imgMeasure
				imgMeasure = $.data(viewerDOM, 'imgMeasure');

				var imgsToUpdate = updateRange;

				//index = seriesData.image;
				parseInt($viewer.find('.totalImages').html(), 10) - 1;
				//console.log('index: '+index);
				//if (/^(imgZoom|imgWindow)$/.test(mode))
				if (/^(imgWindow)$/.test(mode)) {
					
					$viewer.find('.dcm').each(function(i) {
						if (i == index) return;
						$(this)[0].src = 'media/img/b.gif';
						$(this).removeClass('dcmLoaded dcmQueued').addClass('dcmReady');
					});

					imgsToUpdate = 7;
				}
					
				if (/^(imgScroll|imgWindow)$/.test(mode)) {
					//wadoQueue.purge('realtime', viewerDOM.id);
					//wadoQueue.purge('live', viewerDOM.id);
					//wadoQueue.purge('flash', viewerDOM.id);
					//wadoQueue.halt();
					
					// Only for Zoom and W/L do something. First update width (cols)
					//var source = $.data(viewerDOM, 'src')+'&windowCenter='+wC+'&windowWidth='+wW+'&columns='+$current.width();
					// Don't add the width to increase chances of caching
					//var source = $.data(viewerDOM, 'src')+'&windowCenter='+wC+'&windowWidth='+wW;
					//currentDOM.src = source;
					//wadoQueue.prepend(currentDOM, source, 'realtime', viewerDOM.id);
					//wadoQueue.process();
					//wadoQueue.start();
					if ($(this).hasClass('scrollee')) {
						distance = wadoViewer.distance(initX, pageX, initY, pageY);
						if (distance < 1) {
							// It was a single click
						}
					}

					wadoViewer.update($viewer, imgsToUpdate, 0, 'prepend');

					(function($vwr) {
						setTimeout(function() {
							wadoViewer.update($vwr, 100, 0, 'prepend');
							wadoQueue.start(0);
						}, 100);
					})($viewer);
				}
					//var url = $(currentDOM).data('originalurl')+'&windowCenter='+wC+'&windowWidth='+wW+'&cols='+$current.width()+'&nocache=yes';

				if (/^(imgZoom)$/.test(mode)) {
					// Then update sorrounging images
					wadoViewer.zoom($current, viewerDOM, $viewer, 0, false);
					imgsToUpdate = 7;
				}

				if (mode == 'imgMeasure') {
					value = wadoViewer.measure($viewer, {x:pageX, y:pageY}, 'end');
					if (value > 1) {
						// Value was OK, remove the signature for measurement, was 2 points
						$.data(viewerDOM, 'imgMeasure', '');
					}
				}
				
				if (mode == 'imgROI') {
					fab._finalizeDrawingPath();
					//wadoViewer.finalizeDrawingPath();
					fab.renderAll();
					var newROI = new fabric.Object();
					total = fab.getObjects().length;
					newROI = fab.item(total-1);
					newROI.set('selectable',false);
				}

				// Update the dimensions
				wadoViewer.updateDimensions($viewer);

				// Extend the life of session
				wadoSession.extendSession();
			}

			// Remove status
			$.data(viewerDOM, 'status', '');
			// Reset status var as well
			status = '';
		},

		/* 
		* This function is used when mouse or finger is up
		*/
		endGesture: function(e) {
			gestureOn = false;
			// Stop everything
			e.stopPropagation();
			e.preventDefault();

			//wadoQueue.flush('live', viewerDOM.id);

			// Update the number of cols
			$.data(viewerDOM, 'cols', $current.width());

			$.data(viewerDOM, 'mode', mode);
			// Remove status

			$.data(viewerDOM, 'status', '');

			// Reset status var as well
			status = '';

			// Update the dimensions
			wadoViewer.updateDimensions($viewer);

			var yDiff = (e.originalEvent.scale > 1) ? 10 : -10;
			wadoViewer.zoom($current, viewerDOM, $viewer, yDiff, false);
			
			if (wadoViewer.hasFabric($current)) {
				// There is a fabric element
				var fab = wadoViewer.getFabric($current);
				if (! fab.isEmpty()) {
					var total = fab.getObjects().length;
					circle = fab.item(total - 3);
					measure = fab.item(total - 1);
					//console.log('test'+measure.getText());
					if (measure.getText() == '') {
						line    = fab.item(total - 4);
						end     = fab.item(total - 2);
						measure = fab.item(total - 1);
						fab.remove(line);
						fab.remove(circle);
						fab.remove(end);
						fab.remove(measure);
					}
					if (fab.isEmpty()) {
						$.removeData($current[0], 'fab');
						$current.find('.canvas-container').remove();
					}
				}
			}

			var source = $.data(viewerDOM, 'src')+'&windowCenter='+wC+'&windowWidth='+wW+'&columns='+$current.width();
			wadoQueue.prepend(currentDOM, source, 'realtime', viewerDOM.id);
			//wadoQueue.process();
			wadoQueue.start();

			// Only for Zoom and W/L do something. First update width (cols)
			//var url = $(currentDOM).data('originalurl')+'&windowCenter='+wC+'&windowWidth='+wW+'&cols='+$current.width()+'&nocache=yes';
			//currentDOM.src = url;

			// Then update sorrounging images
			wadoViewer.update($viewer, updateRange, 0);

			// Extend the life of session
			wadoSession.extendSession();
		},

		save: function($viewer){
			fab = wadoViewer.getFabric($current);
			savedDataDLJSON = JSON.stringify(fab.toDatalessObject());
			savedWidth = fab.getWidth();
			savedHeight = fab.getHeight();
			var dcm_seriesData_UID = seriesData.seriesUID;
			$.post("saveFabric.php",{ series_id: dcm_seriesData_UID, dcm_index: index, dcm_fabric: savedDataDLJSON, fab_width:savedWidth, fab_height:savedHeight}, function(data) {
				alert(data);
			});
		},
		
		load: function($viewer){
			$activeImage   = $viewer.find('.activeImage');
			fab = wadoViewer.getFabric($activeImage);
			fab.clear();
			// Get the Series metadata
			var seriesData = $.data(viewerDOM, 'series');
			// Get the current index
			var index = parseInt(seriesData.image, 10);
			var dcm_seriesData_UID = seriesData.seriesUID;
			var loadedleft, loadedtop, loadedwidth, loadedheight, loadedfabric;
			$.post("getFabric.php",{ series_id: dcm_seriesData_UID, dcm_index: index}, 
				function( data ) {
					loadedwidth = data.fab_width;
					loadedheight = data.fab_height;
					loadedfabric = new fabric.Canvas();
					loadedfabric.loadFromJSON(data.fabric);
					loadedfabric.forEachObject(function(a) {
						a.set("scaleX", a.get("scaleX")*fab.getWidth()/loadedwidth);
						a.set("scaleY", a.get("scaleY")*fab.getHeight()/loadedheight);
						var a_top = a.get("top");
						var a_left = a.get("left");
						a.set("top", a_top*fab.getHeight()/loadedheight);
						a.set("left", a_left*fab.getWidth()/loadedwidth);
						//alert(JSON.stringify(a.toDatalessObject()));
						fab.add(a);
					});
				}, "json"
			);
		},
		
		/* 
		* This function resets the images in viewer
		* @param	jquery	the viewer used
		*/
		reset: function($viewer) {
			wadoQueue.purge('realtime').purge('live').purge('flash');
			// Get the viewer DOM
			var viewerDOM = $viewer[0];
			// Get the Series metadata
			var seriesData = $.data(viewerDOM, 'series');
			// Get the current index
			var index = parseInt(seriesData.image, 10);
			// Get the total
			var total = seriesData.frames;

			// Get the default Window Center and Window Width
			var defaultWCenter = $.data(viewerDOM, 'defaultWCenter');
			var defaultWWidth  = $.data(viewerDOM, 'defaultWWidth');
			// Save back the default values 
			$.data(viewerDOM, 'wCenter', defaultWCenter);
			$.data(viewerDOM, 'wWidth', defaultWWidth);
			$viewer.find('.winlev').html('win:'+defaultWWidth+'<br />lev:'+defaultWCenter);

			// Get the HTML for the display (resetted)
			var img = wadoQueue.getImagesSource(0, index, total, $viewer, 'object');
			// Get the data for current image
			var data = img[index];

			fab = wadoViewer.getFabric($current);
			fab.clear();
			
			// Update current image
			$viewer.find('.activeImage').css({left:data.l+'px', top:data.t+'px'}).width(data.w).height(data.h);
			$viewer.find('.activeImage .dcm').attr('src', data.src);

			var $imgs = $viewer.find('.viewerImg');
			for (var i = 0; i < total; i++)
			{
				//if (i == index) continue;
				// Get image contanier
				var $image = $imgs.eq(i);
				var $imgdcm = $image.find('.dcm');
				data = img[i];
				// Reset positioning and size
				$image.css({left:data.l+'px', top:data.t+'px'}).width(data.w).height(data.h);
				// Reset canvas
				$image.find('.canvas-container, canvas').width(data.w).height(data.h);
				// Find src
				var src = $imgdcm.attr('src');
				// Get URL out of source
				var url = src.substring(src.indexOf(shared_path) + shared_path.length);
				// Compare if different (this check is done to prevent cases when the same image is loaded from an alias)
				if (data.url != url) {
					// Update then
					$imgdcm.attr('src', data.src);
					$imgdcm.removeClass('dcmQueued').addClass('dcmReady dcmLoaded');
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
		update: function($viewer, range, direction, mode) {
			// direction 1 => scroll up, index is decreased, top of stack
			range = parseInt(range, 10);
			var viewerDOM = $viewer[0];
			// Get the data
			var seriesData = $.data(viewerDOM, 'series');
			// Get the index
			var index = parseInt(seriesData.image, 10);
			// Get the ID of the viewer
			var viewerId = $viewer.attr('id');
			// Get the Window Width from viewer
			wW	       = $.data(viewerDOM, 'wWidth');
			// Get the Window Center from viewer
			wC	       = $.data(viewerDOM, 'wCenter');
			//var width  = $viewer.find('.activeImage').width();
			var width  = isNaN($viewer.find('.activeImage').data('origw')) ? '' : '&columns='+$viewer.find('.activeImage').data('origw');
			
			//var serversLength = servers[viewerId].length;
			//var myServers     = servers[viewerId];

			//wadoQueue.flush('flash');
			// Navigate all images
			// TODO: improve to only navigate allowed range

			/*
			$dcms = $viewer.find('.dcm');
			totalDcms = $dcms.length;
			
			range = (direction == 0) ? parseInt(range/2, 10) : range;

			switch (direction) { 
			  case -1: start = 1; step = 2; break;
			  case  0: start = -1; step = 2; break;
			  case  1: start = -1; step = 4; break;
			}

			for(var i = 0; i <= range; i++) {
				var queueName = (status == 'active') ? 'realtime' : ((i == 0) ? 'live' : 'flash');
				//if (i == 0) continue;
				for(var j = start; j < 2; j = j + step) {
					var idcm = i*j + index;
					
					if (idcm < 0 || idcm >= totalDcms) continue;
					
					var imgDOM = $dcms.eq(idcm)[0];
					var url = $(imgDOM).data('originalurl')+'&windowCenter='+wC+'&windowWidth='+wW+'&cols='+$dcms.eq(idcm).width();
					var oldUrl = imgDOM.src;
					// Get URL out of source
					// Calculate new source
					if (oldUrl != url || status == 'active') {
						wadoQueue.add(imgDOM, url, queueName, viewerDOM.id);
					}
				}
			}*/

			//$viewer.find('.dcm').each( function(i){
			var $dcms = $viewer.find('.dcm');
			var total = $dcms.length;
			var elems = [index];
			
			switch (direction)
			{ 
			  case -1: start = index;
					   end = index + range;
					   break;
			  case  0: start = index - parseInt(range/2, 10);
					   end = index + parseInt(range/2, 10)
					   break;
			  case  1: start = index - range;
					   end = index;
					   break;
			}
			
			for (var i = start; i <= end; i++) {
				if (i >= 0 && i < total && i != index) {
					// It is in range
					elems.push(i);
				}
			}
			
			total = elems.length;
			
			for(var x = 0; x < total; x++) {
				var i = elems[x];
				var $elem = $dcms.eq(i);
				//if ( ! ($(this).hasClass('dcmQueued') && (i != index) && (status != 'active'))) {
				//if (($(this).hasClass('dcmReady') || (i == index) || (status == 'active'))) {
				if (($elem.hasClass('dcmReady') || (i == index) || (status == 'active'))) {
					// Variable to find out if current image is in range
					var inRange = false;
					// Check direction and range
					
					// Verify if current image is in range or active image is actually current
					//if (inRange) {
						var queueName = ((status == 'active') && (i == index)) ? 'realtime' : ((i == index) ? 'live' : 'flash');

						//var imgDOM = $(this)[0];
						var imgDOM = $elem[0];
						var url = $(imgDOM).data('originalurl')+'&windowCenter='+wC+'&windowWidth='+wW+width;
						//seriesData.seriesImages[i]+'&windowCenter='+wC+'&windowWidth='+wW;
						var oldUrl = $(imgDOM).attr('src');
						// Get URL out of source
						//var oldUrl = src.substring(src.indexOf(shared_path) + shared_path.length);
						// Calculate new source
						if (oldUrl != url || queueName != 'flash') {
							// Alternate servers
							//var server = myServers[index % serversLength];
							//var newSrc = server+shared_path+url;
							// Update source if new source is different than actual one
							//imgDOM.src = newSrc;
							//imgDOM.src = url;
							if (mode == 'append' || queueName == 'live') {
								// Explicitly said to be append (initial loading)
								wadoQueue.append(imgDOM, url, queueName, viewerDOM.id);
							} else {
								// Otherwise do prepend
								wadoQueue.prepend(imgDOM, url, queueName, viewerDOM.id);
							}
						}
					//}
				}
				if (i == index)
					wadoQueue.start();

			//});
			}

			//wadoQueue.process();
			wadoQueue.start();
		},

		/* 
		* This function updates some dimensions to help the resize function
		* @param	jquery	the viewer used
		*/
		updateDimensions: function($viewer) {
			var viewerDOM = $viewer[0];
			var $current = $viewer.find('.activeImage');
			$.data(viewerDOM, 'dimensions', {vw:$viewer.width(), vh:$viewer.height(), h:$current.height(), 
				w:$current.width(), t:parseInt($current.css('top')), l:parseInt($current.css('left'))});
		},

		/* 
		* This function updates the display of current viewable image. It triggers the update of rest of images
		* @param	jquery	the viewer used
		* @param	integer	the number of images to hop (increase/decrease)
		*/
		scroll: function($viewer, d, mode) {
			// Get the viewer DOM
			var viewerDOM = $viewer[0];
			// Get the series Metadata
			var seriesData = $.data(viewerDOM, 'series');
			// Check if not defined
			if (typeof seriesData == 'undefined') return false;
			// Get the index
			var index = parseInt(seriesData.image, 10);
			// Get the current "cover" or active span (has images and others)
			$current    = $viewer.find('.activeImage');
			// This one holds the DICOM image
			var currentDOM = $current.find('.dcm:first')[0];
			
			if (mode == 'index') {
				index = d;
			} else {
				// Calculate the delta
				d = Math.ceil(d);
				// Set limits to max 5 images at a time (to avoid to fast scrolling)
				//d = (d < -5) ? ((d == -999) ? d : -5) : ((d > 5) ? ((d == 999) ? d : 5) : d);
				d = (d < -5) ? -5 : ((d > 5) ? 5 : d);
				// Update index
				index -= d;
			}
			
			// Calculate direction
			//d = (d < 0) ? -1 : 1;
			// Check limits
			index = (index >= seriesData.frames) ? (seriesData.frames - 1) : (index < 0 ? 0 : index);
			// Deactive current "cover" image. Hide them all.
			$current.addClass('none').removeClass('activeImage');
			// Find new "cover" image index
			$current = $viewer.find('.images .viewerImg').eq(index);
			// Now active new "cover" image
			$current.removeClass('none').addClass('activeImage');
			// Set the top position for the iScroll
			$viewer.find('.iscroll').css('top', parseFloat((index*100/(seriesData.frames)), 10).toFixed(3)+'%');
			// Update the index bar
			$viewer.find('.totalImages').html((index + 1) +' out of '+seriesData.frames);
			// Save back the new index
			seriesData.image = index;
			// Setting the src for current image and updating the series (for index)
			$.data(viewerDOM, 'series', seriesData);
			$.data(viewerDOM, 'src', seriesData.seriesImages[index]);

			/*
			//source = $.data(viewerDOM, 'src')+'&windowCenter='+wC+'&windowWidth='+wW+'&columns=64&imageQuality=15';
			source = $.data(viewerDOM, 'src')+'&windowCenter='+wC+'&windowWidth='+wW+'columns='+$current.width();
			//currentDOM.src = source;
			wadoQueue
				.setPriorityPane(viewerDOM.id)
				.flush('realtime')
				.halt()
				.prepend(currentDOM, source, 'realtime', viewerDOM.id)
				.start();
			*/
			//wadoQueue.process();
			//wadoQueue.start();

			// Update the images
			//wadoViewer.update($viewer, updateRange, d);
		},
		
		winlev: function(winC, winW, $iViewer) {
			wW = winW;
			wC = winC;
			$viewer = $iViewer;
			viewerDOM = $viewer[0];
			currentDOM = $viewer.find('.dcm').eq(0)[0];

			// Get the series metadata
			seriesData = $.data(viewerDOM, 'series');

			wadoQueue.flush('realtime', viewerDOM.id);
			wadoQueue.flush('live', viewerDOM.id);
			wadoQueue.flush('flash', viewerDOM.id);
			wadoQueue.halt();

			// Get the current index 
			index      = parseInt(seriesData.image, 10);

			// Update the text for W/L
			$viewer.find('.winlev').html('win:'+wW+'<br />lev:'+wC);

			// Add Window/Center to data in viewer
			$.data(viewerDOM, 'wCenter', wC);
			$.data(viewerDOM, 'wWidth', wW);
			
			$viewer.find('.dcm').each(function(i) {
				if (i == index) return;
				$(this)[0].src = 'media/img/b.gif';
				$(this).removeClass('dcmLoaded dcmQueued').addClass('dcmReady');
			});

			// Update surrounding 50 images
			wadoViewer.update($viewer, 50, 0, 'prepend');
		},
		
		winlevLive: function(winW, winC, $current) {
			wW = Math.max(1, winW);
			wC = winC;

			// Update the text for W/L
			$viewer.find('.winlev').html('win:'+wW+'<br />lev:'+wC);
			
			//var source = $.data(viewerDOM, 'src')+'&windowCenter='+wC+'&windowWidth='+wW+'&columns=64';
			var columns = '&columns='+parseInt(($current.data('origw')/4), 10);
			source = $.data(viewerDOM, 'src')+'&windowCenter='+wC+'&windowWidth='+wW+columns+'&imageQuality=10';
			//currentDOM.src = source;
			wadoQueue.prepend(currentDOM, source, 'realtime', viewerDOM.id);
			//wadoQueue.process();
			wadoQueue.start(0);
		},
		
		distance: function(x1, x2, y1, y2, ratio, xSpace, ySpace) {
			// Set defaults
			xSpace = (typeof xSpace == 'undefined') ? 1 : xSpace;
			ySpace = (typeof ySpace == 'undefined') ? 1 : ySpace;
			ratio = (typeof ratio == 'undefined') ? 1 : ratio;
			
			diffx = Math.abs(x1 - x2)*ratio*xSpace;
			diffy = Math.abs(y1 - y2)*ratio*ySpace;
			
			return Math.round(Math.sqrt(diffx*diffx + diffy*diffy));
		},
		
		hasFabric: function($activeImage) {
			return ($activeImage.find('.fab').length > 0);
		},
		
		getFabric: function($activeImage) {
			if ($activeImage.find('.fab').length == 0) {
				//alert('New Fabric!');
				// No Fabric object in viewer
				var w = $activeImage.width();
				var h = $activeImage.height();
				// Append the canvas
				$activeImage.append('<canvas class="fab abs pt0 pl0" style="z-index:2;" width="'+w+'" height="'+h+'"></canvas>');
				// This is the DOM for the fabric
				fabDOM = $activeImage.find('.fab').eq(0)[0];
				// This is the fabric object
				fab = new fabric.Canvas(fabDOM, { selection: false });
				// Save pointer back to fabric
				$.data($activeImage[0], 'fab', fab);
			}
			else {
				//alert($activeImage.find('.fab').length);
				// Get the fabric from the data object
				fab = $.data($activeImage[0], 'fab');
			}
			
			return fab;
		},
		
		measure: function($viewer, point, mode) {
		
			function makeCircle(left, top, weights, line, measure) {
			  var c = new fabric.Circle({
				left: left,
				top: top,
				strokeWidth: weights.stroke,
				radius: weights.stroke,
				//fill: '#fff',
				stroke: '#ff0000',
				selectable: false
			  });
			  c.hasControls = c.hasBorders = false;

			  c.line = line;
			  c.measure = measure;
			  c.end = null;
			  return c;
			}

			function makeLine(coords, weights) {
			  return new fabric.Line(coords, {
				fill: 'red',
				strokeWidth: weights.stroke,
				selectable: false
			  });
			}
			var xSpace = $.data(viewerDOM, 'xSpace');
			var ySpace = $.data(viewerDOM, 'ySpace');
			if (xSpace == null || ySpace == null) return false;
			// Get original width to calculate ratio
			var origW  = $activeImage.data('origw');
			var ratio = origW/$activeImage.width();
			var scale  = parseInt($activeImage.width()/origW*10, 10);
			var weights = {};
			if (scale < 10) {
				//weights = {fontSize:10, fontWeight:9, stroke:1, spacing:1};
//				weights = {fontSize:20, fontWeight:18, stroke:2, spacing:1.3};
				weights = {fontSize:15, fontWeight:12, stroke:2, spacing:1};
			} else if (scale < 20) {
				//weights = {fontSize:20, fontWeight:18, stroke:2, spacing:1.3};
				weights = {fontSize:22, fontWeight:20, stroke:2, spacing:1.5};
			} else {
				//weights = {fontSize:30, fontWeight:27, stroke:3, spacing:1.6};
				weights = {fontSize:30, fontWeight:27, stroke:3, spacing:1.9};
			}
			var x = point.x - offset.left;
			var y = point.y - offset.top;
			switch (mode) {
				case 'start':
					line = makeLine([x*fabRatio,y*fabRatio,x*fabRatio,y*fabRatio], weights);
					measure = new fabric.Text('', { 
					  left: x*fabRatio, 
					  top: y*fabRatio,
					  fontFamily: 'delicious_500',
					  fontSize: weights.fontSize,
					  fontWeight: weights.fontWeight,
					  fill: 'red',
					  backgroundColor: 'yellow',
					  selectable: false
					});
					end = makeCircle(x*fabRatio, y*fabRatio, weights, line, measure);
					circle = makeCircle(x*fabRatio, y*fabRatio, weights, line, measure);
					circle.end = end;
					fab.add(line, circle, end, measure);
				break;
				case 'end':
					total = fab.getObjects().length;
					if (total > 0) {
						circle = fab.item(total - 3);
						circle.line.set({'x2':x*fabRatio, 'y2':y*fabRatio});
						x1 = circle.line.get('x1')/fabRatio;
						x2 = circle.line.get('x2')/fabRatio;
						y1 = circle.line.get('y1')/fabRatio;
						y2 = circle.line.get('y2')/fabRatio;
						diffx = Math.abs(x1 - x2)*ratio*xSpace;
						diffy = Math.abs(y1 - y2)*ratio*ySpace;
						measurement = Math.round(Math.sqrt(diffx*diffx + diffy*diffy));
						if (measurement > 1) {
								offsetY = -15*weights.spacing;
								if (y1 > y2) {
									offsetY = 15*weights.spacing;
								}
								offsetX = 0;
								if (x1 < 30) {
									offsetX = 30*weights.spacing;
								}
								circle.measure.set({top:(y1 + offsetY)*fabRatio, left:(x1 + offsetX)*fabRatio}).setText(measurement+' mm');
								circle.end.set({top:y*fabRatio, left:x*fabRatio});
							}
						fab.renderAll();
						return measurement;
					}
					return 0;
				break;
			}
		},

		annotate: function($viewer, point, usertxt) {
			var origW  = $activeImage.data('origw');
			var scale  = parseInt($activeImage.width()/origW*10, 10);
			var weights = {};
			//console.log(scale);
			if (scale < 10) {
				weights = {fontSize:10, fontWeight:9, stroke:1, spacing:0.8};
			} else if (scale < 20) {
				weights = {fontSize:15, fontWeight:13, stroke:1.5, spacing:1};
			} else {
				weights = {fontSize:20, fontWeight:18, stroke:2, spacing:1.3};
			}
			// Now fab refers to the Fabric object
			var x = point.x- offset.left;
			var y = point.y- offset.top;
			var annotation = new fabric.Text('', { 
				left: x*fabRatio, 
				top: y*fabRatio+scale*weights.spacing,
				fontFamily: 'delicious_500',
				fontSize: weights.fontSize,
				fontWeight: weights.fontWeight,
				fill: 'red',
				backgroundColor: 'yellow',
				selectable: false
			});
			annotation.setText(usertxt);
			var circle = new fabric.Circle({
				left: x*fabRatio,
				top: y*fabRatio,
				strokeWidth: weights.stroke,
				radius: weights.stroke,
				//fill: '#fff',
				stroke: '#ff0000',
				selectable: false
			  });
			fab.add(circle, annotation);
			fab.renderAll();
			return 0;
		},

	    drawingPath: function($viewer, point) {
			var x = point.x- offset.left;;
			var y = point.y- offset.top;;
			fab._freeDrawingXPoints.push(x*fabRatio);
			fab._freeDrawingYPoints.push(y*fabRatio);
      
			fab.contextTop.lineTo(x*fabRatio, y*fabRatio);
			fab.contextTop.stroke();
		},
	
	    preparePath: function($viewer, point) {
			var x = point.x- offset.left;;
			var y = point.y- offset.top;;
      
			fab.discardActiveObject().renderAll();
      
			fab._freeDrawingXPoints.length = fab._freeDrawingYPoints.length = 0;
      
			fab._freeDrawingXPoints.push(x*fabRatio);
			fab._freeDrawingYPoints.push(y*fabRatio);
      
			fab.contextTop.beginPath();
			fab.contextTop.moveTo(x*fabRatio, y*fabRatio);
			fab.contextTop.strokeStyle = fab.freeDrawingColor;
			fab.contextTop.lineWidth = fab.freeDrawingLineWidth;
			fab.contextTop.lineCap = fab.contextTop.lineJoin = 'round';
		},
	
		/* 
		* This function pans
		* @param	jquery	the viewer used
		* @param	map of values
		*/
		pan: function($elements, map) {
			// Update values for all images
			$elements.css({top:map.top, left:map.left});
		},
		
		zoom: function($current, viewerDOM, $viewer, diff, single) {
			//$current.css({border:'1px solid red'});
			// Find top
			var top  = parseInt($current.css('top'), 10);
			// Find left
			var left = parseInt($current.css('left'), 10);
			// Check for "Not a Number" cases
			top = isNaN(top) ? 0 : top;
			left = isNaN(left) ? 0 : left;

			// Find width of image
			var w = $current.width();
			// Find height of image
			var h = $current.height();
			
			var yDiff = diff;
			
			// Ratio originalWidth/originalHeight
			var ratio = parseFloat($current.data('origratio'));
			
			if (Math.abs(yDiff) < 1) {
				// It is percentage of size
				// -0.2 means decrease by 20%
				// 0.2 means increase by 20%
				yDiff = h*yDiff;
			}
			yDiff = parseInt(yDiff, 10);
			yDiff += yDiff % 2;
			//////console.log(yDiff+' '+top+' '+left+' '+w+' '+h+' '+ratio);
			// Calculate new height
			var newH = parseInt(h + yDiff, 10);
			// Calculate new width
			var newW = parseInt(newH*ratio, 10);

			//console.log('newW '+newW+' width: '+$viewer.width()+' ratio: '+ratio);
			if (ratio > 1) {
				// landscape image
				if (newW < $viewer.width()*0.5 || newW > $viewer.width()*5) return false;
			}
			else {
				// portrait image
				if (newH < $viewer.height()*0.5 || newH > $viewer.height()*5) return false;
			}

			// Calculate x-coordinate difference
			var xDiff = newW - w;

			//////console.log('top: '+top+' yDiff: '+yDiff+' h: '+h+' newH: '+newH);
			// Calculate new top and left
			top += -parseInt(yDiff/2, 10);
			left += -parseInt(xDiff/2, 10);
			
			//////console.log('then '+xDiff+' '+top+' '+left+' '+newW+' '+newH);
			// Save new "width"
			$.data(viewerDOM, 'cols', newW);
			// Update current image
			//$current.height(newH).width(newW).css({top:top, left:left});
			// Update stack of images
			//$viewer.find('.viewerImg').width(newW).height(newH).css({top:top, left:left});
			if (single) {
				$current.css({height:newH, width:newW, top:top, left:left});
				$current.find('.canvas-container, canvas').width(newW).height(newH);
			} else {
				$viewer.find('.viewerImg').each(function(i) {
					if (ratio == parseFloat($(this).data('origratio'))) {
						$(this).css({height:newH, width:newW, top:top, left:left});
						$viewer.find('.canvas-container, canvas').width(newW).height(newH);
					} else {
						wadoViewer.zoom($current, $(this)[0], $viewer, diff, true);
					}
				});
			}
		}
	};


	/*
	* This set of functions are used for the image manipulation
	*/
	if ('ontouchstart' in window) {
		$('.images').bind('gesturestart', wadoViewer.startGesture);
		$('.images').bind('gesturechange', wadoViewer.movingGesture);
		$('.images').bind('gestureend', wadoViewer.endGesture);
		$('#imgZoom, #imgScroll').hide();
		$('#imgScroll').removeClass('activeTool');
		$('#imgPan').addClass('activeTool');
	}
	

	$('.images, .scrollee').bind('mousedown touchstart', wadoViewer.start);
	if ($.browser.msie) {
		$('.images, .scrollee').bind('mousemove touchmove', wadoViewer.moving);
	} else {
		$('.images, .scrollee').bind('mousemove touchmove', throttle(wadoViewer.moving, 1));
	}
	$('.images, .scrollee').bind('mouseup touchend', wadoViewer.end);

	window.wadoViewer = wadoViewer;
	window.wadoViewer.presets = presets;
	
})(jQuery);