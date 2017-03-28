(function( $, window ) {

	var queues = {
			realtime: 0, // For current/Image W/L [Highest]
			live: 0, // For cover images
			flash: 0 // For update [Lowest]
		},
		qByViewers = {},
		//*processing = [],
		processing = 0,
		idInterval = null,
		count = 0,
		processTimeout = {
			realtime: 0,
			live: 1,
			flash: 1
		},
		//loading = '',
		retries = 0,
		currentRequest,
		paneIndex = -1,
		totalQueues = 0,
		priorityPane = '',
		connections = window.maxConnectionsPerServer || 6,
		hasInit = false;
		blank = 'media/img/b.gif';

	// Our object here
	var queue = {

		process: function() {
			var currentQueue = 'none';
			//*$('#dbg').html('RT: '+queues['realtime']+' L: '+queues['live']+' F: '+queues['flash']+' P: '+processing.length);
			//$('#dbg').html('RT: '+queues['realtime']+' L: '+queues['live']+' F: '+queues['flash']+' P: '+processing).show();
			for(var name in queues) {
				if (queues[name] > 0) {
					currentQueue = name;
					break;
				}
			}
			//console.log('Processing!! RT: '+queues['realtime']+' L: '+queues['live']+' F: '+queues['flash']+' P: '+processing.length+' queue:'+currentQueue); 

			if (currentQueue == 'none') {
				// Nothing to process.
				wadoQueue.reset();
				//wadoQueue.start(10);
				//////////console.log('nada');
				//id = setTimeout(queue.process, 20);
				return false;
			}

			if (priorityPane != '' && qByViewers[priorityPane]['queues'][currentQueue].length > 0) {
				paneName = priorityPane;
			}
			else {
				priorityPane = '';
				do {
					paneIndex = (paneIndex + 1) % wadoDashboard.panes.length;
					paneName  = wadoDashboard.panes[paneIndex];
				} while (qByViewers[paneName]['queues'][currentQueue].length == 0);
			}

			//$('#dbg').append(' pName: '+paneName+' qName: '+currentQueue+' load: '+loading);
			//////////console.log(' pName: '+paneName+' qName: '+currentQueue+' load: '+loading);

			////////////console.log(paneName+' '+currentQueue+' '+qByViewers[paneName][currentQueue].length+' '+queues[currentQueue]);
			var element = qByViewers[paneName]['queues'][currentQueue][0];

			////////////console.log('queue '+currentQueue+' loading '+loading+' '+queues['realtime'].length+' processing '+processing.length);
			//if ((currentQueue == 'realtime' && loading != '') || element.src == null) {
			/*if (currentQueue == 'realtime') {
				//////////////console.log('clearing');
				//$('#dbg').append(' RTR: '+retries);
				//////////console.log('RTR: '+retries);
				retries++;
				if (retries == 3) {
					//loading = '';
					retries = 0;
				}
				// Reset "live" queue if there is an image being processed
				//id = setTimeout(queue.process, 1);
				wadoQueue.start();
				return false;
			}*/

			//*if (processing.length >= connections) {// && currentQueue != 'media/img/a.gif') {
			if (processing >= connections) {
				var total = queues['realtime']+queues['live']+queues['flash'];
				//console.log('totalQ: '+totalQueues+' total: '+total+' retries:'+retries);
				if (totalQueues != total) {
					totalQueues = total;
					retries = 0;
				} else {
					retries++;
				}
				
				if (retries == 10) {
					processing--;
					wadoQueue.reset();
				}

				// 4 items in queue, retry
				/*if (id != null)
				{
					clearTimeout(id);
				}
				id = setTimeout(queue.process, 1);*/
				//console.log('max reached!');
				wadoQueue.start();
				return false;
			}
			
			//////////console.log('loading '+loading+' name '+currentQueue);
			
			
			//////////console.log('queueName '+currentQueue+' got image with id '+element.imgDOM.id);
			//if (element.imgDOM.id == loading || loading != '') {
			//	return false;
			//}
			// Remove from queue
			//queues[currentQueue].shift();
			
			////////////console.log(element.src);
			/*
			element.newimage = new Image(1,1);
			
			element.newimage.onload = function() {
				var pName = paneName;
				//var source = element.newimage.src;
				//////console.log('finish loading '+element.imgDOM.id+' with src '+element.newimage.src);
				////////////console.log('load '+currentQueue);
				if (element.newimage.src.indexOf('media/img/b.gif') == -1 && element.newimage.src.indexOf('media/img/a.gif') == -1) {
					//element.imgDOM.lowsrc = element.imgDOM.src;
					element.imgDOM.src = element.newimage.src;

					// Remove entry from processing
					// wadoQueue.flush('realtime');
					//qByViewers[pName]['ids'][element.imgDOM.id] = null;
					$(element.imgDOM).removeClass('dcmQueued').addClass('dcmReady dcmLoaded');
					
					processing.shift();
					loading = '';
					//element.newimage = null;

					wadoQueue.reset();
					wadoQueue.start();
					////////console.log('loaded '+element.imgDOM.id);
				}
				// element.image = null;
			};
			
			element.newimage.onerror = function() {
				////console.log('onerror');
				////console.log(iter(element.newimage));
				alert(iter(element.newimage));
				element.newimage.src = 'media/img/a.gif';
				// Putting back to the queue if there is an error
				qByViewers[paneName]['queues'][currentQueue].unshift(element);
				//queues[currentQueue].unshift(element);
			};
			*/
			//console.log('adding to processing:'+element.src);
			element.imgDOM.src = element.src;
			////console.log('Loading with src '+element.src+' from queue: '+currentQueue);
			//loading = element.imgDOM.id;
			////////console.log('loading '+element.imgDOM.id);
			//element.newimage.src = element.src;
			//*processing.push({element:element, pane: paneName, queue:currentQueue});
			processing++;
			qByViewers[paneName]['queues'][currentQueue].shift();
			queues[currentQueue]--;

			//if (id != null)
			//{
			//	clearTimeout(id);
			//}
			// Sleeping for some time
			////////////console.log('timeout '+processTimeout[currentQueue]);
			//id = setTimeout(queue.process, processTimeout[currentQueue]);
			wadoQueue.reset();
			//////////console.log('timing out '+processTimeout[currentQueue]);
			wadoQueue.start(processTimeout[currentQueue]);
		},
		
		setPriorityPane: function(paneName) {
			priorityPane = paneName;
			return this;
		},

		reset: function() {
			//////////console.log('value? '+idInterval);
			if (typeof idInterval == 'number') {
				//////////console.log('clearing '+idInterval);
				clearTimeout(idInterval);
				idInterval = null;
				//////////console.log('clearing '+idInterval+' count '+count);
			}
			return this;
			//////////console.log('resetted '+idInterval);
		},
		
		/*
		append: function(image, source, queueName, viewerName) {
			////////////////console.log('adding to queue '+queueName+' current length '+queues[queueName].length+' with src '+source);
			////////////console.log('add '+queueName+' '+source);
			////////console.log('image id '+image.id+' '+queueName+' '+queues['realtime']+' '+qByViewers[viewerName]['ids'][image.id]+' loading '+loading);
			
			if (! ((queueName == 'realtime' && queues['realtime'] > 0) 
			//	|| (typeof qByViewers[viewerName]['ids'][image.id] == 'number' && queueName != 'live')) return false;
				|| (queueName == 'flash' && $(image).hasClass('dcmQueued'))))
			{
				
				$(image).addClass('dcmQueued');
				//if (queueName == 'realtime') wadoQueue.halt();
				////////////console.log('made it here. add '+queueName+' '+source+' '+viewerName+' '+queues['realtime'].length);
				qByViewers[viewerName]['queues'][queueName].push({imgDOM:image, src:source});
				//queues[queueName].push({imgDOM:image, src:source});
				queues[queueName]++;
				////////console.log('size '+queueName+' '+viewerName+' '+qByViewers[viewerName]['ids'][image.id]);
				//qByViewers[viewerName]['ids'][image.id] = 1;
				////////console.log('after '+qByViewers[viewerName]['ids'][image.id]);
			}
			return this;
		},*/
	
		prepend: function(image, source, queueName, viewerName) {
			wadoQueue.add(image, source, queueName, viewerName, 'prepend');
			return this;
		},
		
		append: function(image, source, queueName, viewerName) {
			wadoQueue.add(image, source, queueName, viewerName, 'append');
			return this;
		},

		add: function(image, source, queueName, viewerName, mode) {
			////////////////console.log('adding to queue '+queueName+' current length '+queues[queueName].length+' with src '+source);
			////////////console.log('add '+queueName+' '+source);
			//////console.log('mode: '+mode+' id: '+image.id+' queue: '+queueName+' realtime: '+queues['realtime']+' loading: '+loading);

			//if (! ((queueName == 'realtime' && queues['realtime'] > 0) 
			//	|| (typeof qByViewers[viewerName]['ids'][image.id] == 'number' && queueName != 'live')) return false;
			//	|| (queueName == 'flash' && $(image).hasClass('dcmQueued'))))
			if (queueName == 'realtime') {
				if (queues['realtime'] > 0) return this;
				// It is a realtime, if we have one or zero we need to put a new one here
				wadoQueue.flush('realtime');
				$(image).addClass('dcmQueued').removeClass('dcmReady');
				qByViewers[viewerName]['queues']['realtime'][0] = {imgDOM:image, src:source};
				queues['realtime']++;
				//////console.log('Updating realtime '+queueName+' from: '+source+' viewer: '+viewerName+' RT: '+queues['realtime']);
				//////console.log('RT: '+queues['realtime']+' L: '+queues['live']+' F: '+queues['flash']+' P: '+processing.length);
				
				return this;
			}
			
			if (queueName == 'live' || $(image).hasClass('dcmReady')) {
				// It is either a live entry (guaranteed to be queued) or a "flash" not queued already
				$(image).addClass('dcmQueued').removeClass('dcmReady');
				//if (queueName == 'realtime') wadoQueue.halt();
				if (mode == 'prepend') {
					qByViewers[viewerName]['queues'][queueName].unshift({imgDOM:image, src:source});
				}
				else {
					qByViewers[viewerName]['queues'][queueName].push({imgDOM:image, src:source});
				}
				//queues[queueName].push({imgDOM:image, src:source});
				queues[queueName]++;
				//////console.log('made it here. add '+queueName+' from: '+source+' viewer: '+viewerName+' RT: '+queues['realtime']);
				//////console.log('RT: '+queues['realtime']+' L: '+queues['live']+' F: '+queues['flash']+' P: '+processing.length);
				////////console.log('size '+queueName+' '+viewerName+' '+qByViewers[viewerName]['ids'][image.id]);
				//qByViewers[viewerName]['ids'][image.id] = 1;
				////////console.log('after '+qByViewers[viewerName]['ids'][image.id]);
			}
			
			return this;
		},

		flush: function(queueName, viewerName) {
			////////////console.log('flush '+queueName);
			if (typeof viewerName != 'undefined') {
				qByViewers[viewerName]['queues'][queueName] = [];
			}
			queues[queueName] = 0;
			
			for(var i = 0; i < wadoDashboard.panes.length; i++) {
				//queues[queueName].push.apply(queues[queueName], qByViewers[wadoDashboard.panes[i]][queueName]);
				if (queueName == 'realtime') {
					qByViewers[wadoDashboard.panes[i]]['queues']['realtime'] = [];
				}
				//////console.log('queueName ................................'+queueName);
				queues[queueName] += qByViewers[wadoDashboard.panes[i]]['queues'][queueName].length;
			}
			return this;
		},
		
		purge: function(queueName, viewerName) {
			////////console.log('purge '+queueName+' '+viewerName+' '+qByViewers[viewerName]['ids'].length);
			//qByViewers[viewerName]['ids'] = {};
			//qByViewers[viewerName]['queues'][queueName] = [];
			// Remove the images that are queued and set them to ready
			$('#'+viewerName).find('.dcmQueued').removeClass('dcmQueued dcmLoaded').addClass('dcmReady');
			wadoQueue.flush(queueName, viewerName);
			////////console.log('size '+queues[queueName]);
			return this;
		},

		halt: function() {
			////////////console.log('haltinnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnng '+processing.length);
			processing = 0;
			/*
			for (var i = 0; i < processing.length;) {
				if (processing[i].queue != 'realtime') {
					// Remove elements that were not realtime
					//processing[i].element.newimage.src = 'media/img/a.gif';
					wadoQueue.prepend(processing[i].element.imgDOM, processing[i].element.imgDOM.src, processing[i].queue, processing[i].pane);
					processing[i].element.imgDOM.src = 'media/img/a.gif';
					// processing has 1 less value, length has been decreased
					processing.splice(i, 1);
					// this is to compensate with the i++;
				}
				else {
					i++;
				}
			}
			*/
			//processing = [];
			//loading = '';
			
			wadoQueue.reset();

			/*
			if(window.stop !== undefined)
			{
				 window.stop();
			}
			else if(document.execCommand !== undefined)
			{
				 document.execCommand("Stop", false);
			}*/
			return this;
		},

		init: function() {
			if ( ! hasInit) {
				hasInit = true;
				for(var i = 0; i < wadoDashboard.panes.length; i++) {
					qByViewers[wadoDashboard.panes[i]] = {};
					qByViewers[wadoDashboard.panes[i]]['queues'] = {};
					//qByViewers[wadoDashboard.panes[i]]['ids'] = {};
					for(var queueName in queues) {
						//////console.log('init '+wadoDashboard.panes[i]+' '+queueName);
						qByViewers[wadoDashboard.panes[i]]['queues'][queueName] = [];
					}
				}
				wadoQueue.start();
			}
			return this;
		},
		
		start: function(tout) {
			tout = (typeof tout == 'undefined') ? 1 : tout;
			//console.log(' timeout '+tout+' idInterval: '+idInterval);
			if (typeof idInterval != 'number') {
				//idInterval = setInterval(queue.process, 1);
				idInterval = setTimeout(wadoQueue.process, tout);
			}
			return this;
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
			for (var i = start; i < total; i++)
			{
				// First image is active. Show it!
				imgClass = (i == current)? 'activeImage' : 'none';
				// Values to calculate: width, height, left, top and dimensions
				var w, h, l, t, d, dims;
				
				if (seriesData.ratio[i] <= (viewerW/viewerH))
				{
					// Calculate values for "portrait" case
					h = viewerH;
					w = parseInt(seriesData.ratio[i]*viewerH);
					l = (viewerW - w)/2;
					t = 0;
					d = '&rows='+h;
					//dims = 'height:'+h+'px;';
				}
				else
				{
					// Calculate values for "wide screen case"
					w = viewerW;
					h = parseInt(viewerW/seriesData.ratio[i]);
					l = 0;
					t = (viewerH - h)/2;
					d = '&columns='+w;
				}
				dims = 'width:'+w+'px;height:'+h+'px;';
				// For first 40 images show "real" image, for others, initialize it with "cover" image (bandwidth)
				// src = (i > 40) ? seriesResponse.seriesImages[0]+d : seriesResponse.seriesImages[i]+d;
				var server = servers[viewerId][i % servers[viewerId].length];
				// Get the base url
				var url    = seriesData.seriesImages[i];
				url = server+shared_path+url;
				// Set the proper Window Center and Width
				src = url+'&windowCenter='+wC+'&windowWidth='+wW+'&columns='+w;
				//src = src+'&windowCenter='+wC+'&windowWidth='+wW+'&rows='+h;
				
				data[data.length] = {h : h, w: w, l: l, t: t, src: src, url: url, c: imgClass};

				//if (i > start) 
				//	src = blank;
				
				//var today = new Date();
				// Create id
				//var id = 'id'+count+today.getTime();
				
				// TODO: work on the queue
				// Create the image object
				img += '<span id="imageSpan'+count+'" class="abs viewerImg load '+imgClass+'" data-origratio="'+seriesData.ratio[i]+'" ';
				img += 'data-origw="'+seriesData.cols[i]+'" data-origh="'+seriesData.rows[i]+'" style="border:1px solid #222;left:'+l+'px;top:'+t+'px;'+dims+'">';
				img += '<img id="img'+count+'" lowsrc="'+blank+'" class="dcm dcmReady" width="100%" height="100%" src="'+blank+'" ';
				img += 'data-originalurl="'+url+'" data-origw="'+seriesData.cols[i]+'" data-origh="'+seriesData.rows[i]+'" ';
				img += 'onload="wadoQueue.updateCount(this, \''+$viewer.attr('id')+'\');"';
				img += 'onerror="wadoQueue.error(this, \''+$viewer.attr('id')+'\');" /></span>';
				//if (i == 2) alert(img);
				count++;
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

		updateCount: function(img, viewer) {
			////console.log(iter(img));
			if (typeof img.id == 'undefined') {
				// BIG ERROR, image is gone!!
				//console.log('updatecount errorrr');
				return;
			}
			//var $viewer = $('#'+viewer);
			//var viewerDOM = $viewer[0];
			//$viewer.find('.loading').show();

			//console.log('update: '+img.src+' id: '+img.id+' viewer: '+viewer+' proc len:'+processing.length);
			if (img.src.indexOf('media/img/b.gif') == -1 && img.src.indexOf('media/img/a.gif') == -1) {
				$(img).removeClass('dcmQueued').addClass('dcmReady dcmLoaded');
				//console.log('Good image, there are: '+processing.length);
				// Wrong assumption that the first one is gone.
				/*var temp = [];*/
				
				/*
				for (var i = 0; i < processing.length; ) {
					//console.log('len: '+processing.length+' i:'+i+' proc.src: '+processing[i].element.src+' src:'+img.src);
					if (processing[i].element.imgDOM.id == img.id) {
						processing.splice(i, 1);
					}
					else {
						i++;
					}
				}
				*/
				processing--;
				//console.log('after, length: '+processing.length);
				//processing = temp;
				//processing.shift();
				//loading = '';

				wadoQueue.reset();
				wadoQueue.start();
			}

			//var loaded = $(viewerDOM).find('.dcmLoaded').length;
			////console.log('loaded: '+loaded);
			//parseInt($.data(viewerDOM, 'loaded'));
			//loaded++;
			//$.data(viewerDOM, 'loaded', loaded);
			//var total = $.data(viewerDOM, 'total');
			
			//$viewer.find('.loading').text(parseInt(100*loaded/total)+'%');

			/*
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
			}*/
			//if (total <= loaded)
			//{
			//	wadoQueue.changeServer();
			//}
		},
		
		error: function(img, viewer) {
			console.log(iter(img));
			if (typeof img.id == 'undefined') {
				// BIG ERROR, image is gone!!
				console.log('errorrr');
				return;
			}
		},
		
	};

	window.wadoQueue = queue;
	window.wadoQueue.processing = processing;
	setInterval(wadoQueue.process, 100);
	
})(jQuery, window);

function throttle(fn, delay) {
  var timer = null;
  return function () {
	var context = this, args = arguments;
	clearTimeout(timer);
	timer = setTimeout(function () {
	  fn.apply(context, args);
	}, delay);
  };
}
function iter(elem) {
	var data = '';
	for (var i = 0; i < elem.attributes.length; i++) {
	  var attrib = elem.attributes[i];
	  data += attrib.name + ' = ' + attrib.value+'<br />';
	}
	return data;
}
