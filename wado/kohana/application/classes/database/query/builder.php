<?php defined('SYSPATH') or die('No direct script access.');

abstract class Database_Query_Builder extends Kohana_Database_Query_Builder {

	/**
	 * Compiles an array of ORDER BY statements into an SQL partial.
	 *
	 * @param   object  Database instance
	 * @param   array   sorting columns
	 * @return  string
	 */
	protected function _compile_order_by(Database $db, array $columns)
	{
		$sort = array();
		foreach ($columns as $group)
		{
			list ($column, $direction) = $group;

			if ($direction)
			{
				// Make the direction uppercase
				$direction = strtoupper($direction);
			}

			if ($column AND strpos($column, '(') === FALSE)
			{
				// Quote the column, if it has a value
				$column = $db->quote_column($column);
			}

			$sort[] = trim($column.' '.$direction);
		}

		return 'ORDER BY '.implode(', ', $sort);
	}
}
