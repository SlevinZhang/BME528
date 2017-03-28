<?php defined('SYSPATH') or die('No direct script access.');

class Model_PACS {

	// Store the configuration for easy access
	protected $_settings;
	
	protected $_offset;
	protected $_limit;
	protected $_page;
	protected $_sort;
	protected $_direction;
	protected $_search;
	
	protected $_study_uid;
	protected $_sop_instance_uid;
	protected $_accession;

	protected $_documents = array();
	protected $_images = array();
	protected $_study = array();
	
	protected $_site;
	protected $_loaded = FALSE;
	
	protected $_sql = '';
	protected $_sql_params = array(
		'query' => '',
		'from' => '',
		'conditions' => '',
		'order' => '',
		'limit' => '',
	);
	
	/**
	 * Callable database methods
	 * @var array
	 */
	protected static $_methods = array
	(
		'offset', 'limit', 'page', 'direction', 'search',
		'study_uid', 'sop_instance_uid', 'accession',
		'documents', 'images', 'study',
	);
	
	public $last_query_total = 0;

	public static $instances = array();
	
	/**
	 * gets the full name of the product to load
	 *
	 * @param string $site The name of the site
	 * @return  string the model to use: "vendor_product_version"
	 */
	public static function get_full_name($site = '')
	{
		// Get the settings for that site
		$settings = Kohana::$config->load('database.sites.'.$site);
		
		// Convert the "." to "_" for version
		$version = str_replace('.', '_', $settings['version']);
		
		// Finding out the name of the model to use: "vendor_product_version"
		return $settings['vendor'].'_'.$settings['product'].'_'.$version;
	}
	
	/**
	 * Instance method
	 *
	 * @param string $site The name of the site to load
	 * @return  Model the new model
	 */
	public static function instance($site = '')
	{
		// Grab the site, defaults to default site
		$site = ($site == '') ? Kohana::$config->load('database.default_site') : $site;

		// Obtain the full name for product from site
		$name = self::get_full_name($site);
		
		// Combine the site used and the name of the class
		$instance_name = $site.'_'.$name;
		
		if ( ! isset(self::$instances[$instance_name]))
		{
			$class = 'Model_'.ucfirst($name);
			
			$pacs = new $class;
			$pacs->_settings = Kohana::$config->load('database.sites.'.$site);
			$pacs->_site = $site;
			self::$instances[$name] = $pacs;
		}

		return self::$instances[$name];
	}
	
	public function __construct()
	{
	}
	
	/**
	 * Handles pass-through to model methods.
	 *
	 * @param   string  $method Method name
	 * @param   array   $args   Method arguments
	 * @return  mixed
	 */
	public function __call($method, array $args)
	{
		if (in_array($method, Model_PACS::$_methods))
		{
			$value = Arr::get($args, 0);
			
			if ($value == NULL)
				return $this->{'_'.$method};
				
			$this->{'_'.$method} = $value;

			return $this;
		}
		else
		{
			throw new Kohana_Exception('Invalid method :method called in :class',
				array(':method' => $method, ':class' => get_class($this)));
		}
	}
	
	public function sort($value = NULL, $get = FALSE)
	{
		if ($value == NULL)
			return $this->_sort;
			
		if ($get === TRUE)
			return Arr::get($this->_sort, $value);

		if (is_array($value))
		{
			$this->_sort = $value;
		}
		else
		{
			$this->_sort = array(
				'key' => $value,
				'value' => $this->mapping[$value],
			);
		}
		
		return $this;
	}

	/*
	public function offset($value = NULL)
	{
		if ($value == NULL)
			return $this->_offset;
			
		$this->_offset = $value;
		return $this;
	}

	public function search($value = NULL)
	{
		if ($value == NULL)
			return $this->_search;

		$this->_search = $value;
		return $this;
	}

	public function study_uid($value = NULL)
	{
		if ($value == NULL)
			return $this->_study_uid;

		$this->_study_uid = $value;
		return $this;
	}
	
	public function accession($value = NULL)
	{
		if ($value == NULL)
			return $this->_accession;

		$this->_accession = $value;
		return $this;
	}

	public function page($value = NULL)
	{
		if ($value == NULL)
			return $this->_page;

		$this->_page = $value;
		return $this;
	}

	public function limit($value = NULL)
	{
		if ($value == NULL)
			return $this->_limit;

		$this->_limit = $value;
		return $this;
	}
	
	public function direction($value = NULL)
	{
		if ($value == NULL)
			return $this->_direction;

		$this->_direction = $value;
		return $this;
	}

	public function study($value = NULL)
	{
		if ($value == NULL)
			return $this->_study;

		$this->_study = $value;
		return $this;
	}

	public function documents($value = NULL)
	{
		if ($value == NULL)
			return $this->_documents;

		$this->_documents = $value;
		return $this;
	}
	
	public function images($value = NULL)
	{
		if ($value == NULL)
			return $this->_images;

		$this->_images = $value;
		return $this;
	}*/

	public function loaded()
	{
		return $this->_loaded;
	}

	public static function name($string)
	{
		$string = trim(strtolower($string));
		$string = preg_replace('/\s\s+/', ' ', $string);
		$string = preg_replace('/\s/', '^', $string);
		$string = preg_replace('/\^\^+/', '\^', $string);
		$string = str_replace('^', ', ', $string);
		$string = preg_replace('/,,/', ',', $string);
		$string = ucwords($string);
		$string = preg_replace('/,\s([A-Z])$/', ' \1.', $string);
	
		return $string;
	}

	public function sql_compile()
	{
		$this->_sql = implode(' ', $this->_sql_params);
		return $this->_sql;
	}
	
	public function sql_param($key, $value = NULL)
	{
		if ($value === NULL)
			return Arr::get($this->_sql_params, $key, '');
		
		$this->_sql_params[$key] .= ' '.$value.' ';
	}
	
	public function sql_init()
	{
		foreach ($this->_sql_params as $key => $value)
		{
			$this->_sql_params[$key] = '';
		}
		
		return $this;
	}

	public function worklist()
	{
		$results = array();

		// Search all databases
		foreach (Kohana::$config->load('database.sites') as $site => $settings)
		{
			// Get a new PACS model
			$pacs = Model_PACS::instance($site);

			$pacs->page($this->page())
				->limit($this->limit())
				->sort($this->sort('key', TRUE))
				->direction($this->direction())
				->search($this->search());

			// Add sitename and append to results array
			$results[$site] = $pacs->_worklist();
			
			$this->last_query_total += $pacs->last_query_total();
		}

		return $results;
	}

	public function patient()
	{
		$results = array();
		// Search all databases
		foreach (Kohana::$config->load('database.sites') as $site => $settings)
		{
			// Get a new PACS model
			$pacs = Model_PACS::instance($site);

			// Add sitename and append to results array
			$results[$site] = $pacs->_patient($this->patient_id);
		}

		return $results;
	}

	public function patient_studies($id)
	{
		// Search all databases
		$results = array();
		foreach (Kohana::$config->load('database.sites') as $site => $settings)
		{
			// Finding out the name of the model to use
			$pacs = Model_PACS::instance($site);

			$pacs->sort($this->sort('key', TRUE))
				->direction($this->direction());

			$results[$site] = $pacs->_patient_studies($id);
		}
			
		return $results;
	}

	public function process_study()
	{
		if (empty($this->_study_uid))
		{
			throw new Kohana_Exception('The study could not be retrieved.');
		}
		
		// Taking care of study metadata
		if (NULL === $this->_study = Mnode::read_file('exam', $this->_study_uid))
		{
			// Grab fresh data (returns single value)
			$this->_study = $this->_study();
			
			// Set the site
			$this->_study['site'] = $this->_site;

			// Saving the results into the cache
			Mnode::write_file('exam', $this->_study_uid, $this->_study);
		}

		// Taking care of images
		if (NULL === $this->_images = Mnode::read_file('meta', 'img-'.$this->_study_uid))
		{
			// Grab fresh data
			$this->_images = $this->_images();

			// Saving the results into the cache
			Mnode::write_file('meta', 'img-'.$this->_study_uid, $this->_images);
		}

		if (count($this->_images))
		{
			// Prepare the study files and video clips by a background process
			Mnode::execute_command(Mnode::$KOHANA_CLI.' --uri=scripts/prepare-images/'.$this->_study_uid);
		}

		// Taking care of documents
		if (NULL === $this->_documents = Mnode::read_file('meta', 'docs-'.$this->_study_uid))
		{
			// Grab fresh data
			$this->_documents = $this->_documents();

			// Saving the results into the cache
			Mnode::write_file('meta', 'docs-'.$this->_study_uid, $this->_documents);
		}

		if (count($this->_documents))
		{
			// Prepare the attached files by a background process
			Mnode::execute_command(Mnode::$KOHANA_CLI.' --uri=scripts/prepare-documents/'.$this->_study_uid);
		}

		return $this;
	}
	
	public function image()
	{
		// Taking care of images
		if (NULL === $images = Mnode::read_file('meta', 'img-by-sop-'.$this->_study_uid))
		{
			// Grab fresh data
			$items = $this->_images();

			$images = array();

			foreach ($items as $entry)
			{
				$images[$entry['SOPInstanceUID']] = $entry;
			}
			
			// Saving the results into the cache
			Mnode::write_file('meta', 'img-by-sop-'.$this->_study_uid, $images);
			Kohana::$log->add(Log::ERROR, 'writing');
		}

		return $images[$this->_sop_instance_uid];
	}

} // End Model_PACS
