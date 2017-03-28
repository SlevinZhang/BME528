<?php defined('SYSPATH') or die('No direct script access.');
/**
 * URL helper class.
 *
 * @package    Kohana
 * @category   Helpers
 * @author     Kohana Team
 * @copyright  (c) 2007-2011 Kohana Team
 * @license    http://kohanaframework.org/license
 */
class URL extends Kohana_URL {

	/**
	 * Gets the base URL to the application.
	 * To specify a protocol, provide the protocol as a string or request object.
	 * If a protocol is used, a complete URL will be generated using the
	 * `$_SERVER['HTTP_HOST']` variable.
	 *
	 *     // Absolute URL path with no host or protocol
	 *     echo URL::base();
	 *
	 *     // Absolute URL path with host, https protocol and index.php if set
	 *     echo URL::base('https', TRUE);
	 *
	 *     // Absolute URL path with host and protocol from $request
	 *     echo URL::base($request);
	 *
	 * @param   mixed    $protocol Protocol string, [Request], or boolean
	 * @param   boolean  $index    Add index file to URL?
	 * @return  string
	 * @uses    Kohana::$index_file
	 * @uses    Request::protocol()
	 */
	public static function base($protocol = NULL, $index = FALSE)
	{
		// Start with the configured base URL
		$base_url = Kohana::$base_url;

		if ($protocol === TRUE)
		{
			// Use the initial request to get the protocol
			$protocol = Request::$initial;
		}

		if ($protocol instanceof Request)
		{
			// Use the current protocol
			list($protocol) = explode('/', strtolower($protocol->protocol()));
			// Append S to http in case is secure server
			$protocol .= (isset($_SERVER['HTTPS']) ? 's' : '');
		}

		if ( ! $protocol)
		{
			// Use the configured default protocol
			$protocol = parse_url($base_url, PHP_URL_SCHEME);
		}

		if ($index === TRUE AND ! empty(Kohana::$index_file))
		{
			// Add the index file to the URL
			$base_url .= Kohana::$index_file.'/';
		}

		if (is_string($protocol))
		{
			if ($port = parse_url($base_url, PHP_URL_PORT))
			{
				// Found a port, make it usable for the URL
				$port = ':'.$port;
			}

			if ($domain = parse_url($base_url, PHP_URL_HOST))
			{
				// Remove everything but the path from the URL
				$base_url = parse_url($base_url, PHP_URL_PATH);
			}
			else
			{
				// Attempt to use HTTP_HOST and fallback to SERVER_NAME
				$domain = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : $_SERVER['SERVER_NAME'];
			}

			// Add the protocol and domain to the base URL
			$base_url = $protocol.'://'.$domain.$port.$base_url;
		}

		return $base_url;
	}

	/**
	 * Merges the current GET parameters with an array of new or overloaded
	 * parameters and returns the resulting query string.
	 *
	 *     // Returns "?sort=title&limit=10" combined with any existing GET values
	 *     $query = URL::query(array('sort' => 'title', 'limit' => 10));
	 *
	 * Typically you would use this when you are sorting query results,
	 * or something similar.
	 *
	 * [!!] Parameters with a NULL value are left out.
	 *
	 * @param   array    $params   Array of GET parameters
	 * @param   boolean  $use_get  Include current request GET parameters
	 * @return  string
	 */
	public static function query(array $params = NULL, $use_get = TRUE)
	{
		if ($use_get)
		{
			// Use only the current parameters
			$query = Request::current()->query();

			if ($params === NULL)
			{
				// Use only the current parameters
				$params = $query;
			}
			else
			{
				// Merge the current and new parameters
				$params = array_merge($query, $params);
			}
		}

		if (empty($params))
		{
			// No query parameters
			return '';
		}

		// Note: http_build_query returns an empty string for a params array with only NULL values
		$query = http_build_query($params, '', '&');

		// Don't prepend '?' to an empty string
		return ($query === '') ? '' : ('?'.$query);
	}

} // End URL
