<?php defined('SYSPATH') or die('No direct script access.');

abstract class Kostache_Layout extends Kohana_Kostache_Layout {

	public $test_variable = 'hint.auth.register.success';
	
	public static $cache = array();

	public function checking()
	{
		return 'hint.auth.register.success';
	}
	
	/**
	 * Dynamically returns the translation for a string given.
	 * It will render the section inside the contents to take advantage of
	 * dynamic values
	 * 
	 * @access public
	 * @return string
	 */
	public function i18n()
	{
		// TODO: Find out how to either let the lambda function render the sub-section.
		// Should this be ran from Mustache directly?
		$view = $this;
		return function($string) use ($view)
		{
			if (isset(Kostache_Layout::$cache[$string]))
			{
				return Kostache_Layout::$cache[$string];
			}
			
			// Create a new Mustache object based on the view and text inside.
			$template = new Kohana_Mustache($string, $view, $view->partials(), array(
				'charset' => Kohana::$charset,
			));
			
			// Render it
			$text = $template->render();

			if (strpos($text, '.') === FALSE)
			{
				// No dot, treat it as direct translation
				Kostache_Layout::$cache[$string] = __($text);
			}
			else
			{
				$parts = explode('.', $text);
				$file = array_shift($parts);
				$path  = is_array($parts) ? implode('.', $parts) : $parts;
			
				
				Kostache_Layout::$cache[$string] = (is_array($result = Kohana::message($file, $path))) ? $text : $result;
			}
			
			return Kostache_Layout::$cache[$string];
		};
	}

	/**
	 * Dynamically returns the formatting of a date
	 * It will render the section inside the contents to take advantage of
	 * dynamic values
	 * 
	 * @access public
	 * @return string
	 */
	public function date_format()
	{
		$view = $this;
		return function($string) use ($view)
		{
			if (isset(Kostache_Layout::$cache[$string]))
			{
				return Kostache_Layout::$cache[$string];
			}
			
			// Create a new Mustache object based on the view and text inside.
			$template = new Kohana_Mustache($string, $view, $view->partials(), array(
				'charset' => Kohana::$charset,
			));
			
			// Render it
			$text = $template->render();

			$parts = explode('|', trim($text));
			$format = Arr::get($parts, 1, '');
			Kostache_Layout::$cache[$string] = date(trim($format), (int) trim($parts[0]));
			
			return Kostache_Layout::$cache[$string];
		};
	}
}