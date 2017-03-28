/*! 
 * jquery.event.drag - v 2.0.0 
 * Copyright (c) 2010 Three Dub Media - http://threedubmedia.com
 * Open Source MIT License - http://threedubmedia.com/code/license
 */
;(function(f){f.fn.drag=function(b,a,d){var e=typeof b=="string"?b:"",k=f.isFunction(b)?b:f.isFunction(a)?a:null;if(e.indexOf("drag")!==0)e="drag"+e;d=(b==k?a:d)||{};return k?this.bind(e,d,k):this.trigger(e)};var i=f.event,h=i.special,c=h.drag={defaults:{which:1,distance:0,not:":input",handle:null,relative:false,drop:true,click:false},datakey:"dragdata",livekey:"livedrag",add:function(b){var a=f.data(this,c.datakey),d=b.data||{};a.related+=1;if(!a.live&&b.selector){a.live=true;i.add(this,"draginit."+ c.livekey,c.delegate)}f.each(c.defaults,function(e){if(d[e]!==undefined)a[e]=d[e]})},remove:function(){f.data(this,c.datakey).related-=1},setup:function(){if(!f.data(this,c.datakey)){var b=f.extend({related:0},c.defaults);f.data(this,c.datakey,b);i.add(this,"mousedown",c.init,b);this.attachEvent&&this.attachEvent("ondragstart",c.dontstart)}},teardown:function(){if(!f.data(this,c.datakey).related){f.removeData(this,c.datakey);i.remove(this,"mousedown",c.init);i.remove(this,"draginit",c.delegate);c.textselect(true); this.detachEvent&&this.detachEvent("ondragstart",c.dontstart)}},init:function(b){var a=b.data,d;if(!(a.which>0&&b.which!=a.which))if(!f(b.target).is(a.not))if(!(a.handle&&!f(b.target).closest(a.handle,b.currentTarget).length)){a.propagates=1;a.interactions=[c.interaction(this,a)];a.target=b.target;a.pageX=b.pageX;a.pageY=b.pageY;a.dragging=null;d=c.hijack(b,"draginit",a);if(a.propagates){if((d=c.flatten(d))&&d.length){a.interactions=[];f.each(d,function(){a.interactions.push(c.interaction(this,a))})}a.propagates= a.interactions.length;a.drop!==false&&h.drop&&h.drop.handler(b,a);c.textselect(false);i.add(document,"mousemove mouseup",c.handler,a);return false}}},interaction:function(b,a){return{drag:b,callback:new c.callback,droppable:[],offset:f(b)[a.relative?"position":"offset"]()||{top:0,left:0}}},handler:function(b){var a=b.data;switch(b.type){case !a.dragging&&"mousemove":if(Math.pow(b.pageX-a.pageX,2)+Math.pow(b.pageY-a.pageY,2)<Math.pow(a.distance,2))break;b.target=a.target;c.hijack(b,"dragstart",a); if(a.propagates)a.dragging=true;case "mousemove":if(a.dragging){c.hijack(b,"drag",a);if(a.propagates){a.drop!==false&&h.drop&&h.drop.handler(b,a);break}b.type="mouseup"}case "mouseup":i.remove(document,"mousemove mouseup",c.handler);if(a.dragging){a.drop!==false&&h.drop&&h.drop.handler(b,a);c.hijack(b,"dragend",a)}c.textselect(true);if(a.click===false&&a.dragging){jQuery.event.triggered=true;setTimeout(function(){jQuery.event.triggered=false},20);a.dragging=false}break}},delegate:function(b){var a= [],d,e=f.data(this,"events")||{};f.each(e.live||[],function(k,j){if(j.preType.indexOf("drag")===0)if(d=f(b.target).closest(j.selector,b.currentTarget)[0]){i.add(d,j.origType+"."+c.livekey,j.origHandler,j.data);f.inArray(d,a)<0&&a.push(d)}});if(!a.length)return false;return f(a).bind("dragend."+c.livekey,function(){i.remove(this,"."+c.livekey)})},hijack:function(b,a,d,e,k){if(d){var j={event:b.originalEvent,type:b.type},n=a.indexOf("drop")?"drag":"drop",l,o=e||0,g,m;e=!isNaN(e)?e:d.interactions.length; b.type=a;b.originalEvent=null;d.results=[];do if(g=d.interactions[o])if(!(a!=="dragend"&&g.cancelled)){m=c.properties(b,d,g);g.results=[];f(k||g[n]||d.droppable).each(function(q,p){l=(m.target=p)?i.handle.call(p,b,m):null;if(l===false){if(n=="drag"){g.cancelled=true;d.propagates-=1}if(a=="drop")g[n][q]=null}else if(a=="dropinit")g.droppable.push(c.element(l)||p);if(a=="dragstart")g.proxy=f(c.element(l)||g.drag)[0];g.results.push(l);delete b.result;if(a!=="dropinit")return l});d.results[o]=c.flatten(g.results); if(a=="dropinit")g.droppable=c.flatten(g.droppable);a=="dragstart"&&!g.cancelled&&m.update()}while(++o<e);b.type=j.type;b.originalEvent=j.event;return c.flatten(d.results)}},properties:function(b,a,d){var e=d.callback;e.drag=d.drag;e.proxy=d.proxy||d.drag;e.startX=a.pageX;e.startY=a.pageY;e.deltaX=b.pageX-a.pageX;e.deltaY=b.pageY-a.pageY;e.originalX=d.offset.left;e.originalY=d.offset.top;e.offsetX=b.pageX-(a.pageX-e.originalX);e.offsetY=b.pageY-(a.pageY-e.originalY);e.drop=c.flatten((d.drop||[]).slice()); e.available=c.flatten((d.droppable||[]).slice());return e},element:function(b){if(b&&(b.jquery||b.nodeType==1))return b},flatten:function(b){return f.map(b,function(a){return a&&a.jquery?f.makeArray(a):a&&a.length?c.flatten(a):a})},textselect:function(b){f(document)[b?"unbind":"bind"]("selectstart",c.dontstart).attr("unselectable",b?"off":"on").css("MozUserSelect",b?"":"none")},dontstart:function(){return false},callback:function(){}};c.callback.prototype={update:function(){h.drop&&this.available.length&& f.each(this.available,function(b){h.drop.locate(this,b)})}};h.draginit=h.dragstart=h.dragend=c})(jQuery);

/*! 
 * jquery.event.drop - v 2.0.0 
 * Copyright (c) 2010 Three Dub Media - http://threedubmedia.com
 * Open Source MIT License - http://threedubmedia.com/code/license
 */
;(function(f){f.fn.drop=function(c,a,d){var g=typeof c=="string"?c:"",e=f.isFunction(c)?c:f.isFunction(a)?a:null;if(g.indexOf("drop")!==0)g="drop"+g;d=(c==e?a:d)||{};return e?this.bind(g,d,e):this.trigger(g)};f.drop=function(c){c=c||{};b.multi=c.multi===true?Infinity:c.multi===false?1:!isNaN(c.multi)?c.multi:b.multi;b.delay=c.delay||b.delay;b.tolerance=f.isFunction(c.tolerance)?c.tolerance:c.tolerance===null?null:b.tolerance;b.mode=c.mode||b.mode||"intersect"};var l=f.event,i=l.special,b=f.event.special.drop= {multi:1,delay:20,mode:"overlap",targets:[],datakey:"dropdata",livekey:"livedrop",add:function(c){var a=f.data(this,b.datakey);a.related+=1;if(!a.live&&c.selector){a.live=true;l.add(this,"dropinit."+b.livekey,b.delegate)}},remove:function(){f.data(this,b.datakey).related-=1},setup:function(){if(!f.data(this,b.datakey)){f.data(this,b.datakey,{related:0,active:[],anyactive:0,winner:0,location:{}});b.targets.push(this)}},teardown:function(){if(!f.data(this,b.datakey).related){f.removeData(this,b.datakey); l.remove(this,"dropinit",b.delegate);var c=this;b.targets=f.grep(b.targets,function(a){return a!==c})}},handler:function(c,a){var d;if(a)switch(c.type){case "mousedown":d=f(b.targets);if(typeof a.drop=="string")d=d.filter(a.drop);d.each(function(){var g=f.data(this,b.datakey);g.active=[];g.anyactive=0;g.winner=0});a.droppable=d;b.delegates=[];i.drag.hijack(c,"dropinit",a);b.delegates=f.unique(i.drag.flatten(b.delegates));break;case "mousemove":b.event=c;b.timer||b.tolerate(a);break;case "mouseup":b.timer= clearTimeout(b.timer);if(a.propagates){i.drag.hijack(c,"drop",a);i.drag.hijack(c,"dropend",a);f.each(b.delegates||[],function(){l.remove(this,"."+b.livekey)})}break}},delegate:function(c){var a=[],d,g=f.data(this,"events")||{};f.each(g.live||[],function(e,h){if(h.preType.indexOf("drop")===0){d=f(c.currentTarget).find(h.selector);d.length&&d.each(function(){l.add(this,h.origType+"."+b.livekey,h.origHandler,h.data);f.inArray(this,a)<0&&a.push(this)})}});b.delegates.push(a);return a.length?f(a):false}, locate:function(c,a){var d=f.data(c,b.datakey),g=f(c),e=g.offset()||{},h=g.outerHeight();g=g.outerWidth();e={elem:c,width:g,height:h,top:e.top,left:e.left,right:e.left+g,bottom:e.top+h};if(d){d.location=e;d.index=a;d.elem=c}return e},contains:function(c,a){return(a[0]||a.left)>=c.left&&(a[0]||a.right)<=c.right&&(a[1]||a.top)>=c.top&&(a[1]||a.bottom)<=c.bottom},modes:{intersect:function(c,a,d){return this.contains(d,[c.pageX,c.pageY])?1E9:this.modes.overlap.apply(this,arguments)},overlap:function(c, a,d){return Math.max(0,Math.min(d.bottom,a.bottom)-Math.max(d.top,a.top))*Math.max(0,Math.min(d.right,a.right)-Math.max(d.left,a.left))},fit:function(c,a,d){return this.contains(d,a)?1:0},middle:function(c,a,d){return this.contains(d,[a.left+a.width*0.5,a.top+a.height*0.5])?1:0}},sort:function(c,a){return a.winner-c.winner||c.index-a.index},tolerate:function(c){var a,d,g,e,h,m,j=0,k,p=c.interactions.length,n=[b.event.pageX,b.event.pageY],o=b.tolerance||b.modes[b.mode];do if(k=c.interactions[j]){if(!k)return; k.drop=[];h=[];m=k.droppable.length;if(o)g=b.locate(k.proxy);a=0;do if(d=k.droppable[a]){e=f.data(d,b.datakey);if(d=e.location){e.winner=o?o.call(b,b.event,g,d):b.contains(d,n)?1:0;h.push(e)}}while(++a<m);h.sort(b.sort);a=0;do if(e=h[a])if(e.winner&&k.drop.length<b.multi){if(!e.active[j]&&!e.anyactive)if(i.drag.hijack(b.event,"dropstart",c,j,e.elem)[0]!==false){e.active[j]=1;e.anyactive+=1}else e.winner=0;e.winner&&k.drop.push(e.elem)}else if(e.active[j]&&e.anyactive==1){i.drag.hijack(b.event,"dropend", c,j,e.elem);e.active[j]=0;e.anyactive-=1}while(++a<m)}while(++j<p);if(b.last&&n[0]==b.last.pageX&&n[1]==b.last.pageY)delete b.timer;else b.timer=setTimeout(function(){b.tolerate(c)},b.delay);b.last=b.event}};i.dropinit=i.dropstart=i.dropend=b})(jQuery);

;(function($){ // secure $ jQuery alias
/*******************************************************************************************/	
// jquery.event.wheel.js - rev 1 
// Copyright (c) 2008, Three Dub Media (http://threedubmedia.com)
// Liscensed under the MIT License (MIT-LICENSE.txt)
// http://www.opensource.org/licenses/mit-license.php
// Created: 2008-07-01 | Updated: 2008-07-14
/*******************************************************************************************/

// jquery method
$.fn.wheel = function( fn ){
	return this[ fn ? "bind" : "trigger" ]( "wheel", fn );
	};

// special event config
$.event.special.wheel = {
	setup: function(){
		$.event.add( this, wheelEvents, wheelHandler, {} );
		},
	teardown: function(){
		$.event.remove( this, wheelEvents, wheelHandler );
		}
	};

// events to bind ( browser sniffed... )
var wheelEvents = !$.browser.mozilla ? "mousewheel" : // IE, opera, safari
	"DOMMouseScroll"+( $.browser.version<"1.9" ? " mousemove" : "" ); // firefox

// shared event handler
function wheelHandler( event ){ 
	switch ( event.type ){
		case "mousemove": // FF2 has incorrect event positions
			return $.extend( event.data, { // store the correct properties
				clientX: event.clientX, clientY: event.clientY,
				pageX: event.pageX, pageY: event.pageY
				});			
		case "DOMMouseScroll": // firefox
			$.extend( event, event.data ); // fix event properties in FF2
			event.delta = -event.detail/3; // normalize delta
			break;
		case "mousewheel": // IE, opera, safari
			event.delta = event.wheelDelta/120; // normalize delta
			if ( $.browser.opera ) event.delta *= -1; // normalize delta
			break;
		}
	event.type = "wheel"; // hijack the event	
	return $.event.handle.call( this, event, event.delta );
	};
	
/*******************************************************************************************/
})(jQuery); // confine scope

/*
 * jQuery Media Plugin for converting elements into rich media content.
 *
 * Examples and documentation at: http://malsup.com/jquery/media/
 * Copyright (c) 2007-2008 M. Alsup
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 *
 * @author: M. Alsup
 * @version: 0.92 (24-SEP-2009)
 * @requires jQuery v1.1.2 or later
 * $Id: jquery.media.js 2460 2007-07-23 02:53:15Z malsup $
 *
 * Supported Media Players:
 *	- Flash
 *	- Quicktime
 *	- Real Player
 *	- Silverlight
 *	- Windows Media Player
 *	- iframe
 *
 * Supported Media Formats:
 *	 Any types supported by the above players, such as:
 *	 Video: asf, avi, flv, mov, mpg, mpeg, mp4, qt, smil, swf, wmv, 3g2, 3gp
 *	 Audio: aif, aac, au, gsm, mid, midi, mov, mp3, m4a, snd, rm, wav, wma
 *	 Other: bmp, html, pdf, psd, qif, qtif, qti, tif, tiff, xaml
 *
 * Thanks to Mark Hicken and Brent Pedersen for helping me debug this on the Mac!
 * Thanks to Dan Rossi for numerous bug reports and code bits!
 * Thanks to Skye Giordano for several great suggestions!
 * Thanks to Richard Connamacher for excellent improvements to the non-IE behavior!
 */
;(function($) {

/**
 * Chainable method for converting elements into rich media.
 *
 * @param options
 * @param callback fn invoked for each matched element before conversion
 * @param callback fn invoked for each matched element after conversion
 */
$.fn.media = function(options, f1, f2) {
	if (options == 'undo') {
		return this.each(function() {
			var $this = $(this);
			var html = $this.data('media.origHTML');
			if (html)
				$this.replaceWith(html);
		});
	}
	
	return this.each(function() {
		if (typeof options == 'function') {
			f2 = f1;
			f1 = options;
			options = {};
		}
		var o = getSettings(this, options);
		// pre-conversion callback, passes original element and fully populated options
		if (typeof f1 == 'function') f1(this, o);

		var r = getTypesRegExp();
		var m = r.exec(o.src.toLowerCase()) || [''];

		o.type ? m[0] = o.type : m.shift();
		for (var i=0; i < m.length; i++) {
			fn = m[i].toLowerCase();
			if (isDigit(fn[0])) fn = 'fn' + fn; // fns can't begin with numbers
			if (!$.fn.media[fn])
				continue;  // unrecognized media type
			// normalize autoplay settings
			var player = $.fn.media[fn+'_player'];
			if (!o.params) o.params = {};
			if (player) {
				var num = player.autoplayAttr == 'autostart';
				o.params[player.autoplayAttr || 'autoplay'] = num ? (o.autoplay ? 1 : 0) : o.autoplay ? true : false;
			}
			var $div = $.fn.media[fn](this, o);

			$div.css('backgroundColor', o.bgColor).width(o.width);
			
			if (o.canUndo) {
				var $temp = $('<div></div>').append(this);
				$div.data('media.origHTML', $temp.html()); // store original markup
			}
			
			// post-conversion callback, passes original element, new div element and fully populated options
			if (typeof f2 == 'function') f2(this, $div[0], o, player.name);
			break;
		}
	});
};

/**
 * Non-chainable method for adding or changing file format / player mapping
 * @name mapFormat
 * @param String format File format extension (ie: mov, wav, mp3)
 * @param String player Player name to use for the format (one of: flash, quicktime, realplayer, winmedia, silverlight or iframe
 */
$.fn.media.mapFormat = function(format, player) {
	if (!format || !player || !$.fn.media.defaults.players[player]) return; // invalid
	format = format.toLowerCase();
	if (isDigit(format[0])) format = 'fn' + format;
	$.fn.media[format] = $.fn.media[player];
	$.fn.media[format+'_player'] = $.fn.media.defaults.players[player];
};

// global defautls; override as needed
$.fn.media.defaults = {
	standards:  false,      // use object tags only (no embeds for non-IE browsers)
	canUndo:    true,       // tells plugin to store the original markup so it can be reverted via: $(sel).mediaUndo()
	width:		400,
	height:		400,
	autoplay:	0,		   	// normalized cross-player setting
	bgColor:	'#ffffff', 	// background color
	params:		{ wmode: 'transparent'},	// added to object element as param elements; added to embed element as attrs
	attrs:		{},			// added to object and embed elements as attrs
	flvKeyName: 'file', 	// key used for object src param (thanks to Andrea Ercolino)
	flashvars:	{},			// added to flash content as flashvars param/attr
	flashVersion:	'7',	// required flash version
	expressInstaller: null,	// src for express installer

	// default flash video and mp3 player (@see: http://jeroenwijering.com/?item=Flash_Media_Player)
	flvPlayer:	 'mediaplayer.swf',
	mp3Player:	 'mediaplayer.swf',

	// @see http://msdn2.microsoft.com/en-us/library/bb412401.aspx
	silverlight: {
		inplaceInstallPrompt: 'true', // display in-place install prompt?
		isWindowless:		  'true', // windowless mode (false for wrapping markup)
		framerate:			  '24',	  // maximum framerate
		version:			  '0.9',  // Silverlight version
		onError:			  null,	  // onError callback
		onLoad:			      null,   // onLoad callback
		initParams:			  null,	  // object init params
		userContext:		  null	  // callback arg passed to the load callback
	}
};

// Media Players; think twice before overriding
$.fn.media.defaults.players = {
	flash: {
		name:		 'flash',
		title:		 'Flash',
		types:		 'flv,mp3,swf',
		mimetype:	 'application/x-shockwave-flash',
		pluginspage: 'http://www.adobe.com/go/getflashplayer',
		ieAttrs: {
			classid:  'clsid:d27cdb6e-ae6d-11cf-96b8-444553540000',
			type:	  'application/x-oleobject',
			codebase: 'http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=' + $.fn.media.defaults.flashVersion
		}
	},
	quicktime: {
		name:		 'quicktime',
		title:		 'QuickTime',
		mimetype:	 'video/quicktime',
		pluginspage: 'http://www.apple.com/quicktime/download/',
		types:		 'aif,aiff,aac,au,bmp,gsm,mov,mid,midi,mpg,mpeg,mp4,m4a,psd,qt,qtif,qif,qti,snd,tif,tiff,wav,3g2,3gp',
		ieAttrs: {
			classid:  'clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B',
			codebase: 'http://www.apple.com/qtactivex/qtplugin.cab'
		}
	},
	realplayer: {
		name:		  'real',
		title:		  'RealPlayer',
		types:		  'ra,ram,rm,rpm,rv,smi,smil',
		mimetype:	  'audio/x-pn-realaudio-plugin',
		pluginspage:  'http://www.real.com/player/',
		autoplayAttr: 'autostart',
		ieAttrs: {
			classid: 'clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA'
		}
	},
	winmedia: {
		name:		  'winmedia',
		title:		  'Windows Media',
		types:		  'asx,asf,avi,wma,wmv',
		mimetype:	  $.browser.mozilla && isFirefoxWMPPluginInstalled() ? 'application/x-ms-wmp' : 'application/x-mplayer2',
		pluginspage:  'http://www.microsoft.com/Windows/MediaPlayer/',
		autoplayAttr: 'autostart',
		oUrl:		  'url',
		ieAttrs: {
			classid:  'clsid:6BF52A52-394A-11d3-B153-00C04F79FAA6',
			type:	  'application/x-oleobject'
		}
	},
	// special cases
	iframe: {
		name:  'iframe',
		types: 'html,pdf'
	},
	silverlight: {
		name:  'silverlight',
		types: 'xaml'
	}
};

//
//	everything below here is private
//


// detection script for FF WMP plugin (http://www.therossman.org/experiments/wmp_play.html)
// (hat tip to Mark Ross for this script)
function isFirefoxWMPPluginInstalled() {
	var plugs = navigator.plugins;
	for (i = 0; i < plugs.length; i++) {
		var plugin = plugs[i];
		if (plugin['filename'] == 'np-mswmp.dll')
			return true;
	}
	return false;
}

var counter = 1;

for (var player in $.fn.media.defaults.players) {
	var types = $.fn.media.defaults.players[player].types;
	$.each(types.split(','), function(i,o) {
		if (isDigit(o[0])) o = 'fn' + o;
		$.fn.media[o] = $.fn.media[player] = getGenerator(player);
		$.fn.media[o+'_player'] = $.fn.media.defaults.players[player];
	});
};

function getTypesRegExp() {
	var types = '';
	for (var player in $.fn.media.defaults.players) {
		if (types.length) types += ',';
		types += $.fn.media.defaults.players[player].types;
	};
	return new RegExp('\\.(' + types.replace(/,/ig,'|') + ')\\b');
};

function getGenerator(player) {
	return function(el, options) {
		return generate(el, options, player);
	};
};

function isDigit(c) {
	return '0123456789'.indexOf(c) > -1;
};

// flatten all possible options: global defaults, meta, option obj
function getSettings(el, options) {
	options = options || {};
	var $el = $(el);
	var cls = el.className || '';
	// support metadata plugin (v1.0 and v2.0)
	var meta = $.metadata ? $el.metadata() : $.meta ? $el.data() : {};
	meta = meta || {};
	var w = meta.width	 || parseInt(((cls.match(/w:(\d+)/)||[])[1]||0));
	var h = meta.height || parseInt(((cls.match(/h:(\d+)/)||[])[1]||0));

	if (w) meta.width	= w;
	if (h) meta.height = h;
	if (cls) meta.cls = cls;

	var a = $.fn.media.defaults;
	var b = options;
	var c = meta;

	var p = { params: { bgColor: options.bgColor || $.fn.media.defaults.bgColor } };
	var opts = $.extend({}, a, b, c);
	$.each(['attrs','params','flashvars','silverlight'], function(i,o) {
		opts[o] = $.extend({}, p[o] || {}, a[o] || {}, b[o] || {}, c[o] || {});
	});

	if (typeof opts.caption == 'undefined') opts.caption = $el.text();

	// make sure we have a source!
	opts.src = opts.src || $el.attr('href') || $el.attr('src') || 'unknown';
	return opts;
};

//
//	Flash Player
//

// generate flash using SWFObject library if possible
$.fn.media.swf = function(el, opts) {
	if (!window.SWFObject && !window.swfobject) {
		// roll our own
		if (opts.flashvars) {
			var a = [];
			for (var f in opts.flashvars)
				a.push(f + '=' + opts.flashvars[f]);
			if (!opts.params) opts.params = {};
			opts.params.flashvars = a.join('&');
		}
		return generate(el, opts, 'flash');
	}

	var id = el.id ? (' id="'+el.id+'"') : '';
	var cls = opts.cls ? (' class="' + opts.cls + '"') : '';
	var $div = $('<div' + id + cls + '>');

	// swfobject v2+
	if (window.swfobject) {
		$(el).after($div).appendTo($div);
		if (!el.id) el.id = 'movie_player_' + counter++;

		// replace el with swfobject content
		swfobject.embedSWF(opts.src, el.id, opts.width, opts.height, opts.flashVersion,
			opts.expressInstaller, opts.flashvars, opts.params, opts.attrs);
	}
	// swfobject < v2
	else {
		$(el).after($div).remove();
		var so = new SWFObject(opts.src, 'movie_player_' + counter++, opts.width, opts.height, opts.flashVersion, opts.bgColor);
		if (opts.expressInstaller) so.useExpressInstall(opts.expressInstaller);

		for (var p in opts.params)
			if (p != 'bgColor') so.addParam(p, opts.params[p]);
		for (var f in opts.flashvars)
			so.addVariable(f, opts.flashvars[f]);
		so.write($div[0]);
	}

	if (opts.caption) $('<div>').appendTo($div).html(opts.caption);
	return $div;
};

// map flv and mp3 files to the swf player by default
$.fn.media.flv = $.fn.media.mp3 = function(el, opts) {
	var src = opts.src;
	var player = /\.mp3\b/i.test(src) ? $.fn.media.defaults.mp3Player : $.fn.media.defaults.flvPlayer;
	var key = opts.flvKeyName;
	src = encodeURIComponent(src);
	opts.src = player;
	opts.src = opts.src + '?'+key+'=' + (src);
	var srcObj = {};
	srcObj[key] = src;
	opts.flashvars = $.extend({}, srcObj, opts.flashvars );
	return $.fn.media.swf(el, opts);
};

//
//	Silverlight
//
$.fn.media.xaml = function(el, opts) {
	if (!window.Sys || !window.Sys.Silverlight) {
		if ($.fn.media.xaml.warning) return;
		$.fn.media.xaml.warning = 1;
		alert('You must include the Silverlight.js script.');
		return;
	}

	var props = {
		width: opts.width,
		height: opts.height,
		background: opts.bgColor,
		inplaceInstallPrompt: opts.silverlight.inplaceInstallPrompt,
		isWindowless: opts.silverlight.isWindowless,
		framerate: opts.silverlight.framerate,
		version: opts.silverlight.version
	};
	var events = {
		onError: opts.silverlight.onError,
		onLoad: opts.silverlight.onLoad
	};

	var id1 = el.id ? (' id="'+el.id+'"') : '';
	var id2 = opts.id || 'AG' + counter++;
	// convert element to div
	var cls = opts.cls ? (' class="' + opts.cls + '"') : '';
	var $div = $('<div' + id1 + cls + '>');
	$(el).after($div).remove();

	Sys.Silverlight.createObjectEx({
		source: opts.src,
		initParams: opts.silverlight.initParams,
		userContext: opts.silverlight.userContext,
		id: id2,
		parentElement: $div[0],
		properties: props,
		events: events
	});

	if (opts.caption) $('<div>').appendTo($div).html(opts.caption);
	return $div;
};

//
// generate object/embed markup
//
function generate(el, opts, player) {
	var $el = $(el);
	var o = $.fn.media.defaults.players[player];

	if (player == 'iframe') {
		var o = $('<iframe' + ' width="' + opts.width + '" height="' + opts.height + '" >');
		o.attr('src', opts.src);
		o.css('backgroundColor', o.bgColor);
	}
	else if ($.browser.msie) {
		var a = ['<object width="' + opts.width + '" height="' + opts.height + '" '];
		for (var key in opts.attrs)
			a.push(key + '="'+opts.attrs[key]+'" ');
		for (var key in o.ieAttrs || {}) {
			var v = o.ieAttrs[key];
			if (key == 'codebase' && window.location.protocol == 'https:')
				v = v.replace('http','https');
			a.push(key + '="'+v+'" ');
		}
		a.push('></ob'+'ject'+'>');
		var p = ['<param name="' + (o.oUrl || 'src') +'" value="' + opts.src + '">'];
		for (var key in opts.params)
			p.push('<param name="'+ key +'" value="' + opts.params[key] + '">');
		var o = document.createElement(a.join(''));
		for (var i=0; i < p.length; i++)
			o.appendChild(document.createElement(p[i]));
	}
	else if (o.standards) {
		// Rewritten to be standards compliant by Richard Connamacher
		var a = ['<object type="' + o.mimetype +'" width="' + opts.width + '" height="' + opts.height +'"'];
		if (opts.src) a.push(' data="' + opts.src + '" ');
		a.push('>');
		a.push('<param name="' + (o.oUrl || 'src') +'" value="' + opts.src + '">');
		for (var key in opts.params) {
			if (key == 'wmode' && player != 'flash') // FF3/Quicktime borks on wmode
				continue;
			a.push('<param name="'+ key +'" value="' + opts.params[key] + '">');
		}
		// Alternate HTML
		a.push('<div><p><strong>'+o.title+' Required</strong></p><p>'+o.title+' is required to view this media. <a href="'+o.pluginspage+'">Download Here</a>.</p></div>');
		a.push('</ob'+'ject'+'>');
	}
	 else {
	        var a = ['<embed width="' + opts.width + '" height="' + opts.height + '" style="display:block"'];
	        if (opts.src) a.push(' src="' + opts.src + '" ');
	        for (var key in opts.attrs)
	            a.push(key + '="'+opts.attrs[key]+'" ');
	        for (var key in o.eAttrs || {})
	            a.push(key + '="'+o.eAttrs[key]+'" ');
	        for (var key in opts.params) {
	            if (key == 'wmode' && player != 'flash') // FF3/Quicktime borks on wmode
	            	continue;
	            a.push(key + '="'+opts.params[key]+'" ');
	        }
	        a.push('></em'+'bed'+'>');
	    }	
	// convert element to div
	var id = el.id ? (' id="'+el.id+'"') : '';
	var cls = opts.cls ? (' class="' + opts.cls + '"') : '';
	var $div = $('<div' + id + cls + '>');
	$el.after($div).remove();
	($.browser.msie || player == 'iframe') ? $div.append(o) : $div.html(a.join(''));
	if (opts.caption) $('<div>').appendTo($div).html(opts.caption);
	return $div;
};
/*******************************************************************************************/
})(jQuery); // confine scope

// Variable to hold the response from ajax query about a series
var seriesResponse = {};
var autoloadSeries = true;
(function($){
	
	// This is the available height for the panels: menu, left and right (including bar for tools)
	var diff = $(window).height() - 37;
	var menuContainer = $(window).height() - 19;
	var menuOffset = 25;

	// Activate the Drag/drop functionality
	activateDrag();

	//var servers = [];
	//servers['vHalfL'] = ['https://imaging2', 'https://imaging3', 'https://imaging5', 'https://imaging1'];//, 'https://imaging4']; //, 'https://imaging4']; //, 'https://imaging5']; //, 'https://imaging6'];
	//servers['vHalfR'] = ['https://imaging4', 'https://imaging5', 'https://imaging6']; //, 'https://imaging8', 'https://imaging6']; //, 'https://imaging7']; //, 'https://imaging6'];
	//var shared_path = '.hsc.usc.edu/kohana/';
	if ($.browser.msie && parseInt($.browser.version) <= 6)
	{
		$('#menuContainer').height(menuContainer);
		$('.wrapper').height(diff)
		$('#main, #toolbar').width($(window).width() - 261);
	}
	//$('#vReport').width($(window).width() - 261 - 40);
	// Variable to know how many images to update
	var updateRange = 101;
	var myImage;
	
	// Preset values for CT and MR. Coded in Window Center & Window Width
	var presetCT = []; //c,w
	presetCT['Default'] = [0,0];
	presetCT['Bone'] = [400,200];
	presetCT['Abdomen'] = [55,426];
	presetCT['Lung'] = [-585,1800];
	presetCT['Head'] = [50,150];
	presetCT['PE'] = [100,70];
	presetCT['Liver'] = [100,300];
	presetCT['Lung Sharp Med'] = [-550,1800];
	presetCT['PET WB 103'] = [8000,15000];
	presetCT['Lung Enhance'] = [-600,2000];

	var presetMR = []; //c,w
	presetMR['Default'] =[0,0];
	presetMR['Head T2'] = [800,1500];
	presetMR['Head Flair'] = [300,900];
	presetMR['Head T1'] = [500,1000];
	presetMR['Head MPRAGE'] = [900,200];
	presetMR['Head IR'] = [1700,1000];
	presetMR['Head Diffusion'] = [200,700];
	presetMR['Head T2* eoi'] = [110,2000];
	presetMR['Head GE T2*'] = [1000,1000];
	presetMR['Head MRA'] = [300,1000];
	presetMR['Spine T1'] = [300,1000];
	presetMR['Spine T2,7ET'] = [500,1500];
	presetMR['Spine T2,15ET'] = [400,1500];
	presetMR['Head MIP'] = [3700,1000];

	// Set the mode to Image Panning by default
	$('#main').data('mode', $('#toolImgs .activeTool').attr('id'));
	$('#toolImgs .activeTool').triggerHandler('click');
	
	// Check Session
	checkSession();
	// Get the studies for this patient right away
	$.get($('#ajaxStudies').attr('href'), function(response, status, xhr) {
		// Response is in html format (select), just place it to replace the text
		$('#studies').html(response);
		// Prepare the docs (reports, attachments)
		prepareDocs();
		// Now bind any changes to the select
		$('#studies').bind('change', function() {
			// Output from change should go to the menu
			$('#menu').html('loading...');
			// Get option text
			var option_text = $(this).find('option:selected').text();
			// Update Accession Number
			$('#accession_number').html(option_text.substring(0, option_text.indexOf(' -')));
			// Check Session
			checkSession();
			// Get the results
			$.get($(this).find('option:selected').val(), function(res, sta, xml) {
				// Place the results in the menu
				$('#menu').html(res).css('top', 0);
				// Re-activate the drag/drop functionality
				activateDrag();
				// Prepare the docs (reports, attachments)
				prepareDocs();
			});
		});
	});

	/*
	* This set of functions are used for the scrolling of the menu using the button at the bottom
	*/
	// Scroll to the top
	$('#scrollTop').click(function() {
		// Check if menu height is within limits
		if ($('#menu').height() < diff) return false;
		// Set the top to 0
		$('#menu').css('top', 0);
		return false;
	});
	// Scroll some pixels up
	$('#scrollUp').click(function() {
		scrollMenu(50);
		return false;
	});
	// Scroll some pixels down
	$('#scrollDown').click(function() {
		scrollMenu(-50);
		return false;
	});
	// Scroll to the bottom
	$('#scrollBottom').click(function() {
		// Check if menu height is within limits
		if ($('#menu').height() < diff) return false;
		// Calculate the height of menu
		var menuH = $('#menu').height() - diff + menuOffset;
		// Set top to the negative value of the menu height
		$('#menu').css('top', -1 * menuH);
		return false;
	});

	// To toggle the menu
	$('#toggle-menu').click(function(e){
		// Stop everything
		e.stopPropagation();
		e.preventDefault();
		/*
		var w = [];
		$('.half').each(function(i){
			w[$(this).attr('id')] = $(this).width();
		});
		*/
		var difference = ($(this).text() == 'hide') ? 65 : -65;
		// Now we need to manipulate the position of images
		$('.half').each(function(i){
			if ($(this).find('.activeImage').length > 0)
			{
				// Only do it when there are images, otherwise, no sense.
				// Find the left from current "cover" image
				var left = parseInt($(this).find('.activeImage').css('left'));
				// Calculate new left
				left += difference;
				// Current image first
				$(this).find('.activeImage').css('left', left);
				// The rest
				$(this).find('.images img').each(function(index){
					$(this).css('left', left);
				});
			}
		});
		if ($(this).text() == 'hide')
		{
			// It said "hide", thus, hide the menu
			$('#menuContainer').hide();
			// read "show" now
			$(this).text('show');
			// and enlarge the other panes
			$('#main').css('left', 0);
		}
		else
		{
			// It said "show", thus, show the menu
			$('#menuContainer').show();
			// read "hide" now
			$(this).text('hide');
			// and push other panels towards the right
			$('#main').css('left', 261+'px');
		}

	});

	// Handles the toggling of panes from viewer
	$('.togglePanes').click( function(e){
		// Stop everything
		e.stopPropagation();
		e.preventDefault();
		// Extend the life of session
		//extendSession();
		var activeLayout = $('.activeLayout').attr('id').substring(3);
		var target = $(this).closest('.half').attr('id');
		var newLayout = (activeLayout == 'Full') ? '2x2' : 'Full';
		// Do the transition
		transitionLayout(activeLayout, newLayout, target);
	});

	function transitionLayout(oldLayout, newLayout, target)
	{
		var transition = oldLayout+'-'+newLayout;
		
		target = (typeof target == 'undefined') ? 'vTL' : target;
		
		switch (transition)
		{
			// 2x2 => others
			case '2x2-2x1' : 
				// Hide Bottom Right viewer
				$('#vBR, .panevBR').hide();
				// Resize accordingly
				resizePane('2x2', '1x1', $('#vTR'));
				break;
			case '2x2-1x2' : 
				// Hide Bottom Left viewer
				$('#vBL, .panevBL').hide();
				// Resize accordingly
				resizePane('2x2', '1x1', $('#vTL'));
				break;
			case '2x2-1x1' : 
				// Hide both Bottom Right & Left viewers
				$('#vBR, #vBL, .panevBR, .panevBL').hide();
				// Resize accordingly
				resizePane('2x2', '1x1', $('#vTL'));
				resizePane('2x2', '1x1', $('#vTR'));
				break;
			case '2x2-Full' : 
				// Hide all
				$('.half, .aPane').hide();
				// Resize accordingly
				resizePane('2x2', 'Full', $('#'+target));
				break;
			// 2x1 => others
			case '2x1-2x2' :
				resizePane('1x1', '2x2', $('#vTR'));
				// Show all viewers
				$('.half, .aPane').show();
				break;
			case '2x1-1x2' :
				transitionLayout('2x1', '2x2');
				transitionLayout('2x2', '1x2');
				break;
			case '2x1-1x1' :
				transitionLayout('2x1', '2x2');
				transitionLayout('2x2', '1x1');
				break;
			case '2x1-Full' :
				transitionLayout('2x1', '2x2');
				transitionLayout('2x2', 'Full', target);
				break;
			// 1x2 => others
			case '1x2-2x2' :
				resizePane('1x1', '2x2', $('#vTL'));
				// Show all viewers
				$('.half, .aPane').show();
				break;
			case '1x2-2x1' :
				transitionLayout('1x2', '2x2');
				transitionLayout('2x2', '2x1');
				break;
			case '1x2-1x1' :
				transitionLayout('1x2', '2x2');
				transitionLayout('2x2', '1x1');
				break;
			case '1x2-Full' :
				transitionLayout('1x2', '2x2');
				transitionLayout('2x2', 'Full', target);
				break;
			// 1x1 => others
			case '1x1-2x2':
				resizePane('1x1', '2x2', $('#vTL'));
				resizePane('1x1', '2x2', $('#vTR'));
				// Show all viewers
				$('.half, .aPane').show();
				break;
			case '1x1-1x2':
				transitionLayout('1x1', '2x2');
				transitionLayout('2x2', '1x2');
				break;
			case '1x1-2x1' : 
				transitionLayout('1x1', '2x2');
				transitionLayout('2x2', '2x1');
				break;
			case '1x1-Full' : 
				transitionLayout('1x1', '2x2');
				transitionLayout('2x2', 'Full', target);
				break;
			// Full => others
			case 'Full-2x2':
				// Resize accordingly
				resizePane('Full', '2x2', $('.fullPane'));
				// Show all viewers
				// Go back to normal from Full mode
				$('.half, .aPane').show().removeClass('fullPane').removeClass('full').addClass('size1of2')
				.removeClass('h100').addClass('hhalf');
				$('.aPane').addClass('lhhalf').removeClass('lh100');
				// Show right text and set the current width
				$('.half').find('.togglePanes').text('Full');
				$('.half').each(function(i) {
					updateDimensions($(this));
				});
				break;
			case 'Full-2x1':
				transitionLayout('Full', '2x2');
				transitionLayout('2x2', '2x1');
				break;
			case 'Full-1x2':
				transitionLayout('Full', '2x2');
				transitionLayout('2x2', '1x2');
				break;
			case 'Full-1x1':
				transitionLayout('Full', '2x2');
				transitionLayout('2x2', '1x1');
				break;
		}
		// Remove class from other tools
		$('.layoutTool').removeClass('activeLayout');
		// Add class to just clicked one
		$('#img'+newLayout).addClass('activeLayout');
	}

	function resizePane(oldLayout, newLayout, viewer)
	{
		var transition = oldLayout+'-'+newLayout;
		
		switch (transition)
		{
			case '2x2-1x1' : 
				var id = $(viewer).attr('id');
				// Resize to Tall mode
				$(viewer).removeClass('full').addClass('size1of2').removeClass('hhalf').addClass('h100').show();
				$('.pane'+id).removeClass('full').addClass('size1of2').removeClass('hhalf').addClass('h100')
					.removeClass('lhhalf').addClass('lh100').show();
				// Current active image width
				var activeImageW = $(viewer).find('.activeImage').width();
				// Current active image height
				var activeImageH = $(viewer).find('.activeImage').height();		
				// Find the left from current "cover" image
				var left = parseInt($(viewer).find('.activeImage').css('left'));
				// Find the top from current "cover" image
				var top = parseInt($(viewer).find('.activeImage').css('top'));
				left -= activeImageW/2;
				activeImageW = activeImageW*2;
				activeImageH = activeImageH*2;
				top  = top*2;
				$(viewer).find('.activeImage').css({left: left, top: top}).width(activeImageW).height(activeImageH);
				// The rest
				$(viewer).find('.images img').each(function(index){
					$(this).css({left: left, top: top}).width(activeImageW).height(activeImageH);
				});
				// and set new dimensions
				updateDimensions(viewer);
				break;
			case '2x2-Full' : 
				var id = $(viewer).attr('id');
				// Resize to Full mode
				$(viewer).removeClass('size1of2').addClass('full').addClass('fullPane').removeClass('hhalf').addClass('h100').show();
				// Set panes of menu as well
				$('.pane'+id).removeClass('size1of2').addClass('full').show()
					.removeClass('hhalf').addClass('h100').removeClass('lhhalf').addClass('lh100');
				// Show viewer, text said "Full", thus, go to Full mode
				$(viewer).find('.togglePanes').text('Restore');

				// Current active image width
				var activeImageW = $(viewer).find('.activeImage').width();
				// Current active image height
				var activeImageH = $(viewer).find('.activeImage').height();		
				// Find the left from current "cover" image
				var left = parseInt($(viewer).find('.activeImage').css('left'));
				// Find the top from current "cover" image
				var top = parseInt($(viewer).find('.activeImage').css('top'));
				activeImageW = activeImageW*2;
				activeImageH = activeImageH*2;
				left = left*2;
				top  = top*2;
				$(viewer).find('.activeImage').css({left: left, top: top}).width(activeImageW).height(activeImageH);
				// The rest
				$(viewer).find('.images img').each(function(index){
					//$(this).css('left', left).width(activeImageW).height(activeImageH);
					$(this).css({left: left, top: top}).width(activeImageW).height(activeImageH);
				});
				// and set new dimensions
				updateDimensions(viewer);
				break;
			case '1x1-2x2':
				var id = $(viewer).attr('id');
				// Go back to normal from Tall mode
				$(viewer).removeClass('full').addClass('size1of2').removeClass('h100').addClass('hhalf');
				// Set panes as well
				$('.pane'+id).removeClass('full').addClass('size1of2').show()
					.removeClass('h100').addClass('hhalf').addClass('lhhalf').removeClass('lh100');
				// Show viewer, set text to Full
				$(viewer).find('.togglePanes').text('Full').show();

				// Current active image width
				var activeImageW = $(viewer).find('.activeImage').width();
				// Current active image height
				var activeImageH = $(viewer).find('.activeImage').height();		
				// Find the left from current "cover" image
				var left = parseInt($(viewer).find('.activeImage').css('left'));
				// Find the top from current "cover" image
				var top = parseInt($(viewer).find('.activeImage').css('top'));
				activeImageW = activeImageW/2;
				left += activeImageW/2;
				activeImageH = activeImageH/2;
				top  = top/2;
				$(viewer).find('.activeImage').css({left: left, top: top}).width(activeImageW).height(activeImageH);
				// The rest
				$(viewer).find('.images img').each(function(index){
					//$(this).css('left', left).width(activeImageW).height(activeImageH);
					$(this).css({left: left, top: top}).width(activeImageW).height(activeImageH);
				});
				// and set new dimensions
				updateDimensions(viewer);
				break;
			case 'Full-2x2':
				// Current active image width
				var activeImageW = $(viewer).find('.activeImage').width();
				// Current active image height
				var activeImageH = $(viewer).find('.activeImage').height();		
				// Find the left from current "cover" image
				var left = parseInt($(viewer).find('.activeImage').css('left'));
				// Find the top from current "cover" image
				var top = parseInt($(viewer).find('.activeImage').css('top'));
				activeImageW = activeImageW/2;
				activeImageH = activeImageH/2;
				left = left/2;
				top  = top/2;
				$(viewer).find('.activeImage').css({left: left, top: top}).width(activeImageW).height(activeImageH);
				// The rest
				$(viewer).find('.images img').each(function(index){
					//$(this).css('left', left).width(activeImageW).height(activeImageH);
					$(this).css({left: left, top: top}).width(activeImageW).height(activeImageH);
				});
				// and set new dimensions
				//$(viewer).data('dimensions', {vw:$(viewer).width(), h:activeImageW, 
				//	w:activeImageH, t:top, l:left}).show();
				break;
		}
	}

	function updateDimensions(viewer)
	{
		var activeImage = $(viewer).find('.activeImage');
		$(viewer).data('dimensions', {vw:$(viewer).width(), vh:$(viewer).height(), h:$(activeImage).width(), 
			w:$(activeImage).height(), t:parseInt($(activeImage).css('top')), l:parseInt($(activeImage).css('left'))});
	}
	/*
	* This set of functions are used for the toolbars
	*/
	// Attachment toolbar
	$('#smallZoom').click(function(e){
		// Stop everything
		e.stopPropagation();
		e.preventDefault();
		// Remove class from other tools
		$('.docTool').removeClass('activeTool');
		// Add class to just clicked one
		$(this).addClass('activeTool');
		// Set the width to "auto" mode
		$('#vFull img').height(diff).width('auto');
	});
	$('#largeZoom').click(function(e){
		// Stop everything
		e.stopPropagation();
		e.preventDefault();
		// Remove class from other tools
		$('.docTool').removeClass('activeTool');
		// Add class to just clicked one
		$(this).addClass('activeTool');
		// Set the width and height to "auto" mode
		$('#vFull img').width('auto').height('auto');
	});
	$('#extraLargeZoom').click(function(e){
		// Stop everything
		e.stopPropagation();
		e.preventDefault();
		// Remove class from other tools
		$('.docTool').removeClass('activeTool');
		// Add class to just clicked one
		$(this).addClass('activeTool');
		// Set the width to 100% of viewer
		$('#vFull img').width('100%').height('auto');
	});
	
	$('#imgText').click(function(e){
		// Stop everything
		e.stopPropagation();
		e.preventDefault();
		// Remove class from other tools
		if ($(this).hasClass('activeText'))
		{
			$(this).removeClass('activeText').addClass('inactiveText');
			$('.txtInfo').hide();
		}
		else
		{
			$(this).addClass('activeText').removeClass('inactiveText');
			$('.txtInfo').show();
		}
	});
	
	// Viewer toolbar
	$('.imageTool').click(function(e){
		// Stop everything
		e.stopPropagation();
		e.preventDefault();

		// Remove class from other tools
		$('.imageTool').removeClass('activeTool');
		// Add class to just clicked one
		$(this).addClass('activeTool');
		switch ($(this).attr('id'))
		{
			case 'imgZoom': $('.half').css('cursor', 'n-resize');
				break;
			case 'imgScroll' : $('.half').css('cursor', 'row-resize');
				break;
			case 'imgPan' : $('.half').css('cursor', 'move');
				break;
			case 'imgWindow' : $('.half').css('cursor','crosshair');
				break;
			default:
				$('.half').css('cursor', 'default');
		}
		// Set mode corresponding to id of element clicked (only 1 mode at a time)
		$('#main').data('mode', $(this).attr('id'));
	});
	
	// Viewer toolbar
	$('.layoutTool').click(function(e){
		// Stop everything
		e.stopPropagation();
		e.preventDefault();

		var oldLayout = $('.activeLayout').attr('id').substring(3);
		var newLayout = $(this).attr('id').substring(3);
		
		transitionLayout(oldLayout, newLayout);
	});

	// Image viewer hover
	$('.half').hover(
		function() {
			// Extend the life of session
			//extendSession();
			hoverViewer($(this), 'on');
		},
		function() {
			// Extend the life of session
			//extendSession();
			hoverViewer($(this), 'off');
		}
	);

	// When a reset is clicked
	$('.reset').click(function(e){
		// Stop everything
		e.stopPropagation();
		e.preventDefault();
		// Find viewer
		var viewer = $(this).closest('.half');
		// Do the reset
		resetImages(viewer);
		
		// Sync the viewers
		if ($('#imgSync').is(':checked'))
		{
			// Other
			var other = $(viewer).siblings('.half').eq(0);
			// Navigate (should start at the same index???)
			resetImages($(other));
		}
	});
		
	// When a Play is clicked
	$('.play').click(function(e){
		// Stop everything
		e.stopPropagation();
		e.preventDefault();
		// Find viewer
		var viewer = $(this).closest('.half');
		// Get the mode
		var mode = $(this).text().toLowerCase();
		// Get current status
		var text = ($(this).text() == 'Play') ? 'Pause' : 'Play';
		// Update text
		$('.play').text(text);

		// Do the playback
		playBack(viewer, mode, 50);
		
		// Sync the viewers
		if ($('#imgSync').is(':checked'))
		{
			// Other
			var other = $(viewer).siblings('.half').eq(0);
			// Do the playback
			playBack($(other), mode, 50);
		}
	});

	// When a Play is clicked
	$('.rewind').click(function(e){
		// Stop everything
		e.stopPropagation();
		e.preventDefault();
		// Find viewer
		var viewer = $(this).closest('.half');

		// Rewind
		navigate(viewer, 999);
		playBack(viewer, 'pause', 50);
		$(viewer).find('.play').text('Play');
		
		// Sync the viewers
		if ($('#imgSync').is(':checked'))
		{
			// Other
			var other = $(viewer).siblings('.half').eq(0);
			// Do the playback
			navigate($(other), 999);
			playBack($(other), 'pause', 50);
			$(other).find('.play').text('Play');
		}
	});

	// Preset hover
	$('.preset').hover(
		function(){
			// Hide the Presets
			$(this).find('ul').hide();
			// Get the series info
			var series = $(this).closest('.half').data('series');
			// Show the preset (if exists based on modality)
			$(this).find('.preset'+series.modality).show();
		},
		function(){
			// Hide the presets
			$(this).find('ul').hide();
		}
	);

	// When a preset is clicked
	$('.preset a').click(function(e){
		// Stop everything
		e.stopPropagation();
		e.preventDefault();
		// Find viewer
		var half = $(this).closest('.half');
		// Get the name of the preset
		var presetText = $(this).text();
		// Hide presets
		$(this).closest('ul').hide();
		// If preset is the same Do Nothing
		if ($(this).closest('.preset').find('span').text() == presetText) return false;
		// Update preset text
		$(this).closest('.preset').find('span').text(presetText);
		// Load series data
		var series = $(half).data('series');
		// Get current image index from "banner" of total images
		var index = parseInt($(half).find('.totalImages').text()) - 1;
		// Eval the preset values from array (Any other way to do this??)
		eval('var values = preset'+series.modality+'["'+presetText+'"];');
		// Add Window/Center to data in viewer
		$(half).data('wCenter', values[0]).data('wWidth', values[1]);
		$(half).find('.winlev').html('win:'+values[0]+'<br />lev:'+values[1]);

		// Find height of image (rows)
		var h = $(half).find('img').eq(index).height();
		// Update the "cover" image to new Preset
		//$(half).find('img').eq(index).attr('src', series.seriesImages[index]+'&rows='+h+'&windowCenter='+values[0]+'&windowWidth='+values[1]);
		$(half).find('img').eq(index).attr('src', series.seriesImages[index]+'&windowCenter='+values[0]+'&windowWidth='+values[1]);
		// Update surrounding 5 images
		updateImages(half, updateRange, 0);
	});

	/*
	* This set of functions are used for the image manipulation
	*/
	$('.images').bind('mousedown touchstart', function(e) {
		// Stop everything
		e.stopPropagation();
		e.preventDefault();
		// Extend the life of session
		//extendSession();

		/*
		if (window.stop !== undefined) {
			window.stop();
		}
		else if (document.execCommand !== undefined) {
			document.execCommand('Stop', false);
		} 
		*/

		// Normalize based on device
		e = (typeof e.originalEvent.touches == 'undefined') ? e : e.originalEvent.touches[0];

		var viewer = $(this).closest('.viewer');
		// Activate the viewer status
		$(viewer).data('status', 'active');
		// Save current X of mouse
		$(viewer).data('x', e.pageX);
		// Save current U of mouse
		$(viewer).data('y', e.pageY);
		//myImage = $(cur).get(0);
		if ($('#main').data('mode') == 'imgWindow')
		{
			// Get the Window Width from viewer
			var wW	   = $(viewer).data('wWidth');
			// Get the Window Center from viewer
			var wC	   = $(viewer).data('wCenter');
			// Get the current index
			var index = parseInt($(viewer).find('.totalImages').text()) - 1;
			// Get the current "cover" image
			var cur    = $(viewer).find('img').eq(index);
			myImage = null;
			myImage = new Image(1,1);
			myImage.onload = function() { if (myImage != null) $(cur).attr('src', myImage.src); myImage = null;};
			myImage.src = $(viewer).data('src')+'&rows=256&windowCenter='+wC+'&windowWidth='+wW;//+'&imageQuality=9');
		}

	});
	$('.images').bind('mouseup touchend', function(e) {
		// Stop everything
		e.stopPropagation();
		e.preventDefault();
		
		var viewer = $(this).closest('.viewer');
		// Remove status
		$(viewer).removeData('status');
		if ($('#main').data('mode') == 'imgZoom' || $('#main').data('mode') == 'imgWindow')
		{
			// Only for Zoom and W/L do something. First update width (cols)
			$(viewer).data('cols', $(viewer).find('.activeImage').width());

			
			myImage = null;

			/*
			if (window.stop !== undefined) {
				window.stop();
			}
			else if (document.execCommand !== undefined) {
				document.execCommand('Stop', false);
			} 
			*/
			var cur = $(viewer).find('.activeImage');
			// Get the Window Width from viewer
			var wW	   = $(viewer).data('wWidth');
			// Get the Window Center from viewer
			var wC	   = $(viewer).data('wCenter');
			// Get the current index
			var index = parseInt($(viewer).find('.totalImages').text()) - 1;
			var series = $(viewer).data('series');
			var url = series.seriesImages[index]+'&windowCenter='+wC+'&windowWidth='+wW;
			$(cur).attr('src',  url);

			// Then update sorrounging images
			//setTimeout(function() { updateImages(viewer, updateRange, 0); }, 1000);
			updateImages(viewer, updateRange, 0);
		}
		// Extend the life of session
		extendSession();
	});
	$('.images').bind('mousemove touchmove', function(e) {
		// Stop everything
		e.stopPropagation();
		e.preventDefault();
		var viewer = $(this).closest('.viewer');

		// Normalize based on device
		e = (typeof e.originalEvent.touches == 'undefined') ? e : e.originalEvent.touches[0];

		// Only do stuff is mouse is down (status == active)
		if ($(viewer).data('status') == 'active')
		{
			// Scroll (easy)
			if ($('#main').data('mode') == 'imgScroll')
			{
				// Calculate "delta" from mouse movement
				var d1 = (parseInt($(viewer).data('y')) - e.pageY);
				var d2 = (parseInt($(viewer).data('x')) - e.pageX);
				var d = (Math.abs(d1) > Math.abs(d2)) ? d1 : d2;
				// Get the height of the viewer
				var h = $(viewer).height() - 55;
				// Get the total images
				var total = parseInt($(viewer).data('total'));
				var val   = (val > 100) ? 1 : 2;
				// Get the speed of scroll
				d = parseInt(d/val);
				// Navigate the scrolling images
				navigate($(viewer), d);
				// Sync the viewers
				if ($('#imgSync').is(':checked'))
				{
					// Other
					var other = $(viewer).siblings('.half').eq(0);
					// Navigate (should start at the same index???)
					navigate($(other), d);
				}
			}
			// Pan (easy)
			if ($('#main').data('mode') == 'imgPan')
			{
				// Find top
				var top  = parseInt($(viewer).find('img.activeImage').css('top'));
				// Find left
				var left = parseInt($(viewer).find('img.activeImage').css('left'));
				// Check for "Not a Number" cases
				top = isNaN(top) ? 0 : top;
				left = isNaN(left) ? 0 : left;

				// Calculate new top and left
				top  = top - (parseInt($(viewer).data('y')) - e.pageY);
				left = left - (parseInt($(viewer).data('x')) - e.pageX);
				// Update values
				$(viewer).find('img').css({top:top, left:left});
				// Sync the viewers
				if ($('#imgSync').is(':checked'))
				{
					// Other
					var other = $(viewer).siblings('.half').eq(0);
					// Do the trick
					$(other).find('img').css({top:top, left:left});
				}
				updateDimensions(viewer);
			}
			// Zoom (working fine)
			if ($('#main').data('mode') == 'imgZoom')
			{
				// Current active image: "cover"
				var image = $(viewer).find('img.activeImage');
				// Find top
				var top  = parseInt($(image).css('top'));
				// Find left
				var left = parseInt($(image).css('left'));
				// Check for "Not a Number" cases
				top = isNaN(top) ? 0 : top;
				left = isNaN(left) ? 0 : left;

				// Find width of image
				var w = $(image).width();
				// Find height of image
				var h = $(image).height();
				// Calculate ratio
				var ratio = w/h;
				// Calculate "delta" from mouse movement
				var yDiff = (parseInt($(viewer).data('y')) - e.pageY);
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
				$(viewer).data('cols', w);
				// Update current image
				$(image).height(h).css({top:top, left:left});
				// Update stack of images
				$(viewer).find('img').width(w).height(h).css({top:top, left:left});

				// Sync the viewers
				if ($('#imgSync').is(':checked'))
				{
					// Other
					var other = $(viewer).siblings('.half').eq(0);
					// Navigate (should start at the same index???)
					$(other).find('img').width(w).height(h).css({top:top, left:left});
				}
				updateDimensions(viewer);
			}
			// Window/Level
			if ($('#main').data('mode') == 'imgWindow')
			{
				// Get the Window Width from viewer
				var wW	   = $(viewer).data('wWidth');
				// Get the Window Center from viewer
				var wC	   = $(viewer).data('wCenter');
				// Get the current index
				var index = parseInt($(viewer).find('.totalImages').text()) - 1;
				// Get the current "cover" image
				var cur    = $(viewer).find('img').eq(index);
				// Update Window Width and Window Center
				wW -= (parseInt($(viewer).data('y')) - e.pageY);
				wC -= (parseInt($(viewer).data('x')) - e.pageX);
				// Update the src of current image
				//$(cur).attr('src', $(viewer).data('src')+'&columns='+$(cur).width()+'&windowCenter='+wC+'&windowWidth='+wW);//+'&imageQuality=9');
				// Save back the Window Width and Center
				$(viewer).data('wWidth', wW).data('wCenter', wC);
				$(viewer).find('.winlev').html('win:'+wW+'<br />lev:'+wC);
				//if (tempImage != null) tempImage = null;
				//tempImage = new Image(1,1);
				//tempImage.onload = function() { image.src = tempImage.src; };
				//tempImage.onload = function() { $(cur).attr('src', tempImage.src);};
				//tempImage.onerror = function() { ShowLoadingPanelFailure("Loading Failed", false); };
				//tempImage.onabort = function() { ShowLoadingPanelFailure("Loading Failed", false); };
				//tempImage.src = $(viewer).data('src')+'&windowCenter='+wC+'&windowWidth='+wW;
				//$(cur).attr('src', $(viewer).data('src')+'&windowCenter='+wC+'&windowWidth='+wW);//+'&imageQuality=9');
				//myImage.src = $(viewer).data('src');
				
				/*
				if ( myImage == null  || ! myImage.complete) 
				{
					if (window.stop !== undefined) {
						window.stop();
					}
					else if (document.execCommand !== undefined) {
						document.execCommand('Stop', false);
					}   
				}
				*/
				
				
				if ( myImage == null  || myImage.complete) 
				{
					if (myImage != null) myImage = null;
					myImage = new Image(1,1);
					myImage.onload = function() { if (myImage != null) { $(cur).attr('src', myImage.src); myImage = null;}};
					//tempImage.onload = function() { image.src = tempImage.src; };
					//tempImage.onload = function() { $(cur).attr('src', tempImage.src);};
					//tempImage.onerror = function() { ShowLoadingPanelFailure("Loading Failed", false); };
					//tempImage.onabort = function() { ShowLoadingPanelFailure("Loading Failed", false); };
					//myImage.onabort = function() { changeServer1(); };
					myImage.src = $(viewer).data('src')+'&rows=256&windowCenter='+wC+'&windowWidth='+wW;//+'&imageQuality=9');
					//myImage.src = $(viewer).data('src')+'&windowCenter='+wC+'&windowWidth='+wW;//+'&imageQuality=9');
				}
				
			}
			// Setting x and y new values
			$(viewer).data('x', e.pageX);
			$(viewer).data('y', e.pageY);
		}
		return false;
	});

	// Button that navigates the series "up" or "down"
	$('.nav a').click(function(e){
		// No propagation nor default
		e.stopPropagation();
		e.preventDefault();
		// Find the delta
		d = ($(this).html() == 'Up') ? 1 : -1;
		// Navigate to next
		navigate($(this).closest('.half'), d);
		// Return false
		return false;
	});

	// Bind the scroll wheel to navigate the series "up" or "down"
	$('.viewer').bind('wheel', function(e, d){
		// No propagation nor default
		e.stopPropagation();
		e.preventDefault();
		// Navigate to next (based on delta)
		navigate($(this), d);
		// Sync the viewers
		if ($('#imgSync').is(':checked'))
		{
			// Other
			var other = $(this).siblings('.half').eq(0);
			// Navigate (should start at the same index???)
			navigate($(other), d);
		}
	});	
	
	$(window).resize(function() {
		//$('#temp').html('');
		$('.half').each(function(i) {
			if ($(this).find('.activeImage').length > 0)
			{
				// Get dimensions
				var dimensions = $(this).data('dimensions');
				// New viewer width
				var currentW = $(this).width();
				// New viewer height
				var currentH = $(this).height();
				// Old viewer width
				var previousW = dimensions.vw;
				// Old viewer height
				var previousH = dimensions.vh;
				// Image Height
				var imageH = dimensions.h;
				// Image Width
				var imageW = dimensions.w;
				// Image Left
				var left = dimensions.l;
				// Image Left
				var top = dimensions.t;
				// Ratios
				var ratioW = currentW/previousW;
				var ratioH = currentH/previousH;
				var differenceW = currentW - previousW;
				var differenceH = currentH - previousH;
				imageH = imageH*ratioH;
				imageW = imageW*ratioH;
				//$('#temp').show().append($(this).attr('id')+' left '+left);
				//left = left*ratioW;
				//$('#temp').show().append($(this).attr('id')+' left '+left);
				top  = top*ratioH;
				left = left*ratioW;
				//left += differenceW/2;
				//top  += differenceH/2;
				$(this).find('.activeImage, .images img').width(imageW).height(imageH).css({top:top, left:left});
				// Save dimensions back
				$(this).data('dimensions', {vh:currentH, vw:currentW, h:imageH, w:imageW, t:top, l:left});
			}
		});
	});
	/*
	* This function loads documents right after menu is loaded for faster response.
	* Results seat and wait in their corresponding pane
	*/
	function prepareDocs()
	{
		var seriesIndex = 0;
		// Navigate the list in menu
		$('#menu li a.item').each(function(i) {
			// If attachment or report => simulate click
			if ($(this).hasClass('Attachment') || $(this).hasClass('Report') || $(this).hasClass('Video')) {
				// Check Session
				checkSession();
				// Call the ajax href but forgets the response. Triggers the preparation of docs at the server from client
				$.get($(this).attr('href'), function(response, status, xhr) {
					// Inject result to temp div (not displayed)
					$('#temp').html(response);
				});
			}
			if ($(this).hasClass('series') && autoloadSeries) {
				seriesResponse = {};
				// Check Session
				checkSession();
				//alert($(this).attr('href'));
				var elem = $(this);
				var pane = ['vTL', 'vTR', 'vBL', 'vBR'];
				// Get metadata info about the series
				$.getScript($(this).attr('href'), function(data) {
					// Check for cases when load did not load properly
					if (typeof seriesResponse == 'undefined') return false;
					if (seriesResponse.modality == 'CR')
					{
						loadSeries(elem, 'vTL');
						$('#imgFull').trigger('click');
						autoloadSeries = false;
					}
					if (seriesResponse.modality == 'MR' || seriesResponse.modality == 'CT')
					{
						loadSeries(elem, pane[seriesIndex]);
						//$('#imgFull').trigger('click');
						seriesIndex++;
						if (seriesIndex > 3)
							autoloadSeries = false;
					}
				});
			}
		});
		// No more autoload
		autoloadSeries = false;
	}
	
	/*
	* This function does the following to the menu items:
	* - Clicks
	* - Wheeling
	* - Drag/drop
	*/
	function activateDrag()
	{
		// Image viewer hover
		$('#menu li').hover(
			function() {
				$(this).find('.clickPanes').show();
			},
			function() {
				$(this).find('.clickPanes').hide();
			}
		);

		$('.paneLoader').hover(
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
			// Extend the life of session
			extendSession();
			loadSeries($(this).parent().parent().parent().find('.series'), $(this).attr('href').substring(1));
		});
		
		// When clicking load to the corresponding pane
		$('#menu li a.item, #menu .aPane').click(function(e) {
			// No propagation nor default
			e.stopPropagation();
			e.preventDefault();
			// Extend the life of session
			extendSession();
			// Find the elem that has the information
			var elem = $(this).hasClass('item') ? $(this) : $(this).parent().parent().find('.item');
			
			//$('#menu li').removeClass('selected');
			//$(this).parent().addClass('selected');
			// Attachment case
			if ($(elem).hasClass('Attachment')) {
				loadAttachment($(elem));
			}
			// Report case
			if ($(elem).hasClass('Report')) {
				loadReport($(elem));
			}
			// Video case
			if ($(elem).hasClass('Video')) {
				loadVideo($(elem));
			}
			// Series case (images)
			if ($(elem).hasClass('series')) {
				// If pane is shown in full, load case there, otherwise use top left
				//side = ($('.fullPane').length == 1) ? $('.fullPane').attr('id') : 'vTL';
				transitionLayout($('.activeLayout').attr('id').substring(3), '2x2');
				// Load series
				//loadSeries($(elem), side);
				loadSeries($(elem), 'vTL');
			}
		});

		// When Right clicking load to the corresponding pane
		$('#menu li a.item, #menu .aPane').bind('contextmenu', function(e) {
			// No propagation nor default
			e.stopPropagation();
			e.preventDefault();
			// Extend the life of session
			extendSession();
			// Find the elem that has the information
			var elem = $(this).hasClass('item') ? $(this) : $(this).parent().parent().find('.item');

			//$('#menu li').removeClass('selected');
			//$(elem).parent().addClass('selected');
			// Series case (images)
			if ($(elem).hasClass('series')) {
				//var side = 'vTR';
				// If Right is shown in full, load case there, otherwise use left
				//side = ($('#vTL').hasClass('full')) ? 'vTL' : side;
				// If pane is shown in full, load case there, otherwise use top left
				//side = ($('.fullPane').length == 1) ? $('.fullPane').attr('id') : 'vTR';
				transitionLayout($('.activeLayout').attr('id').substring(3), '2x2');
				// Load series
				//loadSeries($(elem), side);
				loadSeries($(elem), 'vTR');
			}
		});

		// Dragging
		$('.drag').click(function(){return false;})
			.drag('start', function( ev, dd ){
				// Start dragging
				// Clone. Add opacity, it is absolute, set fixed width, on top of everything, append to body and avoid the click
				return $( this ).clone()
					.css('opacity', .75 ).addClass('abs').width(260).addClass('layer9')
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
				var item = $(this).find('a');
				//$('#menu li').removeClass('selected');
				//$(this).addClass('selected');
				// Attachment case
				if ($(item).hasClass('Attachment')) {
					loadAttachment(item);
				}
				// Report case
				if ($(item).hasClass('Report')) {
					loadReport(item);
				}
				// Series case (images)
				if ($(item).hasClass('series')) {
					// Load series
					loadSeries($(item), $(dd.drop).attr('id'));
				}
			});
		// Needed to have the drop being triggered
		$('.drop')
			.drop(function(){
			//Even thought it does nothing
			})
			.drop('start',function(){
				$( this ).addClass('opPane');
			})
			.drop('end',function(){
				$( this ).removeClass('opPane');
			});

		$.drop({ mode:"overlap" });
		/*
		// Unbind any wheel event
		$('#menu').unbind('wheel');
		// Bind the wheel events for the menu
		$('#menu').bind('wheel', function(e, d){
			// No propagation nor default
			e.stopPropagation();
			e.preventDefault();
			// Return if outside lower bound
			if ($(this).height() < diff) return false;
			// Calculate the height of the menu
			var menuH = $(this).height() - diff + menuOffset;
			// Get the current top
			var top = parseInt($(this).css('top'));
			// Add/substract 50 pixels according to wheel
			top += d*50;
			// Check for limits
			top = (top > 0) ? 0 : ((top < -1 * (menuH)) ? (-1 * (menuH)) : top);
			// Set new top
			$(this).css('top', top+'px');
		});
		*/
	}

	/* 
	* This function scrolls the menu up or down
	* @param	integer	the number of pixels to scroll
	*/
	function scrollMenu(d)
	{
		// Check if menu height is within limits
		if ($('#menu').height() < diff) return false;
		// Get the height of the menu
		var menuH = $('#menu').height() - diff + 18;
		// Get current top
		var top = parseInt($('#menu').css('top'));
		// Add "delta" pixels
		top += d;
		// Check for the limits
		top = (top > 0) ? 0 : ((top < -1 * (menuH)) ? (-1 * (menuH)) : top);
		// Set new top
		$('#menu').css('top', top+'px');
	}

	/* 
	* This function loads a attachment
	* Sets the right toolbars and shows correct pane
	* @param	jquery	the element that contains the info of the attachment
	*/
	function loadAttachment(item)
	{
		// Hide viewers and toolbars
		$('.toolbar, .viewer').hide();
		// Remove active viewer for any half
		$('.half').removeClass('activeViewer');
		// Show toolbar for attachments
		$('#toolDocs').show();
		// Now loading
		$('#vFull').html('loading...').show();
		// Check Session
		checkSession();
		$.get($(item).attr('href'), function(response, status, xhr) {
			// Got response, place it
			$('#vFull').html(response);
			// Simulate the small click (one next to the other)
			$('#smallZoom').triggerHandler('click');
		});
	}

	/* 
	* This function loads a video
	* Sets the right toolbars and shows correct pane
	* @param	jquery	the element that contains the info of the attachment
	*/
	function loadVideo(item)
	{
		// Hide viewers and toolbars
		$('.toolbar, .viewer').hide();
		// Remove active viewer for any half
		$('.half').removeClass('activeViewer');
		// Now loading
		$('#vFull').html('loading...').show();
		// Check Session
		checkSession();
		$.get($(item).attr('href'), function(response, status, xhr) {
			// Got response, place it
			$('#vFull').html(response);
			$('#vFull a.media').media( {autoplay:true});
		});
	}

	/* 
	* This function loads a report
	* Sets the right toolbars and shows correct pane
	* @param	jquery	the element that contains the info of the report
	*/
	function loadReport(item)
	{
		// Hide viewers and toolbars
		$('.toolbar, .viewer').hide();
		// Remove active viewer for any half
		$('.half').removeClass('activeViewer');
		// Loading
		$('#vReport').html('loading...').show();
		// Check Session
		checkSession();
		$.get($(item).attr('href'), function(response, status, xhr) {
			// Show text
			$('#vReport').html(response);
		});
	}
	
	/* 
	* This function loads a series
	* Needs to know the element to load and the viewer to use
	* @param	jquery	the element that contains the info of the series
	* @param	string 	the name of the viewer where the images will be loaded
	*/
	function loadSeries(elem, viewer)
	{
		var viewer = $('#'+viewer);
		$(viewer).find('.images').html('loading....');
		// Hide toolbars, report, attachment, selected viewer and presets
		$('.toolbar, #vReport, #vFull').hide();
		$(viewer).find('.preset').hide();
		
		// Check if there is any active viewer
		if ($('.activeViewer').length == 0)
		{
			// No active viewer, reset viewers to half
			$('.half').removeClass('full').addClass('size1of2').show();
		}
		// Get the description of the series
		var description = $(elem).parent().find('.description').text();

		// Empty the response for the series (name comes from the PHP page)
		/*
		* Some values:
		* - index: index of the image in the WHOLE study (not always 0 for first image of series)
		* - frames: count of total frames for given series
		* - image: 0, the first image of series.
		*/
		seriesResponse = {};
		// Check Session
		checkSession();
		// Get metadata info about the series
		$.getScript($(elem).attr('href'), function(data) {
			// Check for cases when load did not load properly
			if (typeof seriesResponse == 'undefined') return false;
			// Save the response from the series
			$(viewer).data('series', seriesResponse);
			// Prepare the url to get the metadata info of the first image
			imageInfoURL = 'admin/ajax/image?study='+seriesResponse.studyUID+'&image='+seriesResponse.index;
			// Check Session
			checkSession();
			$.getScript(imageInfoURL, function(info) {
				// Save the Window Center and Window Width obtained
				$(viewer).data('wCenter', imageInfo.wCenter).data('wWidth', imageInfo.wWidth);
				// Save the default Window Center and Window Width
				$(viewer).data('defaultWCenter', imageInfo.wCenter).data('defaultWWidth', imageInfo.wWidth);
				// Save total frames for series
				$(viewer).data('total', seriesResponse.frames);
				// Get the HTML to be injected
				var img = getImagesSource(0, 0, seriesResponse.frames, viewer, 'html');
				// Update total loaded
				$(viewer).data('loaded', 0);
				var today = new Date();
				$(viewer).data('start', today.getTime());
				$(viewer).find('.winlev').html('win:'+imageInfo.wWidth+'<br />lev:'+imageInfo.wCenter);
				// Inject the images
				$(viewer).find('.images').html(img);
				if (seriesResponse.modality == 'CT' || seriesResponse.modality == 'MR')
				{
					// Show presets only if they are CT or MR
					$(viewer).find('.preset span').show().text('Presets');
				}
				if ($(viewer).hasClass('video'))
				{
					$(viewer).data('mode', 'playback');
				}
				else
				{
					$(viewer).data('mode', 'series');
				}
				// Save current viewer width for resize
				updateDimensions(viewer);
				updateDisplayViewer(viewer);
			});
			// Get the study info
			//var studyInfo = ($('#studies select').length == 1) ? $('#studies').find('option:selected').text() : $('#studies').text();
			// Save the src of the "cover" image
			$(viewer).data('src', seriesResponse.seriesImages[0]);
			// Inject the "study" and "series" info
			//$(viewer).find('.seriesDescription').html(studyInfo + '<br />' +description);
			$(viewer).find('.seriesDescription').html($('#studies').find('option:selected').text() + '<br />' +description);
			// Inject the current image order
			$(viewer).find('.totalImages').html('1 out of '+seriesResponse.frames);
			// Hide presets
			$(viewer).find('.preset span').hide();
			// Show the imaging tools
			$('#toolImgs').show();
		});
	}

	function updateDisplayViewer(viewer)
	{
		var mode = $(viewer).data('mode');
		if (mode == 'series')
		{
			// Show the "Reset" and "Window/Level" Button. Hide the Play
			$(viewer).find('.reset').show();
			$('#imgWindow').show();
			$('.playback').hide();
		}
		else
		{
			// Show the "Play" Button. Hide "Reset" and "Window/Level"
			$(viewer).find('.playback').show();
			$(viewer).find('.reset, .winlev, .totalImages').hide();
			$('#imgWindow').hide();
		}
	}
	
	function hoverViewer(viewer, place)
	{
		var mode = $(viewer).data('mode');
		if (place == 'on')
		{
			// If there is a series loaded, show the presets (if possible) and "up" & "down" buttons
			if ($(viewer).find('.totalImages').html() != '') 
			{
				if (mode == 'series')
				{
					$(viewer).find('.nav, .preset, .interactive').show();
				}
			}
			// Show the toggling of the panes ("Full" <-> "Restore"). Show txtInfo
			$(viewer).find('.togglePanes, .txtInfo').show();
			
		}
		else
		{
			// Hide all the "buttons"
			$(viewer).find('.togglePanes, .nav, .preset, .interactive').hide();
			// Remove the data "status" from viewer, to prevent unnecesary actions
			$(viewer).removeData('status');
			if ($('.activeText').length == 0)
			{
				// Hide the txtInfo classes again, Text is not selected
				$(viewer).find('.txtInfo').hide();
			}
		}
	}
	
	/* 
	* This function returns the HTML source to be injected with the images
	* @param	integer	the starting image (usually 0)
	* @param	integer	the current image (for the "cover" or displayed one)
	* @param	integer	the total images (if -1 it takes all the available frames. Usually is -1)
	* @param	jquery	the viewer used
	*/
	function getImagesSource(start, current, total, viewer, returnFormat)
	{
		// Get the Width and Height of the current images container (viewer)
		var viewerW = $(viewer).width();
		var viewerH = $(viewer).height();
		var viewerId = $(viewer).attr('id');
		// Get the Window Width from viewer
		var wW     = $(viewer).data('wWidth');
		// Get the Window Center from viewer
		var wC     = $(viewer).data('wCenter');
		// SeriesResponse
		var seriesResponse = $(viewer).data('series');
		// Check if defined
		if (typeof seriesResponse == 'undefined') return false;
		// Variable that holds the html to be injected with the images
		var img = '';
		// Calculate the total appropriately
		total = (total == -1) ? seriesResponse.frames : total;
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
			
			if (seriesResponse.ratio[i] <= (viewerW/viewerH))
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
			//var url    = seriesResponse.seriesImages[i]+d;
			var url    = seriesResponse.seriesImages[i];
			src = server+shared_path+url;
			// Set the proper Window Center and Width
			src += '&windowCenter='+wC+'&windowWidth='+wW;
			
			data[data.length] = {h : h, w: w, l: l, t: t, src: src, url: url, c: imgClass};
			/*
			if (iImage != null)
			{
				iImage = null;
			}
			iImage = new Image();
			iImage.src = src;
			*/
			/***********************
			//error = 'onerror="this.onerror=null;this.src=\''+src.replace('wado', 'wado2')+'\';"';
			//img += '<img  class="abs '+imgClass+'" style="left:'+left+'px;top:'+t+'px;" '+error+' src="'+src+'" />';
			***********************/
			// Create the image object
			img += '<img  class="abs '+imgClass+'" style="left:'+l+'px;top:'+t+'px;'+dims+'" src="'+src+'" onload="updateCount('+i+', \''+$(viewer).attr('id')+'\');" />';
		}
		// Save the width (cols)
		$(viewer).data('cols', w);

		data = (returnFormat == 'html') ? img : data;
		return data;
	}
	
	function changeServer()
	{
		/*
		var src = this.src;
		var server = src.substring(0, src.indexOf(shared_path) - 1);
		var rest   = src.substring(src.indexOf(shared_path));
		var viewerId = $(this).closest('.viewer').attr('id');
		var newServer = servers[viewerId][Math.floor(Math.random()*servers[viewerId].length)];
		
		this.src = newServer+rest;
		*/
		
		var aborted = $('#debug').text();
		aborted = (aborted == '') ? 0 : parseInt(aborted);
		aborted++;
		//$('#debug').show().text(aborted);
	}
	
	function changeServer1()
	{
		/*
		var src = this.src;
		var server = src.substring(0, src.indexOf(shared_path) - 1);
		var rest   = src.substring(src.indexOf(shared_path));
		var viewerId = $(this).closest('.viewer').attr('id');
		var newServer = servers[viewerId][Math.floor(Math.random()*servers[viewerId].length)];
		
		this.src = newServer+rest;
		*/
		
		var aborted = $('#debug').text();
		aborted = (aborted == '') ? 0 : parseInt(aborted);
		aborted++;
		//$('#debug').show().text(aborted+' aborted');
	}

	function updateCount(id, viewer)
	{
		var viewer = $('#'+viewer);
		$(viewer).find('.loading').show();
		var loaded = parseInt($(viewer).data('loaded'));
		loaded++;
		$(viewer).data('loaded', loaded);
		var total = $(viewer).data('total');
		
		$(viewer).find('.loading').text(parseInt(100*loaded/total)+'%');
		if (total == loaded || $(viewer).find('.loading').text() == '100%')
		{
			var start = parseInt($(viewer).data('start'));
			var today = new Date();
			var diff = today.getTime() - start;
				// Update total loaded
				$(viewer).data('loaded', 0);
				//var today=new Date();
				$(viewer).data('start', today.getTime());
			//$(viewer).find('.loading').hide();
			$(viewer).find('.loading').text(diff);
		}
		if (total <= loaded)
		{
			changeServer();
		}
	}

	/* 
	* This function resets the images in viewer
	* @param	jquery	the viewer used
	*/
	function resetImages(viewer)
	{
		// Get the current index
		var current = parseInt($(viewer).find('.totalImages').html()) - 1;
		// Get the total
		var total = $(viewer).data('total');
		// Get the HTML for the display (resetted)
		var img = getImagesSource(0, current, total, viewer, 'object');
		// Update current
		$(viewer).find('.activeImage').attr('src', img[current].src).css({left:img[current].l+'px', top:img[current].t+'px'}).width(img[current].w).height(img[current].h);
		// Save the default Window Center and Window Width
		var defaultWCenter = $(viewer).data('defaultWCenter');
		var defaultWWidth  = $(viewer).data('defaultWWidth');
		// Save back the default values 
		$(viewer).data('wCenter', defaultWCenter).data('wWidth', defaultWWidth);
		$(viewer).find('.winlev').html('win:'+defaultWWidth+'<br />lev:'+defaultWCenter);

		for (var i = 0; i < total; i++)
		{
			if (i == current) continue;
			// Get image
			var image = $(viewer).find('img').eq(i);
			// Reset positioning and size
			$(image).css({left:img[i].l+'px', top:img[i].t+'px'}).width(img[i].w).height(img[i].h);
			// Find src
			var src = $(image).attr('src');
			// Get URL out of source
			var url = src.substring(src.indexOf(shared_path) + shared_path.length);
			// Compare if different (this check is done to prevent cases when the same image is loaded from an alias)
			if (img[url] != url)
			{
				// Update then
				$(image).attr('src', img[i].src);
			}
		}
		
		updateDimensions(viewer);
	}
	
	/* 
	* This function plays a video
	* @param	jquery	the viewer used
	* @param	string	the mode
	* @param	integer	the playback speed in milliseconds
	*/
	function playBack(viewer, mode, speed)
	{
		speed = (typeof speed == 'undefined') ? 100 : speed;
		
		switch (mode)
		{
			case 'play' :
				var t = setInterval(function(){ doPlay(viewer); }, speed);
				$(viewer).data('interval', t);
				break;
			case 'pause':
				clearInterval($(viewer).data('interval'));
				break;
		}
	}

	function doPlay(viewer)
	{
		// Load the series
		var series = $(viewer).data('series');
		// Get the current image index
		var index = parseInt(series.image);
		// Get total
		var total = parseInt(series.frames);
		// Check what to do
		if (index + 1 >= total)
		{
			clearInterval($(viewer).data('interval'));
		}
		else
		{
			navigate(viewer, -1);
		}
	}
	
	/* 
	* This function updates images from viewer in the background
	* @param	jquery	the viewer used
	* @param	integer	the number of images to load
	* @param	integer	the direction (think of it as a stack of images) for the upload
	*/
	function updateImages(viewer, range, direction)
	{
		// direction 1 => scroll up, index is decreased, top of stack
		var series = $(viewer).data('series');
		// Get the Window Width from viewer
		var wW     = $(viewer).data('wWidth');
		// Get the Window Center from viewer
		var wC     = $(viewer).data('wCenter');

		// Find out the current image index
		var cur   = series.image;
		// Get the width (cols) according to viewer
		var cols  = $(viewer).data('cols');

		var viewerId = $(viewer).attr('id');
		
		var serversLength = servers[viewerId].length;
		var myServers     = servers[viewerId];
		// Navigate all images
		// TODO: improve to only navigate allowed range
		$(viewer).find('img').each( function(index){
			// Variable to find out if current image is in range
			var inRange = false;
			// Check direction and range
			switch (direction)
			{ 
			  case -1: inRange = ((index >= cur) && (index <= cur + range)); break;
			  case  0: inRange = ((index >= cur - range/2) && (index <= cur + range/2)); break;
			  case  1: inRange = ((index >= cur - range) && (index <= cur)); break;
			}
			// Verify if current image is in range or active image is actually current
			//if (inRange || (index == cur))
			if (inRange)
			{
				//var url = series.seriesImages[index]+'&columns='+cols+'&windowCenter='+wC+'&windowWidth='+wW;
				var url = series.seriesImages[index]+'&windowCenter='+wC+'&windowWidth='+wW;
				var src = $(this).attr('src');
				// Get URL out of source
				var oldUrl = src.substring(src.indexOf(shared_path) + shared_path.length);
				// Calculate new source
				if (oldUrl != url)
				{
					// Alternate servers
					var server = myServers[index % serversLength];
					var newSrc = server+shared_path+url;
					// Update source if new source is different than actual one
					$(this).attr('src', newSrc);
				}
			}
		});
	}
	
	/* 
	* This function updates the display of current viewable image. It triggers the update of rest of images
	* @param	jquery	the viewer used
	* @param	integer	the number of images to hop (increase/decrease)
	*/
	function navigate(viewer, d)
	{
		// Load the series
		var series = $(viewer).data('series');
		// Check if not defined
		if (typeof series == 'undefined') return false;
		// Get the current image index
		var index = parseInt(series.image);
		// Calculate the delta
		d = Math.round(d);
		// Set limits to max 5 images at a time (to avoid to fast scrolling)
		d = (d < -5) ? ((d == -999) ? d : -5) : ((d > 5) ? ((d == 999) ? d : 5) : d);
		// Update indes
		index -= d;
		// Calculate direction
		d = (d < 0) ? -1 : 1;
		// Check limits
		index = (index >= series.frames) ? (series.frames - 1) : (index < 0 ? 0 : index);
		// Find new "cover" image index
		var image = $(viewer).find('.images img').eq(index);
		// Deactive current "cover" image. Hide them all.
		$(viewer).find('.images img').addClass('none').removeClass('activeImage');
		// Now active new "cover" image
		$(image).removeClass('none').addClass('activeImage');
		// Update the images
		updateImages(viewer, updateRange, d);
		// Update the index bar
		$(viewer).find('.totalImages').html((index + 1) +' out of '+series.frames);
		// Save back the new index
		series.image = index;
		// Setting the src for current image and updating the series (for index)
		$(viewer).data('series', series).data('src', series.seriesImages[index]);
	}
	
	/******
	* TODO: Add functionality for Remote Sharing of Desktop.
	* Consider:
	* - Serialize events
	* - Write/Read info from server (comet?)
	* - Proper queue (have necessary events in queue to reflect sync)
	* - Values in %
	*********/
	
	window.updateCount = updateCount;
	window.changeServer = changeServer;
	window.changeServer1 = changeServer1;
})(jQuery);
                                                    