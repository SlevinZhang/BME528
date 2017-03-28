/*
 * @package AJAX_Chat
 * @author Sebastian Tschan
 * @copyright (c) Sebastian Tschan
 * @license GNU Affero General Public License
 * @link https://blueimp.net/ajax/
 */

// Overriding client side functionality:

/*
// Example - Overriding the replaceCustomCommands method:
ajaxChat.replaceCustomCommands = function(text, textParts) {
	return text;
}
 */
 ajaxChat.logout=function() {
		clearTimeout(this.timer);
		var message = 'logout=true';
		this.makeRequest(this.ajaxURL,'POST',message);
//		self.close();
	},
	
 ajaxChat.handleLogout = function(url) {
   window.close();
}