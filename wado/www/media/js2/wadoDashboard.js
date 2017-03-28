(function( $, window ) {

	// Use the correct document accordingly with window argument (sandbox)
	var document = window.document;
	
	var autoloadSeries = true;
	
	// Our function here
	var wadoDashboard = function(autoload) {

		var panes = [];
		
		// If autoload exist, assign it
		if ( autoload ) { 
			autoloadSeries = autoload;
		}
		
		function initPanes() {
			// Define the panes. Configurable?
			$('.viewer').each(function() {
				panes[panes.length] = $(this).attr('id');
			});
		};
		
		/*
		* This function loads documents right after menu is loaded for faster response.
		* Results seat and wait in their corresponding pane
		*/
		var _docs = function() {
			// The index of the series to load
			var seriesIndex = 0;
			var $elements   = $('.item');
			var totalElements = $elements.length;
			
			var preLoad = function(i) {
				if (i >= totalElements) return false;
				// Local variable
				var element = $elements.get(i);
				var $this = $(element);
				
				// If attachment or report => simulate click
				if ($this.hasClass('Attachment') || $this.hasClass('Report') || $this.hasClass('Video')) {
					// Check Session
					wadoSession.checkTimeout();
					
					// Call the ajax href but forgets the response. Triggers the preparation of docs at the server from client
					$.get($this.attr('href'), function(response, status, xhr) {
						// Inject result to temp div (not displayed)
						$('#temp').html(response);
						preLoad(i + 1);
					});
				}
				
				if ($this.hasClass('series') && autoloadSeries) {
					// Check Session
					wadoSession.checkTimeout();
		
					// Init the queues for wado
					wadoQueue.init();

					// Get metadata info about the series (allow cache!)
					$.getJSON($this.attr('href'), function(seriesData) {
						// Save seriesData into the series object
						
					// TODO: loader.series CALLS series info AGAIN!!!
						if (seriesData.modality == 'CR')
						{
							// It is a CR
							// Attach the data of the ajax response to the viewer
							$.data($('#'+panes[seriesIndex])[0], 'series', seriesData);
							// Load the series
							loader.series($this, panes[seriesIndex]);
							// Simulate the click for Full view
							$('#imgFull').trigger('click');
							autoloadSeries = false;
						}
						else
						//if (/^(CT|MR|US|OT|RF)$/.test(seriesData.modality))
						{
							// Attach the data of the ajax response to the viewer
							$.data($('#'+panes[seriesIndex])[0], 'series', seriesData);
							// Load the series
							loader.series($this, panes[seriesIndex]);
							seriesIndex++;
							if (seriesIndex > 3)
								autoloadSeries = false;
							if (totalElements == 1) {
								// Simulate the click for Full view
								$('#imgFull').trigger('click');
								autoloadSeries = false;
							}
						}
						preLoad(i + 1);
					});
				}
			};
			
			// Navigate the list in menu
			preLoad(0);
			
			// No more autoload
			//autoloadSeries = false;
		},
			
		/*
		* This function does the following to the menu items:
		* - Clicks
		* - Wheeling
		* - Drag/drop
		*/
		_drag = function(){
			
			if ( !('ontouchstart' in window)) {
				// Image viewer hover (but not for touching devices)
				$('#menu li').hover(
					function() {
						$(this).find('.clickPanes').show();
					},
					function() {
						$(this).find('.clickPanes').hide();
					}
				);
			}

			$('.paneLoader').hover(
				// href's have the # at the beginning
				function() {
					$('#'+$(this).attr('href').substring(1)).find('.paneHighlight').show();
				},
				function() {
					$('#'+$(this).attr('href').substring(1)).find('.paneHighlight').hide();
				}
			);
			
			// Image viewer hover
			$('.paneLoader').click(function(e) {
				// No propagation nor default
				e.stopPropagation();
				e.preventDefault();
				// local var
				$this = $(this);
				// Extend the life of session
				wadoSession.extendSession();
				// Find a better way to check for .series
				loader.series($this.parent().parent().parent().find('.series'), $this.attr('href').substring(1));
			});
			
			// When clicking the object for series
			$('#menu li a.series').click(function(e) {
				// No propagation nor default
				e.stopPropagation();
				e.preventDefault();
				// Hide the panes
				$('.clickPanes').hide();
			});
			
			$('#menu .plus').click(function(e) {
				// No propagation nor default
				e.stopPropagation();
				e.preventDefault();
				if ($(this).parent().find('.clickPanes').css('display') == 'none') {
					// Show the panes
					$(this).parent().find('.clickPanes').show();
				} else {
					// Hide the panes
					$(this).parent().find('.clickPanes').hide();
				}
				/*
				// Extend the life of session
				wadoSession.extendSession();
				// Find the elem that has the information
				var $this = $(this).hasClass('item') ? $(this) : $(this).parent().parent().find('.item');
				
				// Attachment case
				if ($this.hasClass('Attachment')) {
					loader.attachment($this);
				}
				// Report case
				if ($this.hasClass('Report')) {
					loader.report($this);
				}
				// Video case
				if ($this.hasClass('Video')) {
					loader.video($this);
				}
				// Series case (images)
				if ($this.hasClass('series')) {
					// TODO: A more intelligent way to load when other ones are loaded
					// If pane is shown in full, load case there, otherwise use top left
					//side = ($('.fullPane').length == 1) ? $('.fullPane').attr('id') : 'vTL';
					transition($('.activeLayout').attr('id').substring(3), '2x2');
					// Load series
					loader.series($this, 'vTL');
				}
				*/
			});

			
			// When Right clicking load to the corresponding pane
			$('#menu li a.item, #menu .aPane').bind('contextmenu', function(e) {
				// No propagation nor default
				e.stopPropagation();
				e.preventDefault();
				// Extend the life of session
				wadoSession.extendSession();
				// Find the elem that has the information
				var $this = $(this).hasClass('item') ? $(this) : $(this).parent().parent().find('.item');

				// Series case (images)
				if ($this.hasClass('series')) {
					// Update layout
					transition($('.activeLayout').attr('id').substring(3), '2x2');
					// Load series
					loader.series($this, 'vTR');
				}
			});

			// Dragging
			$('.drag').click(function(){return false;})
				.drag('start', function( ev, dd ){
					// Start dragging
					// Clone. Add opacity, it is absolute, set fixed width, on top of everything, append to body and avoid the click
					return $( this ).clone()
						.css('opacity', .75 ).addClass('abs').width(256).addClass('layer9')
						.appendTo( $('body') ).click(function(){return false;});
				})
				.drag(function( ev, dd ){
					// While dragging. Set new coordinates
					$( dd.proxy ).css({
						top: dd.offsetY,
						left: dd.offsetX
					});
				})
				.drag('end', function( ev, dd ){
					// And the end of dragging. Remove proxy and load series
					$( dd.proxy ).remove();
					var $item = $(this).find('a');

					// Attachment case
					if ($item.hasClass('Attachment')) {
						loader.attachment($item);
					}
					// Report case
					if ($item.hasClass('Report')) {
						loader.report($item);
					}
					// Series case (images)
					if ($item.hasClass('series')) {
						// Load series
						loader.series($item, $(dd.drop).attr('id'));
					}
				});

				// Needed to have the drop being triggered
				$('.drop')
					.drop(function(){
					//Even thought it does nothing
					})
					.drop('start',function(){
						$(this).addClass('opPane');
					})
					.drop('end',function(){
						$(this).removeClass('opPane');
					});

				$.drop({ mode:"overlap" });

			if ('ontouchstart' in window && screen.width >=768) {
				$('#menu .plus').show();
			}
		};

		initPanes();
		this.docs = _docs;
		this.drag = _drag;
		this.panes = panes;
		
		// Expose wadoDashboard to the global object
		return this;		
	},

	ui = {
	
		init: function() {
			
			// Bind the scroll wheel to navigate the series "up" or "down"
			$('.viewer').bind('mousewheel', function(e, d){
				// No propagation nor default
				e.stopPropagation();
				e.preventDefault();

				wadoQueue.halt();

				var $this = $(this);

				d = (Math.abs(d) < 0.1) ? d*100 : d;
				// Navigate to next (based on delta)
				wadoViewer.scroll($this, d);
				var dir = (d < 0) ? -1 : 1;
				wadoViewer.update($this, 50, dir, 'prepend');
				
				// Sync the viewers
				if ($('#imgSync').is(':checked')) {
					// Other
					var $other = $this.siblings('.viewer').eq(0);
					// Navigate (should start at the same index???)
					wadoViewer.scroll($other, d);
					wadoViewer.update($other, 50, dir, 'prepend');
				}
			});	

			// To toggle the menu (full-wide <=> other)
			$('#toggleMenu').click(ui.click.toggleMenu);

			// To toggle the template layer
			$(".ToggleTemplate").click(ui.click.toggletemplatelayer);

			// To toggle the markup layer
			$(".ToggleMarkup").click(ui.click.togglemarkuplayer);

			// To toggle the markup layer
			$(".clearmarkup").click(ui.click.clearmarkup);

			
			// Image viewer hover
			$('.viewer').hover(ui.hover.viewerMouseIn, ui.hover.viewerMouseOut);

			// Image viewer hover
			$('.images').dblclick(ui.dblclick.viewer);

			// Preset hover
			$('.preset').hover(ui.hover.presetMouseIn, ui.hover.presetMouseOut);
			
			// Preset click
			$('.preset').click(ui.hover.presetMouseIn);

			// When a preset is clicked
			$('.preset a').click(ui.click.preset);

			// Button that navigates the series "up" or "down"
			$('.goNext, .goPrev').on('click touchstart', ui.click.viewerScroll);

			// Button for scrolling, with hover too
			//$('.scrollee a').hover(ui.click.viewerScroll);

			// Button for zoom "up" or "down"
			$('.zoom a').click(ui.click.viewerZoom);
			
			// Handles the toggling of panes from viewer
			$('.togglePanes').click(ui.click.togglePanes);
			
			//ximing add showing the header
			$('.header').click(ui.click.header);

			//ximing add showing the download
			$('.download').click(ui.click.download);

			//ximing add clear the template
			$('#clearTemplate').click(ui.click.clearTemplate);
			
			// Viewer layout toolbar
			$('.layoutTool').click(ui.click.layoutTool);

			// When a reset is clicked
			$('.reset').click(ui.click.reset);
			$('.save').click(ui.click.roiSave);
			$('.load').click(ui.click.roiLoad);
			
			/*
			* This set of functions are used for the toolbars
			*/
			// Attachment toolbar
			$('#smallZoom').click(ui.click.smallZoom);
			
			$('#largeZoom').click(ui.click.largeZoom);
			
			$('#extraLargeZoom').click(ui.click.extraLargeZoom);

			$('#imgText').click(ui.click.imgText);

			$('.eforms').click(ui.click.eForms);
			$('#maskOverlay').click(ui.click.maskOverlay);
			$('#template').click(ui.click.template);
			$('#area2D').click(ui.click.area2D);

			// Viewer toolbar
			$('.imageTool').click(ui.click.imageTool);
			

			// Finally attach the resize to the window
			if ($.browser.msie) {
				$(window).bind('resize', ui.resize);
			} else {
				$(window).bind('resize', throttle(ui.resize, 5));
			}
			window.onorientationchange = ui.orientationChange;
		},

		orientationChange: function() {
			switch(window.orientation) {
				case 0:
				case 180:
					//$('#main').height(376);
				break;
				case -90:
				case 90:
					//$('#main').height(226);
				break;
			}
			ui.resize();
		},
		
		resize: function() {
			/*$('.viewer').each(function(i) {
				var $viewer = $(this);
				if ($viewer.find('.activeImage').length > 0) {
					var viewerDOM = $viewer[0];
					var $current = $viewer.find('.activeImage');

					// Navigate to next
					wadoViewer.zoom($current, viewerDOM, $viewer, 0, false);
				}
			});*/
			$('.viewer').each(function(i) {
				var $viewer = $(this);
				if ($viewer.find('.activeImage').length > 0)
				{
					var viewerDOM = $viewer[0];
					// Get dimensions
					var dimensions = $.data(viewerDOM, 'dimensions');
					// New viewer width
					var currentW = $viewer.width();
					// New viewer height
					var currentH = $viewer.height();
					// Old viewer width
					var previousW = dimensions.vw;
					// Old viewer height
					var previousH = dimensions.vh;
					
					//var newDims = {};
					
					//$(this).find('.dcm').each(function (i) {
						
						// Image Height
						var imageH = dimensions.h;
						//var imageH = $(this).height();
						// Image Width
						var imageW = dimensions.w;
						//var imageW = $(this).width();
						// Image Left
						var left = dimensions.l;
						//var left = parseInt($(this).css('left'), 10);
						// Image Left
						var top = dimensions.t;
						//var top = parseInt($(this).css('top'), 10);
						
						// Ratios and differences
						var ratioH = currentH/previousH;
						imageH = imageH*ratioH;
						imageW = imageW*ratioH;
						var newTop  = top*ratioH;

						var ratioW = currentW/previousW;
						// Calculate image width as if it was by ratio of width
						//var imageiW = $(this).width()*ratioW;
						var imageiW = dimensions.w*ratioW;
						// Substract the difference divided by 2 from the sides
						var newLeft = left*ratioW - (imageW - imageiW)/2;
						//var newLeft = left - (imageW - imageiW)/2;
						//var newLeft = left + (imageW - imageiW)/2;

						// Set new values
						$viewer.find('.activeImage, .images .viewerImg').width(imageW).height(imageH).css({top:newTop, left:newLeft});
						$viewer.find('.images .canvas-container, .images canvas').width(imageW).height(imageH);
						//$(this).width(imageW).height(imageH).css({top:newTop, left:newLeft});
						
						//if ($(this).parent().hasClass('activeImage')) {
							newDims = {vh:currentH, vw:currentW, h:imageH, w:imageW, t:newTop, l:newLeft};
						//}
					//});

					var viewerDOM = $viewer[0];
					var $current = $viewer.find('.activeImage');

					var origRatio = $current.data('origratio');
					
					$viewer.find('.viewerImg').each(function () {
						if ($(this).data('origratio') != origRatio) {
							//console.log('diff');
							wadoViewer.zoom($(this), viewerDOM, $viewer, 0, true);
						}
					});
					// zoom to actual to fix different dimensions
					//wadoViewer.zoom($current, viewerDOM, $viewer, 0, false);
					/*
					$viewer.find('.raph').each(function () {
						$(this).width(imageW).height(imageH);
						var r = $(this).data('raph');
						r.setSize(imageW, imageH);
						r.setViewBox(0, 0, imageW, imageH);
						r.forEach( function (elem) {
							bbox = elem.getBBox();
							elem.scale(ratioH, ratioH, bbox.x, bbox.y).translate(newLeft - left, newTop - top);
						}, r);
					});
					*/
					// Save dimensions back
					//$.data(viewerDOM, 'dimensions', {vh:currentH, vw:currentW, h:imageH, w:imageW, t:newTop, l:newLeft});
					$.data(viewerDOM, 'dimensions', newDims);
				}
				setTimeout(function() { window.scrollTo(0, 1); }, 100);
			});
			
		},

		rescale: function($viewer, scale, mode, update)
		{
			// Current active image width
			var activeImageW = $viewer.find('.activeImage').width();
			// Current active image height
			var activeImageH = $viewer.find('.activeImage').height();		
			// Find the left from current "cover" image
			var left = parseInt($viewer.find('.activeImage').css('left'));
			// Find the top from current "cover" image
			var top = parseInt($viewer.find('.activeImage').css('top'));
			activeImageW = activeImageW*scale;
			activeImageH = activeImageH*scale;
			var newLeft, newTop  = top*scale;
			switch (mode)
			{
			case '2x2-1x1':
				newLeft = left - activeImageW/4;
				break;
			case '2x2-Full':
			case 'Full-2x2':
				newLeft = left*scale;
				break;
			case '1x1-2x2':
				newLeft = left + activeImageW/2;
				break;
			}
			$current = $viewer.find('.activeImage');
			$current.css({left: newLeft, top: newTop}).width(activeImageW).height(activeImageH);
			// The rest (do zoom of 0 for all. Zoom will take care of resizing different sizes images accordingly)

			var origRatio = $current.data('origratio');
			
			$viewer.find('.viewerImg').each(function () {
				$(this).css({left: newLeft, top: newTop}).width(activeImageW).height(activeImageH);
				
				if ($(this).data('origratio') != origRatio) {
					//console.log('diff');
					wadoViewer.zoom($(this), $viewer[0], $viewer, 0, true);
				}
			});
			//wadoViewer.zoom($current, $viewer[0], $viewer, 0, false);
			/*
			$viewer.find('.images .viewerImg').each(function(index){
				//$(this).css({left: newLeft, top: newTop}).width(activeImageW).height(activeImageH);
				wadoViewer.zoom
			});*/
			// The rest of objects
			//$viewer.find('.activeImage .mod')
			$viewer.find('.canvas-container, canvas').each(function () {
				$(this).width(activeImageW).height(activeImageH);
			});
			if (update) {
				// and set new dimensions
				//wadoViewer.updateDimensions($viewer);
			}
		},

		hover: {
			viewerMouseIn: function() {
				// Trigger the hover of Viewer with 'on'
				ui.hover.viewer($(this), 'on');
			},
			
			viewerMouseOut: function() {
				// Trigger the hover of Viewer with 'off'
				ui.hover.viewer($(this), 'off');
			},

			viewer: function($viewer, place) {
				var viewerDOM = $viewer[0];
				var type = $.data(viewerDOM, 'type');
				if (place == 'on')
				{
					// If there is a series loaded, show the presets (if possible) and "up" & "down" buttons
					if ($viewer.find('.totalImages').html() != '') 
					{
						if (type == 'series')
						{
							$viewer.find('.interactive').show();
							var seriesData = $.data(viewerDOM, 'series');
							if (/^(CT|MR)$/.test(seriesData.modality))
							{
								$viewer.find('.preset').show();
							}
						}
					}
					// Show the toggling of the panes ("Full" <-> "Restore"). Show txtInfo
					$viewer.find('.togglePanes, .txtInfo').show();
					//ximing add the header dump
					$viewer.find('.header').show();
					//ximing add the download
					$viewer.find('.download').show();

				}
				else
				{
					// Hide all the "buttons"
					$viewer.find('.togglePanes, .preset, .interactive').hide();
					//ximing add the header dump
					$viewer.find('.header').hide();
					//ximing add the download dump
					$viewer.find('.download').hide();
					// Remove the data "status" from viewer, to prevent unnecesary actions
					$.data(viewerDOM, 'status', '');
					if ($('.activeText').length == 0)
					{
						// Hide the txtInfo classes again, Text is not selected
						$viewer.find('.txtInfo').hide();
					}
				}
			},

			presetMouseIn: function() {
				var $this = $(this);
				// Hide the Presets
				$this.find('ul').hide();
				var viewerDOM = $this.closest('.viewer')[0];
				// Get the series info
				var seriesData = $.data(viewerDOM, 'series');
				// Show the preset (if exists based on modality)
				$this.find('.preset'+seriesData.modality).show();
			},
			
			presetMouseOut: function() {
				// Hide the presets
				$(this).find('ul').hide();
			}
		},
		
		dblclick: {
			viewer: function(e) {
				// No propagation nor default
				e.stopPropagation();
				e.preventDefault();

				var $viewer = $(this).closest('.viewer');
				var viewerDOM = $viewer[0];
				var $current = $viewer.find('.activeImage');
				var yDiff = 0.50;

				// Navigate to next
				wadoViewer.zoom($current, viewerDOM, $viewer, yDiff, false);
				// Update the dimensions
				wadoViewer.updateDimensions($viewer);
			},
		},
		
		click: {
			viewerScroll: function(e) {
				// No propagation nor default
				e.stopPropagation();
				e.preventDefault();
				
				// Find the delta
				d = $(this).hasClass('goNext') ? -1 : 1;
				$viewer = $(this).closest('.viewer');
				// Navigate to next
				wadoViewer.scroll($viewer, d);
				wadoViewer.update($viewer, 50, d, 'prepend');
			},

			viewerZoom: function(e) {
				// No propagation nor default
				e.stopPropagation();
				e.preventDefault();

				var $viewer = $(this).closest('.viewer');
				var viewerDOM = $viewer[0];
				var $current = $viewer.find('.activeImage');
				var yDiff = ($(this).hasClass('zoomIn')) ? 0.20 : -0.20;

				// Navigate to next
				wadoViewer.zoom($current, viewerDOM, $viewer, yDiff, false);
			},
			
			preset: function(e) {
				var $this = $(this);
				// Stop everything
				e.stopPropagation();
				e.preventDefault();
				// Find viewer
				var $viewer = $this.closest('.viewer');
				// Get viewer DOM
				var viewerDOM = $viewer[0];
				// Get the name of the preset
				var presetText = $this.text();
				// Hide presets
				$this.closest('ul').hide();
				// If preset is the same Do Nothing
				if ($this.closest('.preset').find('span').text() == presetText) return false;
				// Update preset text
				$this.closest('.preset').find('span').text(presetText);
				// Load series data
				var seriesData = $.data(viewerDOM, 'series');
				// Get current image index from "banner" of total images
				var index = seriesData.image;
				// Get the current preset value
				var values = wadoViewer.presets[seriesData.modality][presetText];

				wadoViewer.winlev(values[0], values[1], $viewer);
				return false;
/*=========================================				
				wadoQueue.flush('live', viewerDOM.id);
				wadoQueue.flush('realtime', viewerDOM.id);
				wadoQueue.flush('flash', viewerDOM.id);
//==========================================
				$viewer.find('.winlev').html('win:'+values[0]+'<br />lev:'+values[1]);

				// Only for Zoom and W/L do something. First update width (cols)
				var source = $.data(viewerDOM, 'src')+'&windowCenter='+values[0]+'&windowWidth='+values[1]+'&columns='+$viewer.find('.viewerImg').width();
				wadoQueue.add($viewer.find('.viewerImg .dcm').eq(index)[0], source, 'realtime', viewerDOM.id);
				//wadoQueue.process();
				wadoQueue.start();
//==========================================

				// Add Window/Center to data in viewer
				$.data(viewerDOM, 'wCenter', values[0]);
				$.data(viewerDOM, 'wWidth', values[1]);
				
				$viewer.find('.dcm').each(function(i) {
					$(this)[0].src = 'media/img/b.gif';
				});

				// Update the "cover" image to new Preset
				//$viewer.find('.viewerImg .dcm').eq(index).attr('src', seriesData.seriesImages[index]+'&windowCenter='+values[0]+'&windowWidth='+values[1]);
				// Update surrounding 50 images
				wadoViewer.update($viewer, 50, 0);
//============================================				*/
			},
			
			togglePanes: function(e){
				
				// Stop everything
				e.stopPropagation();
				e.preventDefault();
				
				var activeLayout = $('.activeLayout').attr('id').substring(3);
				var target = $(this).closest('.viewer').attr('id');
				var newLayout = (activeLayout == 'Full') ? '2x2' : 'Full';
				// Do the transition
				transition(activeLayout, newLayout, target);
			},
			
			toggletemplatelayer: function(e){
				e.stopPropagation();
				e.preventDefault();
				wadoViewer.toggleTemplateLayer(e);
				},

			togglemarkuplayer: function(e){
				e.stopPropagation();
				e.preventDefault();
				wadoViewer.toggleMarkupLayer(e);
				},
				
			clearmarkup: function(e){
				e.stopPropagation();
				e.preventDefault();
				wadoViewer.clearfab();
				wadoViewer.clearTemplate();
				},
			
			header: function(e){
				// Stop everything
				e.stopPropagation();
				e.preventDefault();
				// To get the DICOM header information
				src = $(this).parents('.ohidden').children().find('.activeImage').children('img').attr('src');
				$.ajax({
				  type: "POST",
				  url: "getHeader.php",
				  data: { imgsrc: src,  }
				}).done(function( msg ) {
					var ScreenWidth=window.screen.width;
					var ScreenHeight=window.screen.height;
					var movefromedge=0;
					placementx=(ScreenWidth/2)-((400)/2);
					placementy=(ScreenHeight/2)-((300+50)/2);
					WinPop=window.open("DICOM Header","","width=400,height=300,toolbar=0,location=0,directories=0,status=0,scrollbars=0,menubar=0,resizable=0,left="+placementx+",top="+placementy+",scre enX="+placementx+",screenY="+placementy+",");
					WinPop.document.write('<html>\n<head>\n</head>\n<body>'+msg+'</body></html>');
				});
			},

			download: function(e){
				// Stop everything
				e.stopPropagation();
				e.preventDefault();
				// To get the DICOM header information
				src = $(this).parents('.ohidden').children().find('.activeImage').children('img').attr('src');
					var ScreenWidth=window.screen.width;
					var ScreenHeight=window.screen.height;
					var movefromedge=0;
					placementx=(ScreenWidth/2)-((400)/2);
					placementy=(ScreenHeight/2)-((300+50)/2);
					WinPop=window.open("DICOM Download","","width=400,height=300,toolbar=0,location=0,directories=0,status=0,scrollbars=0,menubar=0,resizable=0,left="+placementx+",top="+placementy+",scre enX="+placementx+",screenY="+placementy+",");
					WinPop.document.write('<html>\n<head>\n</head>\n<body><h1>Processing, please wait...</h1></body></html>');
				$.ajax({
				  type: "POST",
				  url: "getzip.php",
				  data: { imgsrc: src,  }
				}).done(function( msg ) {
					WinPop.document.body.innerHTML=msg;
				});
			},
			
			clearTemplate: function(){
				wadoViewer.clearTemplate();
				},
			
			activeTool: function(e, $button, className) {
				// Stop everything
				e.stopPropagation();
				e.preventDefault();
				// Remove class from other tools
				$(className).removeClass('activeTool');
				// Add class to just clicked one
				$button.addClass('activeTool');
			},

			smallZoom: function(e) {
				// Common stuff
				ui.click.activeTool(e, $(this), '.docTool');
				
				// Set the width to "auto" mode
				$('#vFull img').height(wadoStudy.diff).width('auto');
			},
			
			largeZoom: function(e) {
				// Common stuff
				ui.click.activeTool(e, $(this), '.docTool');

				// Set the width and height to "auto" mode
				$('#vFull img').width('auto').height('auto');
			},
			
			extraLargeZoom: function(e) {
				// Common stuff
				ui.click.activeTool(e, $(this), '.docTool');

				// Set the width to 100% of viewer
				$('#vFull img').width('100%').height('auto');
			},
			
			imageTool: function(e) {
				// Common stuff
				ui.click.activeTool(e, $(this), '.imageTool');

				// Some local vars
				var cursors = {
					imgZoom: 'n-resize',
					imgScroll: 'row-resize',
					imgPan: 'move',
					imgWindow: 'crosshair',
					imgAnnotate: 'crosshair',
					imgMeasure: 'crosshair',
					imgROI: 'crosshair'
				},
				id = $(this).attr('id');
				
				// Add cursors accordingly
				$('.viewer').css('cursor', cursors[id]);

				// Set mode corresponding to id of element clicked (only 1 mode at a time)
				$.data($('#main')[0], 'mode', id);
			},
			
			imgText: function(e) {
				var $this = $(this);
				// Stop everything
				e.stopPropagation();
				e.preventDefault();

				if ($this.hasClass('activeText'))
				{
					// De-activate
					$this.removeClass('activeText').addClass('inactiveText');
					// Hide text data from viewers
					$('.txtInfo').hide();
				}
				else
				{
					// Make it active
					$this.addClass('activeText').removeClass('inactiveText');
					// Show text data from viewers
					$('.txtInfo').show();
				}
			},

		eForms: function(e) {
				var $this = $(this);
				// Stop everything
				e.stopPropagation();
				e.preventDefault();
				$('#templateframe').addClass('none');
				var mainw = $('#main').width();
				var toolw = $('#toolbar').width()+5;
				var menuw = $('#menuContainer').width();
				if ($this.hasClass('activeText'))
				{
					if($("#template").hasClass('activeText'))
					{
						$this.removeClass('activeText').addClass('inactiveText');
						$('#eformframe').addClass('none');
						$('#templateframe').removeClass('none');
					}
					else
					{

					// De-activate
					$this.removeClass('activeText').addClass('inactiveText');
					// Hide text data from viewers
					$('#eformframe').addClass('none');
					if($('#toggleMenu').text()=='hide')
					{
						mainw = toolw;	
					}
					else
					{
						mainw = toolw + menuw;	
					}
					$('#main').width(mainw);
					ui.resize();
					}
				}
				else
				{
					// Make it active
					$this.addClass('activeText').removeClass('inactiveText');
					// Show text data from viewers
					$('#imgFull').trigger('click');
					var ftop = $('#main').css('top');
					var h=$('#main').height();
					if($('#toggleMenu').text()=='hide')
					{
						mainw = toolw/2;
						var fleft = menuw + mainw;
						$('#main').width(mainw);
						$('#eformframe').width(mainw);
						$('#eformframe').height(h);
						$('#eformframe').css('left',fleft);	
					}
					else
					{
						mainw = menuw+toolw/2;
						var fleft = mainw;
						$('#main').width(mainw);
						$('#eformframe').width(toolw/2);
						$('#eformframe').height(h);
						$('#eformframe').css('left',fleft);				
					}
					$('#eformframe').css('top',ftop);					
					ui.resize();
					$('#eformframe').removeClass('none');

				}
			},
			
		area2D: function(e){
			var areano = prompt("Enter the lesion number");
			var $viewer = $(this).closest('.viewer');
			var viewerDOM = $viewer[0];
			$.data(viewerDOM,'areano',areano);
			},

		maskOverlay: function(e) {
				var $this = $(this);
				// Stop everything
				e.stopPropagation();
				e.preventDefault();
				$('#eformframe').addClass('none');
				var mainw = $('#main').width();
				var toolw = $('#toolbar').width()+5;
				var menuw = $('#menuContainer').width();
				if ($this.hasClass('activeText'))
				{
					$('input[type=image]').unbind('click', wadoViewer.maskOverlay);
					wadoViewer.offtemplate();
					$('.scrollee').bind('mousedown touchstart', wadoViewer.start);
					$('.images').bind('mousedown touchstart', wadoViewer.start);
					if ($.browser.msie) {
						$('.images, .scrollee').bind('mousemove touchmove', wadoViewer.moving);
					} else {
						$('.images, .scrollee').bind('mousemove touchmove', throttle(wadoViewer.moving, 1));
					}
					$('.images, .scrollee').bind('mouseup touchend', wadoViewer.end);



					// De-activate
					$this.removeClass('activeText').addClass('inactiveText');
					// Hide text data from viewers
					$('#overlayframe').addClass('none');
					if($(".eforms").hasClass('activeText'))
					{
						$('#overlayframe').addClass('none');
						$('#eformframe').removeClass('none');
					}
					else
					{
	
						if($('#toggleMenu').text()=='hide')
						{
							mainw = toolw;	
						}
						else
						{
							mainw = toolw + menuw;	
						}
						$('#main').width(mainw);
						ui.resize();
					}
					
					
				}
				else
				{
					$('.eforms').removeClass('activeText').addClass('inactiveText');
					$(".fab").parent().css("z-index",1);
					$(".temfab").parent().css("z-index",2);
					$('.images,.scrollee').unbind('mousedown touchstart', wadoViewer.start);
					$('.images,.scrollee').unbind('mousemove touchmove', wadoViewer.moving);
					$('.images,.scrollee').unbind('mousemove touchmove', throttle(wadoViewer.moving, 1));
					$('.images,.scrollee').unbind('mouseup touchend', wadoViewer.end);
					$('input[type=image]').bind('click', wadoViewer.maskOverlay);

					// Make it active
					$this.addClass('activeText').removeClass('inactiveText');
					// Show text data from viewers
					$('#imgFull').trigger('click');
					var ftop = $('#main').css('top');
					var h=$('#main').height();
					if($('#toggleMenu').text()=='hide')
					{
						mainw = toolw/2;
						templatew = toolw-mainw;
						var fleft = menuw + mainw;
						$('#main').width(mainw);
						$('#overlayframe').width(templatew);
						$('#overlayframe').height(h);
						$('#overlayframe').css('left',fleft);	
					}
					else
					{
						mainw = menuw+toolw/2;
						templatew = toolw+menuw-mainw;
						var fleft = mainw;
						$('#main').width(mainw);
						$('#overlayframe').width(templatew);
						$('#overlayframe').height(h);
						$('#overlayframe').css('left',fleft);				
					}
					$('#overlayframe').css('top',ftop);					
					ui.resize();
					$('#overlayframe').removeClass('none');

				}
			},

		template: function(e) {
				var $this = $(this);
				// Stop everything
				e.stopPropagation();
				e.preventDefault();
				$('#eformframe').addClass('none');
				var mainw = $('#main').width();
				var toolw = $('#toolbar').width()+5;
				var menuw = $('#menuContainer').width();
				if ($this.hasClass('activeText'))
				{
					$('input[type=image]').unbind('click', wadoViewer.template);
					wadoViewer.offtemplate();
					$('.scrollee').bind('mousedown touchstart', wadoViewer.start);
					$('.images').bind('mousedown touchstart', wadoViewer.start);
					if ($.browser.msie) {
						$('.images, .scrollee').bind('mousemove touchmove', wadoViewer.moving);
					} else {
						$('.images, .scrollee').bind('mousemove touchmove', throttle(wadoViewer.moving, 1));
					}
					$('.images, .scrollee').bind('mouseup touchend', wadoViewer.end);



					// De-activate
					$this.removeClass('activeText').addClass('inactiveText');
					// Hide text data from viewers
					$('#templateframe').addClass('none');
					if($(".eforms").hasClass('activeText'))
					{
						$('#templateframe').addClass('none');
						$('#eformframe').removeClass('none');
					}
					else
					{
	
						if($('#toggleMenu').text()=='hide')
						{
							mainw = toolw;	
						}
						else
						{
							mainw = toolw + menuw;	
						}
						$('#main').width(mainw);
						ui.resize();
					}
				}
				else
				{
					$('.eforms').removeClass('activeText').addClass('inactiveText');
					$(".fab").parent().css("z-index",1);
					$(".temfab").parent().css("z-index",2);
					$('.images,.scrollee').unbind('mousedown touchstart', wadoViewer.start);
					$('.images,.scrollee').unbind('mousemove touchmove', wadoViewer.moving);
					$('.images,.scrollee').unbind('mousemove touchmove', throttle(wadoViewer.moving, 1));
					$('.images,.scrollee').unbind('mouseup touchend', wadoViewer.end);
					$('input[type=image]').bind('click', wadoViewer.template);

					// Make it active
					$this.addClass('activeText').removeClass('inactiveText');
					// Show text data from viewers
					$('#imgFull').trigger('click');
					var ftop = $('#main').css('top');
					var h=$('#main').height();
					if($('#toggleMenu').text()=='hide')
					{
						mainw = toolw/2;
						templatew = toolw-mainw;
						var fleft = menuw + mainw;
						$('#main').width(mainw);
						$('#templateframe').width(templatew);
						$('#templateframe').height(h);
						$('#templateframe').css('left',fleft);	
					}
					else
					{
						mainw = menuw+toolw/2;
						templatew = toolw+menuw-mainw;
						var fleft = mainw;
						$('#main').width(mainw);
						$('#templateframe').width(templatew);
						$('#templateframe').height(h);
						$('#templateframe').css('left',fleft);				
					}
					$('#templateframe').css('top',ftop);					
					ui.resize();
					$('#templateframe').removeClass('none');

				}
			},
						
			reset: function(e) {
				// Stop everything
				e.stopPropagation();
				e.preventDefault();
				// Find viewer
				var $viewer = $(this).closest('.viewer');
				// Do the reset
				wadoViewer.reset($viewer,e);
				
				// Sync the viewers
				if ($('#imgSync').is(':checked'))
				{
					// Other
					var $other = $viewer.siblings('.viewer').eq(0);
					// Navigate (should start at the same index???)
					wadoViewer.reset($other);
				}
			},
			roiSave: function(e) {
				// Stop everything
				e.stopPropagation();
				e.preventDefault();
				// Find viewer
				var $viewer = $(this).closest('.viewer');
				// Do the save
				wadoViewer.save($viewer);
			},
			
			roiLoad: function(e) {
				// Stop everything
				e.stopPropagation();
				e.preventDefault();
				// Find viewer
				var $viewer = $(this).closest('.viewer');
				// Do the load
				wadoViewer.load($viewer);
			},
			
			layoutTool: function(e) {
				// Stop everything
				e.stopPropagation();
				e.preventDefault();

				// Find out layout names
				var oldLayout = $('.activeLayout').attr('id').substring(3);
				var newLayout = $(this).attr('id').substring(3);
				
				// Apply transition
				transition(oldLayout, newLayout);
			},
			
			toggleMenu: function(e) {
				// Stop everything
				e.stopPropagation();
				e.preventDefault();
				if($("#template").hasClass('activeText'))
				return ;
				var $this = $(this);
				// The width (65?)
				
				var w = $(this).parent().width(),
					// How many pixels to move
					difference = ($this.text() == 'hide') ? 
						parseInt(w/4, 10) : 
						-1*parseInt(w/4, 10);
				var toolw = $('#toolbar').width()+5;
					var menuw = $('#menuContainer').width();	
				if ($this.text() == 'hide')
				{
					// It said "hide", thus, hide the menu
					$('#menuContainer').hide();
					// read "show" now
					$this.text('show');
					// and enlarge the other panes
					$('#main').css('left', 0);
				

					if(!$("#eformframe").hasClass('none'))
					{
						$('#main').width(toolw+menuw-$('#eformframe').width());
					}
					else if(!$("#templateframe").hasClass('none'))
					{
						$('#main').width(toolw+menuw-$('#templateframe').width());
					}
					else
						$('#main').width(toolw+menuw);

				}
				else
				{
					// It said "show", thus, show the menu
					$('#menuContainer').show();
					// read "hide" now
					$this.text('hide');
					// and push other panels towards the right
					

					if(!$("#eformframe").hasClass('none'))
					{
						$('#main').width(toolw-$('#eformframe').width());
					}
					else if(!$("#templateframe").hasClass('none'))
					{
						$('#main').width(toolw-$('#templateframe').width());
					}
					else
					{
						$('#main').width(toolw);
					}
					$('#main').css('left', w);

				}

				ui.resize();
			},
		},
	},
	
	updateDisplayViewer = function($viewer) {
		var viewerDOM = $viewer[0];
		var type = $.data(viewerDOM, 'type');
		if (type == 'series')
		{
			// Show the "Reset" and "Window/Level" Button. Hide the Play
			$viewer.find('.reset').show();
			$('#imgWindow').show();
			$('.playback').hide();
		}
		else
		{
			// Show the "Play" Button. Hide "Reset" and "Window/Level"
			$viewer.find('.playback').show();
			$viewer.find('.reset, .winlev, .totalImages').hide();
			$('#imgWindow').hide();
		}
	},

	transition = function(oldLayout, newLayout, target) {
		var transitionString = oldLayout+'-'+newLayout;
		target = (typeof target == 'undefined') ? 'vTL' : target;
		
		switch (transitionString)
		{
			// 2x2 => others
			case '2x2-2x1' : 
				// Hide Bottom Right viewer
				$('#vBR, .panevBR').hide();
				$('#vBR').removeClass('activeViewer');
				// Resize accordingly
				resizePane('2x2', '1x1', $('#vTR'));
				break;
			case '2x2-1x2' : 
				// Hide Bottom Left viewer
				$('#vBL, .panevBL').hide();
				$('#vBL').removeClass('activeViewer');
				// Resize accordingly
				resizePane('2x2', '1x1', $('#vTL'));
				break;
			case '2x2-1x1' : 
				// Hide both Bottom Right & Left viewers
				$('#vBR, #vBL, .panevBR, .panevBL').hide();
				$('#vBR, #vBL').removeClass('activeViewer');
				// Resize accordingly
				resizePane('2x2', '1x1', $('#vTL'));
				resizePane('2x2', '1x1', $('#vTR'));
				break;
			case '2x2-Full' : 
				// Hide all
				$('.viewer, .aPane').hide();
				$('.viewer').removeClass('activeViewer');
				// Resize accordingly
				resizePane('2x2', 'Full', $('#'+target));
				break;
			// 2x1 => others
			case '2x1-2x2' :
				resizePane('1x1', '2x2', $('#vTR'));
				// Show all viewers
				$('.viewer, .aPane').show();
				$('.viewer').addClass('activeViewer');
				break;
			case '2x1-1x2' :
				transition('2x1', '2x2');
				transition('2x2', '1x2');
				break;
			case '2x1-1x1' :
				transition('2x1', '2x2');
				transition('2x2', '1x1');
				break;
			case '2x1-Full' :
				transition('2x1', '2x2');
				transition('2x2', 'Full', target);
				break;
			// 1x2 => others
			case '1x2-2x2' :
				resizePane('1x1', '2x2', $('#vTL'));
				// Show all viewers
				$('.viewer, .aPane').show();
				$('.viewer').addClass('activeViewer');
				break;
			case '1x2-2x1' :
				transition('1x2', '2x2');
				transition('2x2', '2x1');
				break;
			case '1x2-1x1' :
				transition('1x2', '2x2');
				transition('2x2', '1x1');
				break;
			case '1x2-Full' :
				transition('1x2', '2x2');
				transition('2x2', 'Full', target);
				break;
			// 1x1 => others
			case '1x1-2x2':
				resizePane('1x1', '2x2', $('#vTL'));
				resizePane('1x1', '2x2', $('#vTR'));
				// Show all viewers
				$('.viewer, .aPane').show();
				$('.viewer').addClass('activeViewer');
				break;
			case '1x1-1x2':
				transition('1x1', '2x2');
				transition('2x2', '1x2');
				break;
			case '1x1-2x1' : 
				transition('1x1', '2x2');
				transition('2x2', '2x1');
				break;
			case '1x1-Full' : 
				transition('1x1', '2x2');
				transition('2x2', 'Full', target);
				break;
			// Full => others
			case 'Full-2x2':
				// Resize accordingly
				resizePane('Full', '2x2', $('.fullPane'));
				// Show all viewers
				// Go back to normal from Full mode
				$('.viewer, .aPane').show().removeClass('fullPane').removeClass('full').addClass('size1of2')
				.removeClass('h100').addClass('hhalf');
				$('.viewer').addClass('activeViewer');
				$('.aPane').addClass('lhhalf').removeClass('lh100');
				// Show right text and set the current width
				$('.viewer').find('.togglePanes').text('Full');
				$('.viewer').each(function(i) {
					wadoViewer.updateDimensions($(this));
				});
				break;
			case 'Full-2x1':
				transition('Full', '2x2');
				transition('2x2', '2x1');
				break;
			case 'Full-1x2':
				transition('Full', '2x2');
				transition('2x2', '1x2');
				break;
			case 'Full-1x1':
				transition('Full', '2x2');
				transition('2x2', '1x1');
				break;
		}
		// Remove class from other tools
		$('.layoutTool').removeClass('activeLayout');
		// Add class to just clicked one
		$('#img'+newLayout).addClass('activeLayout');
	},

	resizePane = function(oldLayout, newLayout, $viewer) {
		var transitionString = oldLayout+'-'+newLayout;
		
		switch (transitionString)
		{
			case '2x2-1x1': 
				var id = $viewer.attr('id');
				// Resize to Tall mode
				$viewer.removeClass('full').addClass('size1of2').removeClass('hhalf').addClass('h100').show();
				$('.pane'+id).removeClass('full').addClass('size1of2').removeClass('hhalf').addClass('h100')
					.removeClass('lhhalf').addClass('lh100').show();
				ui.rescale($viewer, 2, transitionString, true);
				/*
				// Current active image width
				var activeImageW = $viewer.find('.activeImage').width();
				// Current active image height
				var activeImageH = $viewer.find('.activeImage').height();		
				// Find the left from current "cover" image
				var left = parseInt($viewer.find('.activeImage').css('left'));
				// Find the top from current "cover" image
				var top = parseInt($viewer.find('.activeImage').css('top'));
				left -= activeImageW/2;
				activeImageW = activeImageW*2;
				activeImageH = activeImageH*2;
				top  = top*2;
				$viewer.find('.activeImage').css({left: left, top: top}).width(activeImageW).height(activeImageH);
				// The rest
				$viewer.find('.images .viewerImg').each(function(index){
					$(this).css({left: left, top: top}).width(activeImageW).height(activeImageH);
				});
				// and set new dimensions
				wadoViewer.updateDimensions($viewer);
				*/
				break;
			case '2x2-Full': 
				var id = $viewer.attr('id');
				// Resize to Full mode
				$viewer.removeClass('size1of2').addClass('full').addClass('fullPane').removeClass('hhalf').addClass('h100').show();
				// Set panes of menu as well
				$('.pane'+id).removeClass('size1of2').addClass('full').show()
					.removeClass('hhalf').addClass('h100').removeClass('lhhalf').addClass('lh100');
				// Show viewer, text said "Full", thus, go to Full mode
				$viewer.find('.togglePanes').text('Restore');
				// Rescale
				ui.rescale($viewer, 2, transitionString, true);
				/*
				// Current active image width
				var activeImageW = $viewer.find('.activeImage').width();
				// Current active image height
				var activeImageH = $viewer.find('.activeImage').height();		
				// Find the left from current "cover" image
				var left = parseInt($viewer.find('.activeImage').css('left'));
				// Find the top from current "cover" image
				var top = parseInt($viewer.find('.activeImage').css('top'));
				activeImageW = activeImageW*2;
				activeImageH = activeImageH*2;
				left = left*2;
				top  = top*2;
				$viewer.find('.activeImage').css({left: left, top: top}).width(activeImageW).height(activeImageH);
				// The rest
				$viewer.find('.images .viewerImg').each(function(index){
					//$(this).css('left', left).width(activeImageW).height(activeImageH);
					$(this).css({left: left, top: top}).width(activeImageW).height(activeImageH);
				});
				// and set new dimensions
				wadoViewer.updateDimensions($viewer);
				*/
				break;
			case '1x1-2x2':
				var id = $viewer.attr('id');
				// Go back to normal from Tall mode
				$viewer.removeClass('full').addClass('size1of2').removeClass('h100').addClass('hhalf');
				// Set panes as well
				$('.pane'+id).removeClass('full').addClass('size1of2').show()
					.removeClass('h100').addClass('hhalf').addClass('lhhalf').removeClass('lh100');
				// Show viewer, set text to Full
				$viewer.find('.togglePanes').text('Full').show();
				// Rescale
				ui.rescale($viewer, 0.5, transitionString, true);

				/*
				// Current active image width
				var activeImageW = $viewer.find('.activeImage').width();
				// Current active image height
				var activeImageH = $viewer.find('.activeImage').height();		
				// Find the left from current "cover" image
				var left = parseInt($viewer.find('.activeImage').css('left'));
				// Find the top from current "cover" image
				var top = parseInt($viewer.find('.activeImage').css('top'));
				activeImageW = activeImageW/2;
				left += activeImageW/2;
				activeImageH = activeImageH/2;
				top  = top/2;
				$viewer.find('.activeImage').css({left: left, top: top}).width(activeImageW).height(activeImageH);
				// The rest
				$viewer.find('.images .viewerImg').each(function(index){
					//$(this).css('left', left).width(activeImageW).height(activeImageH);
					$(this).css({left: left, top: top}).width(activeImageW).height(activeImageH);
				});
				// and set new dimensions
				wadoViewer.updateDimensions($viewer);
				*/
				break;
			case 'Full-2x2':
				// Rescale
				ui.rescale($viewer, 0.5, transitionString, false);
				/*
				// Current active image width
				var activeImageW = $viewer.find('.activeImage').width();
				// Current active image height
				var activeImageH = $viewer.find('.activeImage').height();		
				// Find the left from current "cover" image
				var left = parseInt($viewer.find('.activeImage').css('left'));
				// Find the top from current "cover" image
				var top = parseInt($viewer.find('.activeImage').css('top'));
				activeImageW = activeImageW/2;
				activeImageH = activeImageH/2;
				left = left/2;
				top  = top/2;
				$viewer.find('.activeImage').css({left: left, top: top}).width(activeImageW).height(activeImageH);
				// The rest
				$viewer.find('.images .viewerImg').each(function(index){
					//$(this).css('left', left).width(activeImageW).height(activeImageH);
					$(this).css({left: left, top: top}).width(activeImageW).height(activeImageH);
				});
				// Not setting new dimensions
				*/
				break;
		}
	},

	loader = {
				
		/* 
		* This function loads a attachment
		* Sets the right toolbars and shows correct pane
		* @param	jquery	the element that contains the info of the attachment
		*/
		attachment: function($item) {
			// Hide viewers and toolbars
			$('.toolbar, .viewer, .pane').hide();
			// Remove active viewer for any viewer
			//$('.viewer').removeClass('activeViewer');
			// Show toolbar for attachments
			$('#toolDocs').show();
			// Now loading
			$('#vFull').html('loading...').show();
			// Check Session
			wadoSession.checkTimeout();
			$.get($item.attr('href'), function(response, status, xhr) {
				// Got response, place it
				$('#vFull').html(response);
				// Simulate the small click (one next to the other)
				$('#smallZoom').triggerHandler('click');
			});
		},

		/* 
		* This function loads a video
		* Sets the right toolbars and shows correct pane
		* @param	jquery	the element that contains the info of the attachment
		*/
		video: function($item) {
			// Hide viewers and toolbars
			$('.toolbar, .viewer').hide();
			// Remove active viewer for any viewer
			//$('.viewer').removeClass('activeViewer');
			// Now loading
			$('#vFull').html('loading...').show();
			// Check Session
			wadoSession.checkTimeout();
			$.get($item.attr('href'), function(response, status, xhr) {
				// Got response, place it
				$('#vFull').html(response);
				// Autoplay it
				$('#vFull a.media').media({autoplay:true});
			});
		},

		/* 
		* This function loads a report
		* Sets the right toolbars and shows correct pane
		* @param	jquery	the element that contains the info of the report
		*/
		report: function($item) {
			// Hide viewers and toolbars
			$('.toolbar, .viewer, .pane').hide();
			// Remove active viewer for any viewer
			//$('.viewer').removeClass('activeViewer');
			// Loading
			$('#vReport').html('loading...').show();
			// Check Session
			wadoSession.checkTimeout();
			$.get($item.attr('href'), function(response, status, xhr) {
				// Show text
				$('#vReport').html(response);
			});
		},
		
		/* 
		* This function loads a series
		* Needs to know the element to load and the viewer to use
		* @param	jquery	the element that contains the info of the series
		* @param	string 	the name of the viewer where the images will be loaded
		*/
		series: function($anchor, viewer) {
			var $viewer = $('#'+viewer);
			var viewerDOM = $viewer[0];
			$viewer.find('.images').html('loading....');
			// Hide toolbars, report, attachment, selected viewer and presets
			$('.toolbar, #vReport, #vFull').hide();
			$viewer.find('.preset').hide();

			$('.activeViewer').show();
			// Check if there is any active viewer
			/*
			if ($('.activeViewer').length == 0)
			{
				// No active viewer, reset viewers to half
				$('.viewer').removeClass('full').addClass('size1of2').show();
			}
			*/
			
			// Get the description of the series
			var description = $anchor.parent().find('.description').text();

			// Empty the response for the series (name comes from the PHP page)
			/*
			* Some values:
			* - index: index of the image in the WHOLE study (not always 0 for first image of series)
			* - frames: count of total frames for given series
			* - image: 0, the first image of series.
			*/
			var seriesData = {};
			// Check Session
			wadoSession.checkTimeout();
			
			var ajax = {
			
				scriptLoaded: function(data, viewerDOM) {
					seriesData = data;
					// Save the response from the series
					$.data(viewerDOM, 'series', seriesData);
					// Prepare the url to get the metadata info of the first image
					var imageInfoURL = 'admin/ajax/image?study_uid='+seriesData.studyUID+'&image='+seriesData.index;
					// Check Session
					wadoSession.checkTimeout();

					// Save the src of the "cover" image
					$.data(viewerDOM, 'src', seriesData.seriesImages[0]);
					// Get the study description
					studyDescription = ($('#studies').length == 0)
						? $('#studyDescription').text() 
						: $('#studies').find('option:selected').text();
					// Inject the "study" and "series" info
					$viewer.find('.seriesDescription').html(studyDescription + '<br />' +description);
					// Inject the current image order
					$viewer.find('.totalImages').html('1 out of '+seriesData.frames);

					// Show the imaging tools
					$('#toolImgs').show();

					// Load the information of the first image
					$.getJSON(imageInfoURL, ajax.imageInfoLoaded);
				},

				imageInfoLoaded: function(imageInfo) {
					// Save the Window Center and Window Width obtained
					$.data(viewerDOM, 'wCenter', imageInfo.wCenter);
					$.data(viewerDOM, 'wWidth', imageInfo.wWidth);
					// Save the default Window Center and Window Width
					$.data(viewerDOM, 'defaultWCenter', imageInfo.wCenter);
					$.data(viewerDOM, 'defaultWWidth', imageInfo.wWidth);
					// Save the spacing
					$.data(viewerDOM, 'xSpace', imageInfo.xSpace);
					$.data(viewerDOM, 'ySpace', imageInfo.ySpace);
					// Save total frames for series
					$.data(viewerDOM, 'total', seriesData.frames);
					// Save imgMeasure
					$.data(viewerDOM, 'imgMeasure', '');
					// Hide the panes
					$('.clickPanes, .paneHighlight').hide();
					// Get the HTML to be injected
					var img = wadoQueue.getImagesSource(0, 0, seriesData.frames, $viewer, 'html');

					// Inject the images
					$viewer.find('.images').html(img);
					// Update the rest of the images
					wadoViewer.update($viewer, seriesData.frames, -1, 'append');
					
					if (seriesData.frames == 1) {
						$viewer.find('.scrollee').hide();
					}
					else {
						$viewer.find('.scrollee').show();
						$viewer.find('.iscroll').height(Math.max(parseFloat((100/seriesData.frames), 10), 3).toFixed(3)+'%').css('top', 0);
					}

					// Update total loaded
					$.data(viewerDOM, 'loaded', 0);
					var today = new Date();
					$.data(viewerDOM, 'start', today.getTime());
					$viewer.find('.winlev').html('win:'+imageInfo.wWidth+'<br />lev:'+imageInfo.wCenter);
					
					
					$.ajax({
						  type: "POST",
						  url: "getThick.php",
						  data: { sid: $.data(viewerDOM,'series').seriesUID,  }
						}).done(function( msg ) {
							$.data(viewerDOM,'thick',msg);
							$viewer.find('.thick').html('Thickness:<br/>'+msg+'mm');
						});
						
						
					if (/^(CT|MR)$/.test(seriesData.modality))
					{
						// Show presets only if they are CT or MR
						$viewer.find('.preset span').show().text('Presets');
					}
					
					if ($viewer.hasClass('video'))
					{
						// Load as video
						$.data(viewerDOM, 'type', 'playback');
					}
					else
					{
						// Load as series
						$.data(viewerDOM, 'type', 'series');
					}
					
					// Save current viewer width for resize
					wadoViewer.updateDimensions($viewer);
					updateDisplayViewer($viewer);
					setTimeout(function() { window.scrollTo(0, 1); }, 100);
				}
			};

			//if ($.data(viewerDOM, 'series') == 'undefined') {
				// Get metadata info about the series
				$.getJSON($anchor.attr('href'), function(data) {ajax.scriptLoaded(data, viewerDOM);});
			//} else {
				// Call the method directly using the data from cache
			//	ajax.scriptLoaded($.data(viewerDOM, 'series'));
			//}
		}
	};

	// Init the ui
	ui.init();
	
	// Expose wadoDashboard to the window object (it is executed as well)
	window.wadoDashboard = wadoDashboard();

})(jQuery, window);