// DECLARE VARIABLES

// Img width/height
//var Width;
//var Height;

// Panning Variables
var xOffset = 0;
var yOffset = 0;

var zParameters_0;
var wParameters_0;
var dParameters_0;
var image_0 = 0;
var iLeftFore_0 = 0;
var iTopFore_0 = 0;
var iLeft_0 = 0;
var iTop_0 = 0;
var iBottomFore = 0;
var iRightFore = 0;
var iRot = 0;
var z;

// Zooming Variables
var scaleMin = 0;
var scaleMax = 5;
var zFactor = 1.5;
var x0 = 0;
var y0 = 0;
var x1 = 1;
var y1 = 1;

// Windowing Variables
var wFactor;
var cFactor;

// Wado Variables
/*var zParameters = '';
var wParameters = '';*/


function PreviousImage()
{
	if (image > 0)
	{
		image--;
		GetNewImage();
	}
}
function NextImage()
{
	if (image < frames-1)
	{
		image++;
		GetNewImage();
	}
}
function GetNewImage()
{
	// This check ensures that the "loading" message does does appear for every touchmove event
	if (image_0 != imageURL[image]+dParameters+zParameters+wParameters)
	{
		$(foreImg).hide();
		//$(foreImg).attr('src', 'media/img/blank.jpg');
		$(loading).show();
		//images[image].src = imageURL[image]+'&rows='+wadoHeight+'&columns='+wadoWidth+zParameters+wParameters;
		images[image].src = imageURL[image]+dParameters+zParameters+wParameters;
		$(foreImg).attr('src', images[image].src);
		$(backImg).attr('src', images[image].src);
		image_0 = imageURL[image]+dParameters+zParameters+wParameters;
	}
}
function GetForeImage()
{
	$(foreImg).hide();
	//$(foreImg).attr('src', 'media/img/blank.jpg');
	$(loading).show();
	//$(foreDiv).css('left', iLeftFore + 'px').css('top', iTopFore + 'px');
	//images[image].src = imageURL[image]+'&rows='+wadoHeight+'&columns='+wadoWidth+zParameters+wParameters;
	images[image].src = imageURL[image]+dParameters+zParameters+wParameters;
	$(foreImg).attr('src', images[image].src);
	//alert(images[image].src);
	//alert(dParameters+zParameters+wParameters);
	//alert('iLeftFore: '+iLeftFore+', iTopFore: '+iTopFore);
	//alert('dx='+(x1-x0)+', dy='+(y1-y0)+', iTF='+iTopFore+', iLF='+iLeftFore+', '+dParameters+zParameters+wParameters);
}

function roundNumber(num, dec) {
	var result = Math.round(num*Math.pow(10,dec))/Math.pow(10,dec);
	return result;
}

function setZoom()
{
	// Determine x0, y0, x1, y1 as percentages
	// New Reference is based on iLeft and iTop of full sized backImg
	
	if (iTop > 0)
		y0 = 0;
	else
		y0 = -iTop/Height/scale;
	if (y0 < 0)
		y0 = 0;
	if ((iTop + Height*scale) < wadoHeight)
		y1 = 1;
	else
		y1 = (wadoHeight - iTop)/Height/scale;
	if (y1 > 1)
		y1 = 1;
	
	if (iLeft > 0)
		x0 = 0;
	else
		x0 = -iLeft/Width/scale;
	if (x0 < 0)
		x0 = 0;
	if ((iLeft + Width*scale) < wadoWidth)
		x1 = 1;
	else
		x1 = (wadoWidth - iLeft)/Width/scale;
	if (x1 > 1)
		x1 = 1;
	
	//alert('y0: '+y0+', y1: '+y1+', iLeft: '+iLeft+', iTop: '+iTop);
	
	zParameters = '&region='+roundNumber(x0,5)+','+roundNumber(y0,5)+','+roundNumber(x1,5)+','+roundNumber(y1,5);
	
	if (iTop < 0)
	{
		iTopFore = 0;
	}
	else if (iTop < wadoHeight)
	{
		iTopFore = Math.round(iTop);
	}
	else
	{
		iTopFore = wadoHeight;
	}
	iBottomFore = iTop + scale*Height;
	if (iBottomFore < 0)
	{
		iBottomFore = 0;
	}
	else if (iBottomFore < wadoHeight)
	{
		iBottomFore = Math.round(iBottomFore);
	}
	else
	{
		iBottomFore = wadoHeight;
	}
	
	if (iLeft < 0)
	{
		iLeftFore = 0;
	}
	else if (iLeft < wadoWidth)
	{
		iLeftFore = Math.round(iLeft);
	}
	else
	{
		iLeftFore = wadoWidth;
	}
	iRightFore = iLeft + scale*Width;
	if (iRightFore < 0)
	{
		iRightFore = 0;
	}
	else if (iRightFore < wadoWidth)
	{
		iRightFore = Math.round(iRightFore);
	}
	else
	{
		iRightFore = wadoWidth;
	}
	rows = iBottomFore - iTopFore;
	columns = iRightFore - iLeftFore;
	dParameters = '&rows='+rows+'&columns='+columns;
	
	$(foreDiv).css('left', iLeftFore + 'px').css('top', iTopFore + 'px');
	//alert('iLeftFore: '+$(foreImg).css('left')+', iTopFore: '+$(foreImg).css('top'));
	//TODO: if zooming less than scaleMin, window size needs to change
	//alert(x0+', '+x1+', '+y0+', '+y1);
	
}
function setWindow()
{
	if (wWindow != 0)
		wParameters = '&windowCenter='+cWindow+'&windowWidth='+wWindow;
}
function changeAction()
{
	if ($(action).val() == 'zoom')
	{
		$(backImg).attr('src', imageURL[image]+wParameters);
		$(backImg).width(scale*Width);
		$(backDiv).css('left', iLeft + 'px').css('top', iTop + 'px');
		//alert($(backImg).width());
	}
	else
	{
		$(backImg).attr('src', $(foreImg).attr('src'));
		$(backImg).width($(foreImg).width());
		$(backDiv).css('left', iLeftFore + 'px').css('top', iTopFore + 'px');
	}
	
	if ($(action).val() != 'navigate')
	{
		hideAddressBar();
	}
	else
	{
		if (frames > 1 && !confirm("Apply these settings to entire series?"))
		{
			// No
			x0 = 0;
			x1 = 1;
			y0 = 0;
			y1 = 1;
			//iTop = wadoHeight/2 - scale*Height*0.5;
			//iLeft = wadoWidth/2 - scale*Width*0.5;
			zParameters = '';
			
			rows = wadoHeight;
			columns = wadoWidth;
			dParameters = '&rows='+rows+'&columns='+columns;
			
			wParameters = '';
		}
		else
		{
			// Yes
			//UpdateCache();
		}
	}
}
function getImageInfo()
{
	/*// Determine the image info
	$.get("image_info.php", {study: studyUID, image: (index+image)}, function(data) {
		var array = data.split(",");
		Width   = parseInt(array[0]);
		Height  = parseInt(array[1]);
		
		if (wWindow == 0) {
			cWindow = parseInt((array[2] == '' ) ? 0 : array[2]);
			wWindow = parseInt((array[3] == '' ) ? 0 : array[3]);
		}
		
		cWindowArray[0] = parseInt((array[2] == '' ) ? 0 : array[2]);
		wWindowArray[0] = parseInt((array[3] == '' ) ? 0 : array[3]);
		array = null;
	});*/
}

function NewOrientation()
{
	window.top.scrollTo(0,1);
	columns = $(wadoCell).width();
	rows    = $(wadoCell).height();
	if (mobilemac)
	{
		rows += 62; //add the height of the top URL bar
		$(wadoCell).css('height', rows+'px');
	}
	wadoWidth     = columns;
	wadoHeight    = rows;
	//alert(columns+' x '+rows);
	setZoom();
	getNewImage();
	
	/*if ($(action).val() != 'navigate') {
		wadoWidth     = $(wadoCell).width();
		wadoHeight    = $(wadoCell).height();
		setZoom();
		//$(foreImg).attr('src', 'img/blank.jpg');
		GetNewImage();
	} else {
		UpdateCache();
	}*/
}

function UpdateCache()
{
	// Refresh page with specific parameters for image number, windowing, and zoom
	if (wWindow == 0)
		wParameters = '&windowCenter=0&windowWidth=0';
	var url = ""+window.location+"";
	url = url.indexOf("&image=") > -1 ? url.substring(0,url.indexOf("&image=")) : url;
	window.location = url+'&image='+image+'&scale='+scale+'&iLeft='+iLeft+'&iTop='+iTop+zParameters+wParameters;
	url = null;
}

var TouchStateOn = false;
var MoveStateOn = false;
var GestureStateOn = false;
var navigateImage;
var TouchStartX;
var TouchStartY;
var windowingCenter;
var windowingWidth;

var currentTouch = 'pan';

$.fn.navigate = function() {
	this.each(function(){
	
		// Touch events
		this.ontouchstart = touchstart;
		this.ontouchmove = touchmove;
		this.ontouchend = touchend;
		this.ongesturestart = gesturestart;
		this.ongesturechange = gesturechange;
		this.ongestureend = gestureend;
		
		this.onmousedown = touchstart;
		this.onmousemove = touchmove;
		this.onmouseup = touchend;
		
		$('.navigate').each(function() {
			$(this).get(0).ontouchmove = touchScrollMove;
		});
		$('#tooling').click(clickTooling);
		

		function MouseEvent(e)
		{
			this.e = e ? e : window.event; 
			this.source = e.target ? e.target : e.srcElement;
			this.x = this.e.pageX ? this.e.pageX : this.e.clientX;
			this.y = this.e.pageY ? this.e.pageY : this.e.clientY;
			if (window.event)
			{
				this.x = (document.body.scrollLeft) ? this.x + document.body.scrollLeft : this.x;
				this.y = (document.body.scrollTop) ? this.y + document.body.scrollTop : this.y;
			}
		}
		
		function navigating(x, y)
		{
			image = navigateImage - Math.ceil(frames/30)*roundNumber((TouchStartX - x + TouchStartY - y) / 20, 0);
			getNavigateImage();
		}
		function navigatingSingle()
		{
			//alert('x: '+TouchStartX+', y: '+TouchStartY);
			if (TouchStartX/wadoWidth + TouchStartY/wadoHeight < 1)
				image--;
			else
				image++;
			getNavigateImage();
		}
		function getNavigateImage()
		{
			// Alerts can be added here to tell the user that they are at the ends of the series
			if (image < 0)
				image = 0;
			else if (image > frames-1)
				image = frames-1;
			$(infoImg).text('Image '+(image+1)+'/'+frames);
			GetNewImage();
		}
		function zoomSingle()
		{
			// interpret zoom command
			var delta;
			if (TouchStartX/wadoWidth + TouchStartY/wadoHeight < 1)
				delta = 1/zFactor;
			else
				delta = zFactor;
			iLeft = Math.round((iLeft - wadoWidth/2)*delta + wadoWidth/2);
			iTop = Math.round((iTop - wadoHeight/2)*delta + wadoHeight/2);
			scale *= delta;
			$(infoImg).text('Zoom: '+Math.round(scale*100)+'%');
			
			// resize background image and center
			$(backDiv).css('left', iLeft + 'px').css('top', iTop + 'px');
			$(backImg).width(Width*scale);
			getZoomImage();
		}
		function getZoomImage()
		{
			if (iTop > -scale*Height && iTop < wadoHeight && iLeft > -scale*Width && iLeft < wadoWidth)
			{
				setZoom();
				GetForeImage();
			}
		}
		function zooming(delta)
		{
			//$(foreImg).attr('src', 'img/blank.jpg');
			// Perform live zoom
			iLeft = Math.round((iLeft_0 - wadoWidth/2)*delta + wadoWidth/2);
			iTop = Math.round((iTop_0 - wadoHeight/2)*delta + wadoHeight/2);
			scale = scale_0*delta;
			$(infoImg).text('Zoom: '+Math.round(scale*100)+'%');
			
			// resize background image and center
			$(backDiv).css('left', iLeft + 'px').css('top', iTop + 'px');
			$(backImg).width(Width*scale);
		}
		function zoom(delta)
		{
			getZoomImage();
		}
		function panning(TouchX, TouchY)
		{
			
			iLeft = iLeft_0 - TouchStartX + TouchX;
			iTop = iTop_0 - TouchStartY + TouchY;
			iLeftFore = iLeftFore_0 - TouchStartX + TouchX;
			iTopFore = iTopFore_0 - TouchStartY + TouchY;
			$(foreDiv).css('left', (iLeftFore) + 'px').css('top', (iTopFore) + 'px');
			$(backDiv).css('left', iLeft + 'px').css('top', iTop + 'px');
		}
		function pan()
		{
			getZoomImage();
		}
		function windowing(x, y)
		{
			cWindow = windowingCenter + roundNumber((y - TouchStartY) * cFactor, 0);
			wWindow = windowingWidth - roundNumber((x - TouchStartX) * wFactor, 0);
			if (wWindow < 1)
				wWindow = 1;
			setWindow();
			$(infoImg).text('Window/Level: '+wWindow+'/'+cWindow);
			//GetNewImage();
		}
		function window()
		{
			//$(foreImg).attr('src', 'media/img/blank.jpg');
			GetNewImage();
		}
		function presetting(rot)
		{
			// Enforce up to 180 deg
			if (rot > 180)
				rot = 360 - rot;
			rot = Math.abs(rot) + iRot - Math.floor((Math.abs(rot)+iRot)/360)*360;
			//$(infoImg).text('Preset: '+rot+', iRot: '+iRot);
			z = Math.floor((rot)/(90/presetsLength) - Math.floor((rot)/(90/presetsLength)/presetsLength) * presetsLength);
			$(infoImg).text('Preset: '+presets[z]);
		}
		function preset()
		{
			iRot = z*(90/presetsLength);
			wParameters = '&windowCenter='+cWindowArray[z]+'&windowWidth='+wWindowArray[z];
			//$(foreImg).attr('src', 'media/img/blank.jpg');
			cWindow = cWindowArray[z];
			wWindow = wWindowArray[z];
			GetNewImage();
		}
		
		function clickTooling(e) {
			if ($(this).text() == 'W/L') {
				$(this).text('Pan');
				currentTouch = 'windowing';
			}
			else {
				$(this).text('W/L');
				currentTouch = 'pan';
			}
			e.preventDefault();
			e.stopPropagation();
			return false;
		}
/*		
		  function touchScrollStart( e ) {
			var me = new MouseEvent(e.touches[0]);
			TouchStateOn = true;
			navigateImage = image;
			windowingCenter = cWindow;
			windowingWidth = wWindow;
			TouchStartX = me.x;
			TouchStartY = me.y;
			$(infoImg).text('Image '+(image+1)+'/'+frames);
			me = null;
			//var box = document.getElementById('vNavigate');
			e.preventDefault();
			return false;
		  }*/

		function touchScrollMove( e ) {
			if (TouchStateOn == true)
			{
				var me = new MouseEvent(e.touches[0]);
				if (e.touches.length == 1)
				{
					MoveStateOn = true;
					//switch ($(action).val())
					//{
						//case 'navigate':
							navigating(me.x, me.y);
						//	break;
						//case 'zoom':
						//	panning(me.x, me.y);
						//	break;
						//case 'windowing':
						//	windowing(me.x, me.y);
						//	break;
					//}
				}
				me = null;
			}
			e.preventDefault();
			e.stopPropagation();
			return false;
		}		  
    	  // Manage touch events
		function touchstart(e){
			var me = new MouseEvent(e.touches[0]);
			TouchStateOn = true;
			navigateImage = image;
			windowingCenter = cWindow;
			windowingWidth = wWindow;
			TouchStartX = me.x;
			TouchStartY = me.y;
			me = null;
			switch (currentTouch)
			{
				//case 'navigate':
				//	navigating(me.x, me.y);
				//	break;
				case 'pan':
					$(infoImg).text('');
				break;
				case 'windowing':
					$(infoImg).text('Window/Level: '+wWindow+'/'+cWindow);
				break;
			}
			/*if ($(action).val() == 'navigate') {
				$(infoImg).text('Image '+(image+1)+'/'+frames);
				//$(infoImg).show();
			} else if ($(action).val() == 'windowing') {
				$(infoImg).text('Window/Level: '+wWindow+'/'+cWindow);
				//$(infoImg).show();
			} else if ($(action).val() == 'zoom') {*/
				iLeft_0 = iLeft;
				iTop_0 = iTop;
				iLeftFore_0 = iLeftFore;
				iTopFore_0 = iTopFore;
				//$(infoImg).text('Zoom: '+Math.round(scale*100)+'%');
			//}
			$(infoImg).show();
			return false;
		}
		function touchmove(e){
			if (TouchStateOn == true)
			{
				var me = new MouseEvent(e.touches[0]);
				if (e.touches.length == 1)
				{
					MoveStateOn = true;
					switch (currentTouch)
					{
						//case 'navigate':
						//	navigating(me.x, me.y);
						//	break;
						case 'pan':
							panning(me.x, me.y);
						break;
						case 'windowing':
							windowing(me.x, me.y);
						break;
					}
					
					//switch ($(action).val())
					//{
						//case 'navigate':
						//	navigating(me.x, me.y);
						//	break;
						//case 'zoom':
						//	panning(me.x, me.y);
						//	break;
						//case 'windowing':
						//	windowing(me.x, me.y);
						//	break;
					//}
				}
				me = null;
			}
			return false;
		}
		function touchend(){
			if (TouchStateOn == true)
			{
				if (MoveStateOn == false && GestureStateOn == false) {
					//if ($(action).val() == 'navigate') {
					//	navigatingSingle();
					//} else if ($(action).val() == 'zoom') {
					//	zoomSingle();
					//}
				} else {
					//if ($(action).val() == 'zoom') {
						pan();
					//} else if ($(action).val() == 'windowing') {
					//	window();
					//}
				}
			}
			$(infoImg).fadeOut('fast');
			TouchStateOn = false;
			MoveStateOn = false;
			GestureStateOn = false;
			return false;
		}
		function gesturestart(e){
			GestureStateOn = true;
			//if ($(action).val() == 'zoom') {
				$(foreImg).hide();
				scale_0 = scale;
				iLeft_0 = iLeft;
				iTop_0 = iTop;
			//}
			return false;
		}
		function gesturechange(e){
			//if ($(action).val() == 'zoom') {
				zooming(e.scale);
			/*} else if ($(action).val() == 'windowing') {
				//Loop through all the choices (specific to that modality)
				presetting(e.rotation);
			}*/
			return false;
		}
		function gestureend(e){
			//if ($(action).val() == 'zoom') {
				$(foreImg).show();
				zoom(e.scale);
			/*} else if ($(action).val() == 'windowing') {
				preset();
			}*/
			return false;
		}
	});
};

$(document).ready(function(){
	// Windowing Variables
	wFactor = 4;
	cFactor = 4;

	//$(foreImg).attr('src', 'media/img/blank.jpg');
	$(wadoCell).navigate();
	getImageInfo();
	window.top.scrollTo(0,1);
});

