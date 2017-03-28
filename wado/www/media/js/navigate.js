// DECLARE VARIABLES
var wadoCell;
var foreDiv;
var foreImg;

// wadoBox width/height
var wadoWidth;
var wadoHeight;
// Image full-size dimensions (from hidden fields)
var imgWidth;
var imgHeight;
// Image window center/width (from hidden fields)
var windowWidth;
var windowCenter;
// Object information (from hidden fields)
var studyUID;
var seriesUID;
var objectUID;
// backImg width/height
var Height;
var Width;

// Panning Variables
var msDropLeftX = 0;
var msDropLeftY = 0;

// Zooming Variables
var scaleMin;
var scaleMax = 1;
var scale;
var zFactor = 1.5;
var x0 = 0;
var y0 = 0;
var x1 = 1;
var y1 = 1;

// Windowing Variables
var wWindow;
var cWindow;
var wFactor;
var cFactor;


// DECLARE FUNCTIONS

function windowShift(wShift, cShift)
{
	wWindow += wShift*wFactor;
	cWindow += cShift*cFactor;
	GetNewImage();
}
function panShift(vShift, hShift)
{
	// shift in view
	
	msDropLeftX += hShift*(wadoWidth/3);
	if (msDropLeftX > 0)
		msDropLeftX = 0;
	else if (msDropLeftX < -Width+wadoWidth)
		msDropLeftX = -Width+wadoWidth;
	
	
	msDropLeftY += vShift*(wadoHeight/3);
	if (msDropLeftY > 0)
		msDropLeftY = 0;
	else if (msDropLeftY < -Height+wadoHeight)
		msDropLeftY = -Height+wadoHeight;
	
	GetPanOffset();
	GetNewImage();
}
function zoomIn()
{
	if (scale < scaleMax)
	{
		scale *= zFactor;
		if (scale >= scaleMax)
			scale = scaleMax;
		GetPanOffset();
		GetNewImage();
	}
}
function zoomOut()
{
	if (scale > scaleMin)
	{
		scale /= zFactor;
		if (scale < scaleMin)
			scale = scaleMin;
		GetPanOffset();
		GetNewImage();
	}
}


function GetPanOffset()
{
	// preserve the location of the image for zooming
	var xRef = (msDropLeftX-wadoWidth/2)/Width;
	var yRef = (msDropLeftY-wadoHeight/2)/Height;
	
	Width = scale*imgWidth;
	Height = scale*imgHeight;
	
	if (Width <= wadoWidth)
	{
		msDropLeftX = 0;
	}
	else
	{
		msDropLeftX = (xRef*Width)+wadoWidth/2;
		//fix values outside the valid range for zooming out
		if (msDropLeftX > 0)
			msDropLeftX = 0;
		else if (-msDropLeftX+wadoWidth > Width)
			msDropLeftX = -Width+wadoWidth;
	}
	
	if (Height <= wadoHeight)
	{
		msDropLeftY = 0;
	}
	else
	{
		msDropLeftY = (yRef*Height)+wadoHeight/2;
		//fix offset values outside the valid range for zooming out
		if (msDropLeftY > 0)
			msDropLeftY = 0;
		else if (-msDropLeftY+wadoHeight > Height)
			msDropLeftY = -Height+wadoHeight;
	}
}

function GetNewImage()
{
	x0 = 0;
	x1 = (wadoWidth <= Width) ? wadoWidth/Width : 1;
	y0 = 0;
	y1 = (wadoHeight <= Height) ? wadoHeight/Height : 1;
	
	var xOffset = (msDropLeftX == 0) ? 0 : -msDropLeftX/Width;
	var yOffset = (msDropLeftY == 0) ? 0 : -msDropLeftY/Height;
	//incorporate panning offsets (a percentage value)
	x0 += xOffset;
	x1 += xOffset;
	y0 += yOffset;
	y1 += yOffset;
			
	var columns = (wadoWidth <= Width) ? wadoWidth : Width;
	var rows = (wadoHeight <= Height) ? wadoHeight : Height;
	
	var link = '../wado/wado.php?requestType=WADO&studyUID='+studyUID+'&seriesUID='+seriesUID+'&objectUID='+objectUID+'&rows='+roundNumber(rows,0)+'&columns='+roundNumber(columns,0)+'&region='+roundNumber(x0,4)+','+roundNumber(y0,4)+','+roundNumber(x1,4)+','+roundNumber(y1,4);
	link += isNaN(cWindow) ? '' : '&windowCenter='+roundNumber(cWindow,0);
	link += isNaN(wWindow) ? '' : '&windowWidth='+roundNumber(wWindow,0);
	
	$(foreImg).attr('src', link);
}

function roundNumber(num, dec) {
	var result = Math.round(num*Math.pow(10,dec))/Math.pow(10,dec);
	return result;
}


$(document).ready(function(){
	
	wadoCell     = 'td#wadoCell';
	foreDiv      = 'div.foreDiv';
	foreImg      = 'img.foreImg';
	
	// wadoCell width/height
	wadoWidth     = $(wadoCell).width();
	wadoHeight    = $(wadoCell).height();
	// Image full-size dimensions (from hidden fields)
	imgWidth     = parseInt(document.getElementById('columns').value);
	imgHeight    = parseInt(document.getElementById('rows').value);
	// Object information (from hidden fields)
	studyUID  = document.getElementById('studyUID').value;
	seriesUID = document.getElementById('seriesUID').value;
	objectUID  = document.getElementById('objectUID').value;
	
	// Zooming Variables
	scaleMin     = ((wadoHeight/imgHeight) < (wadoWidth/imgWidth)) ? (wadoHeight/imgHeight) : (wadoWidth/imgWidth); //the scale to fit the entire image into the wadoBox
	scaleMin     = (scaleMin <= 1) ? scaleMin : 1; //set the maximum value for scaleMin to 1 (full size image)
	scale        = scaleMin;
	
	// Windowing Variables
	wWindow      = parseInt(document.getElementById('windowWidth').value);
	cWindow      = parseInt(document.getElementById('windowCenter').value);
	wFactor      = wWindow*0.05;
	cFactor      = cWindow*0.05
	
	// backImg width/height
	Height       = scale*imgHeight;
	Width        = scale*imgWidth;
	
	GetNewImage();
});