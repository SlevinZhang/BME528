<?php defined('SYSPATH') or die('No direct script access.');

return array(

	// Group name, multiple configuration groups are supported
	'default' => array(

		// Multiple mechanisms can be added for versioned passwords, etc
		'mechanisms' => array(

            // Format: string $prefix => array(string $mechanism, array $config)
            // The prefix must be unique and cannot be changed once a mechanism is in use!
            'pacsproxy' => array('hash', array(
                // Hash type to use when calling hash_hmac()
                'type' => 'sha256',

                // Shared secret HMAC key
				'key' => '$5mnndrfk%?:..3davGF',
            )),
        ),
	),
);
