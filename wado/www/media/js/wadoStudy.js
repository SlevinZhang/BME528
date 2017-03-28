/******
* TODO: Add functionality for Remote Sharing of Desktop.
* Consider:
* - Serialize events
* - Write/Read info from server (comet?)
* - Proper queue (have necessary events in queue to reflect sync)
* - Values in %
*********/

(function( $ ){
	
	var wadoStudy = function(options){

		var settings = {
			menuContainerId : '#menuContainer',
			toolbarId : '#toolbar',
			mainId : '#main',
			wrapperClass : '.wrapper',
			activeToolClass : '.activeTool',
			imageToolsId : '#toolImgs',
			ajaxStudiesId : '#ajaxStudies',
		};

		// If options exist, lets merge them
		// with our default settings
		if ( options ) { 
		$.extend( settings, options );

		// This is the available height for the panels: menu, left and right (including bar for tools)
		var diff = $(window).height() - 37;
		var menuContainer = $(window).height() - 19;

		if ($.browser.msie && parseInt($.browser.version) <= 6)
		{
			$(settings.menuContainerId).height(menuContainer);
			$(settings.wrapperClass).height(diff)
			$(settings.mainId, settings.toolbarId).width($(window).width() - 261);
		}

		// Set the mode to Image Panning by default
		$.data($(settings.mainId)[0], 'mode', $(settings.imageToolsId).find(settings.activeToolClass).attr('id'));
		$(settings.imageToolsId).find(settings.activeToolClass).triggerHandler('click');

		// Activate the Drag/drop functionality
		wadoDashboard.drag();

		// Check Session
		wadoSession.checkTimeout();

		var ajax = {

			init : function(){
				// Get the studies for this patient right away
				$.get($(settings.ajaxStudiesId).attr('href'), ajax.study);
			},
			study: function(response, status, xhr){
				// Response is in html format (select), just place it to replace the text
				$('#studies').html(response);
				// Prepare the docs (reports, attachments)
				wDash.docs();
				// Now bind any changes to the select
				$('#studies').bind('change', ajax.change);
			},
			change: function() {
				var $this = $(this);
				// Output from change should go to the menu
				$('#menu').html('loading...');
				// Get option text
				var option_text = $this.find('option:selected').text();
				// Update Accession Number
				$('#accession_number').html(option_text.substring(0, option_text.indexOf(' -')));
				// Check Session
				wadoSession.checkTimeout();
				// Get the results
				$.get($this.find('option:selected').val(), ajax.reponse);
			},
			response: function(res, sta, xml) {
				// Place the results in the menu
				$('#menu').html(res).css('top', 0);
				// Re-activate the drag/drop functionality
				wDash.drag();
				// Prepare the docs (reports, attachments)
				wDash.docs();
			}
		};
		
		// Run the ajax request
		ajax.init();

	};

	// Run it
	wadoStudy();

})(jQuery);